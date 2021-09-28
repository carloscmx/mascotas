<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Login_model", "lg");
		$this->load->library('Correo');
		$this->load->helper('modals');
		$this->load->library('session');
		$this->load->model("Catalogo_model", "mc");



		$this->load->library('Utilerias');
	}
	public function PaginaPrincipal()
	{
		if (isset($_SESSION['user_client'])) {
			$url = base_url("cliente/inicio");
			header("Location: $url");
		} else {
			$this->load->view("landing");
		}
	}
	public function restablecerPassword()
	{
		# code...
		$this->template->set("titulo", "Reestabler Password");
		$this->template->load("template/LoginTemplate_view", "contenido", "paginas/restablecer");
	}
	public function restablecerPassword_view()
	{
		$token = $this->uri->segment(4);
		$result = $this->lg->login([
			'login_token_reset' => $token,
			'login_reset' => 1
		]);
		if ($result->num_rows() > 0) {
			# code...
			$this->template->set("titulo", "Reestabler Password");
			$this->template->load("template/LoginTemplate_view", "contenido", "paginas/restablecer_password");
			//	$_SESSION['user_client'] = $datos;
		} else {
			show_error("No se ha podido procesar esta peticion, o ha expirado este enlace.", 403, "Ha ocurrido un error.");
		}
	}
	public function updatePassword()
	{
		$mesaje = ['status' => 'error', 'message' => 'Ha ocurrido un error', 'title' => 'Ha ocurrido un error.'];
		$password = $this->input->post("password");
		$token = $this->input->post("token");
		$result = $this->lg->login([
			'login_token_reset' => $token,
			'login_reset' => 1
		]);
		if ($result->num_rows() > 0) {
			$datos = $result->row();
			$this->lg->actualizarUsuarios(['login_reset' => 0, 'login_token_reset' => "", "contrasena" => sha1($password)], ['id' => $datos->id]);
			$mesaje = ['status' => 'success', 'message' => 'Contrasena Modificada', 'title' => 'Cuenta recuperada.'];
			$_SESSION['user_client'] = $datos;
		}

		echo json_encode($mesaje);
	}

	public function restablecerPasswordEmail()
	{
		$correo = $this->input->post("email", TRUE);
		$result = $this->lg->login([
			'correo' => $correo
		]);
		if ($result->num_rows() > 0) {
			$datos = $result->row();
			$token = $this->utilerias->generateToken();
			$url = base_url("login/restablecer/user/{$token}");
			$bodyhtml = "<h4>Reestablece tu cuenta</h4><br><a target='_blank' href='{$url}'>Reestablecer cuenta.</a>";
			$this->lg->actualizarUsuarios(['login_reset' => 1, 'login_token_reset' => $token], ['id' => $datos->id]);
			$this->correo->enviar_correo("Reestablcer cuenta", $correo, $bodyhtml);


			//	$_SESSION['user_client'] = $datos;
		}
	}
	public function index()
	{
		$this->session->validarSesionCliente();
		$data['mascotas'] = $this->mc->detallemascotas(['iduser' => $_SESSION['user_client']->id, 'activo' => 1])->result();

		$this->template->set("titulo", "Bienvenido");
		$this->template->load("template/Template_view", "contenido", "paginas/Inicio", $data);
	}

	public function login()
	{
		$this->template->set("titulo", "Iniciar sesion");
		$this->template->load("template/LoginTemplate_view", "contenido", "paginas/login");
	}
	public function varificarLogin()
	{

		$correo = $this->input->post("email", TRUE);
		$password = $this->input->post("password", TRUE);
		$result = $this->lg->login([
			'correo' => $correo,
			'contrasena' => sha1($password)
		]);
		$respuesta = ['status' => 'error', 'message' => 'Usuario no entrado '];
		if ($result->num_rows() > 0) {
			$_SESSION['user_client'] = $result->row();
			$redirect = base_url("cliente/inicio");
			if (isset($_POST['route'])) {
				if ($this->utilerias->is_base64_encoded($_POST['route'])) {
					$redirect = base64_decode($_POST['route']);
				}
			}
			$respuesta = ['status' => 'success', 'message' => 'Iniciando sesion.', 'route' => $redirect];
		}
		echo json_encode($respuesta);
		//	var_dump($respuesta);
	}


	public function registro()
	{
		$token = $this->uri->segment(3);
		$respuesta = $this->lg->validartoken($token);
		if ($respuesta['action']) {
			$this->template->set("titulo", "registro");
			$this->template->load("template/LoginTemplate_view", "contenido", "paginas/RegistroView");
		} else {
			show_error("No se pudo procesar esta peticion.", 403, "Ha ocurrido un error.");
		}
	}
	public function recibirparametrosregistro()
	{
		$nombre = $this->input->post("nombre", TRUE);
		$correo = $this->input->post("correo", TRUE);
		$password = $this->input->post("password", TRUE);
		$this->lg->insertarUsuarios([
			'nombre' => $nombre,
			'contrasena' => sha1($password),
			'activo' => 0,
			'tipousarioid' => 2
		]);
	}

	public function correo()
	{


		$this->template->set("titulo", "Iniciar sesion");
		$this->template->load("template/LoginTemplate_view", "contenido", "paginas/correo");
	}


	public function recibirparametrosregistrocorreo()
	{
		$correo = $this->input->post("email", true);
		$token = $this->utilerias->generateToken();
		$url = base_url("registro/activaciones/{$token}");
		$bodyhtml = "<h4>Bienvenido  completa tu registro</h4><br><a target='_blank' href='{$url}'>Confirmar Correo</a>";

		if ($this->lg->activacion([
			'correoregistro' => $correo,
			'token' => $token,
			'activo' => 0,
		])) {
			$this->correo->enviar_correo("Registro de usuario", $correo, $bodyhtml);
			echo json_encode(['status' => 'success', 'message' => 'Correo registrado']);
		} else {
			echo json_encode(['status' => 'error', 'message' => 'El correo ya se ha registrado']);
		}
	}


	public function registroFinal()
	{

		$token = $this->input->post("txtToken");

		$respuesta = $this->lg->validartoken($token);
		if ($respuesta['action']) {
			$txtNombre = $this->input->post("txtNombre", true);
			$txtApepat = $this->input->post("txtApepat", true);
			$txtAmater = $this->input->post("txtAmater", true);
			$dttFechanan = $this->input->post("dttFechanan", true);
			$txtPassword = $this->input->post("txtPassword", true);

			$data = ['nombre' => $txtNombre, 'contrasena' => sha1($txtPassword), 'activo' => 1, 'tipousarioid' => 2, 'apellidopat' => $txtApepat, 'apellidomat' => $txtAmater, 'correo' => $respuesta['correo'], 'fechanan' => $dttFechanan];
			$idusuario = $this->lg->insertarUsuarios($data);
			$this->lg->actualizarregistro([
				'activo' => 1,
			], ['idregistro' => $respuesta['idactivacion']]);

			echo	json_encode(['idregistro' => $respuesta['idactivacion']]);
			$user = $this->lg->login(['id' => $idusuario])->row();

			$_SESSION['user_client'] = $user;
		} else {
			echo json_encode(['status' => 'error', 'message' => 'Ha ocurrido un error']);
		}
	}
	public function logout()
	{
		session_destroy();
	}
}
