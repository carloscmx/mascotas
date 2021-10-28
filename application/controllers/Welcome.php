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
		$this->load->helper('modalb');
		$this->load->helper('alertb');


		$this->load->library('session');
		$this->load->model("Catalogo_model", "mc");
		$this->load->model("models_veterinario/Veterinario_model", "vm");



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
		$this->template->set("titulo", "Restablecer Password");
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
			$this->template->set("titulo", "Restablecerr Password");
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
			$user = $datos;


			switch ($user->tipousarioid) {
				case 2:
					$redirect = base_url("cliente/inicio");

					$_SESSION['user_client'] = $user;

					break;
				case 3:
					$redirect = base_url("veterinario/inicio");

					$_SESSION['user_vet'] = $user;

					break;
			}
			$respuesta = ['status' => 'success', 'message' => 'Contraseña Modificada', 'route' => $redirect];
		}

		echo json_encode($respuesta);
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
			$urlimg = base_url('resources/assets/images/logo1.png');
			$bodyhtml = "
		<style>
		.button {
			background-color: #4CAF50;
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
		}
		</style>
		<div align='center'><img src='{$urlimg}'></div>
		</br>
		<h1><div align='center' style='font-family: Lato, Helvetica, sans-serif;'>Haz solicitado restablecer tu contraseña</h1><br/>
		<br/>
		<div align='center' style='font-family: Lato, Helvetica, sans-serif;'>¿No recuerdas tu contraseña?
		<div align='center' style='font-family: Lato, Helvetica, sans-serif;'>No hay problema, nos pasa a todos<br/>
		<br/>
		<div align='center' style='font-family: Lato, Helvetica, sans-serif;'>Para solicitar restablecer tu contraseña solo debes dar click en el botón<br/>
		<br/>
		<div align='center'><a href='{$url}'><button type='button' class='button'>Cambiar contraseña</button></a><br/>
		<br/>
		<div align='center' style='font-family: Lato, Helvetica, sans-serif;'>Si no has solicitado una nueva contraseña, infórmanos<br/></div>";

			$this->lg->actualizarUsuarios(['login_reset' => 1, 'login_token_reset' => $token], ['id' => $datos->id]);
			$this->correo->enviar_correo("Restablecer cuenta", $correo, $bodyhtml);


			//	$_SESSION['user_client'] = $datos;
		}
	}
	public function index()
	{
		$this->session->validarSesionCliente();
		$data['mascotas'] = $this->mc->detallemascotas(['iduser' => $_SESSION['user_client']->id, 'activo' => 1])->result();

		$this->template->set("titulo", "Bienvenido cliente");
		$this->template->load("template/Template_view", "contenido", "paginas/paginas_mascotas/Iniciomascotas", $data);
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
			$user = $result->row();

			switch ($user->tipousarioid) {
				case 2:
					$redirect = base_url("cliente/inicio");
					if (isset($_POST['route'])) {
						if ($this->utilerias->is_base64_encoded($_POST['route'])) {
							$redirect = base64_decode($_POST['route']);
						}
					}
					$_SESSION['user_client'] = $user;

					break;
				case 3:
					$redirect = base_url("veterinario/inicio");
					if (isset($_POST['route'])) {
						if ($this->utilerias->is_base64_encoded($_POST['route'])) {
							$redirect = base64_decode($_POST['route']);
						}
					}
					$_SESSION['user_vet'] = $user;

					break;
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
		$urlimg = base_url('resources/assets/images/logo1.png');
		$bodyhtml = "
		<style>
		.button {
			background-color: #4CAF50;
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
		}
		</style>
		<div align='center'><img src='{$urlimg}'></div>
		</br>
		<h1><div align='center' style='font-family: Lato, Helvetica, sans-serif;'>Confirmación de correo electrónico</h1><br/>
		<br/>
		<h2><div align='center' style='font-family: Lato, Helvetica, sans-serif;'>Hola {$correo}</h2><br/>
		<br/>
		<div align='center' style='font-family: Lato, Helvetica, sans-serif;'>Te damos la bienvenida a nuestra página BOXNI.
		<div align='center' style='font-family: Lato, Helvetica, sans-serif;'>Para continuar, confirma tu email registrando tus datos en el siguiente botón.<br/>
		<br/>
		<div align='center' style='font-family: Lato, Helvetica, sans-serif;'>¡¡¡VIVE CON NOSOTROS LA SEGURIDAD DE TUS MASCOTAS!!!<br/>
		<br/>
		<div align='center'><a href='{$url}'><button type='button' class='button'>Confirmar mi cuenta</button></a><br/>
		<br/>
		<div align='center' style='font-family: Lato, Helvetica, sans-serif;'>Gracias<br/>
		Team Boxni</div>";

		if ($this->lg->activacion([
			'correoregistro' => $correo,
			'token' => $token,
			'activo' => 0,
		])) {
			$this->correo->enviar_correo("Confirmación de registro Boxni", $correo, $bodyhtml);
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
			$tusuario = $this->input->post("cboTusario", true);


			$data = ['nombre' => $txtNombre, 'contrasena' => sha1($txtPassword), 'activo' => 1, 'tipousarioid' => $tusuario, 'apellidopat' => $txtApepat, 'apellidomat' => $txtAmater, 'correo' => $respuesta['correo'], 'fechanan' => $dttFechanan];
			$idusuario = $this->lg->insertarUsuarios($data);
			$this->lg->actualizarregistro([
				'activo' => 1,
			], ['idregistro' => $respuesta['idactivacion']]);

			$user = $this->lg->login(['id' => $idusuario])->row();

			switch ($tusuario) {
				case 2:
					$_SESSION['user_client'] = $user;
					echo	json_encode(['url' => base_url("cliente/inicio")]);

					break;
				case 3:
					$_SESSION['user_vet'] = $user;
					echo	json_encode(['url' => base_url("veterinario/inicio")]);

					break;
			}
		} else {
			echo json_encode(['status' => 'error', 'message' => 'Ha ocurrido un error']);
		}
	}
	public function logout()
	{
		session_destroy();
	}
}
