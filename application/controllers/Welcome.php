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
			$this->template->set("titulo", "Restablecer Password");
			$this->template->load("template/LoginTemplate_view", "contenido", "paginas/restablecer_password");
			//	$_SESSION['user_client'] = $datos;
		} else {
			show_error("No se ha podido procesar esta peticion, o ha expirado este enlace.", 403, "Ha ocurrido un error.");
		}
	}

	public function updatePassword()
	{
		if ($this->input->is_ajax_request()) {

			$this->form_validation->set_rules('password', 'Correo', 'required');

			if ($this->form_validation->run()) {

				$mesaje = ['status' => 'error', 'message' => 'Ha ocurrido un error', 'title' => 'Ha ocurrido un error.'];
				$password = $this->input->post("password");
				$token = $this->input->post("token");
				$result = $this->lg->login([
					'login_token_reset' => $token,
					'login_reset' => 1
				]);
				$respuesta = ['status' => 'error', 'message' => 'Usuario no entrado '];
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
			} else {
				$this->output->set_status_header(400)->set_content_type('application/json')->set_output(json_encode([
					'status' => false,
					'message' => [
						'correo' => form_error('password')
					]
				]));
			}
		} else {
			show_404();
		}
	}

	public function restablecerPasswordEmail()
	{
		if ($this->input->is_ajax_request()) {

			$this->form_validation->set_rules('email', 'Correo', 'required|valid_email');

			if ($this->form_validation->run()) {
				$correo = $this->input->post("email", TRUE);
				$result = $this->lg->login(['correo' => $correo]);
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
					echo json_encode(['status' => 'success', 'message' => 'Correo registrado']);
				} else {
					echo json_encode(['status' => 'error', 'message' => 'El correo ya se ha registrado']);
				}
			} else {
				$this->output->set_status_header(400)->set_content_type('application/json')->set_output(json_encode([
					'status' => false,
					'message' => [
						'correo' => form_error('email')
					]
				]));
			}
		} else {
			show_404();
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
		$token = $_GET['token'];
		$correo = $_GET['mail'];
		if ($this->lg->authTokenRegistro($token, $correo)) {

			$resp = $this->lg->getTipoUsuarioRegistro($correo);
			if ($resp != false) {

				switch ($resp) {
					case 2:
						$this->template->set("titulo", "registro");
						$this->template->load("template/LoginTemplate_view", "contenido", "paginas/RegistroView");
						break;

					default:
						show_404();
						break;
				}
			} else {
				show_404();
			}
		} else {
			show_404();
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
		if ($this->input->is_ajax_request()) {

			$this->form_validation->set_rules('txtNombre', 'Nombre', 'required');
			$this->form_validation->set_rules('txtApepat', 'Apellido pat', 'required');
			$this->form_validation->set_rules('txtApemat', 'Apellido mat', 'required');
			$this->form_validation->set_rules('ddtFechanan', 'Fecha nacimiento', 'required');
			$this->form_validation->set_rules('email', 'Correo', 'required|valid_email|callback_validExistentMail');
			$this->form_validation->set_rules('cboTusuario', 'Tipo usuario', 'required');

			if ($this->form_validation->run()) {

				$txtNombre = $this->input->post("txtNombre", true);
				$txtApepat = $this->input->post("txtApepat", true);
				$txtApemat = $this->input->post("txtApemat", true);
				$dttFechanan = $this->input->post("dttFechanan", true);
				$cboTusuario = $this->input->post("cboTusuario", true);
				$correo = $this->input->post("email", true);
				$token = $this->utilerias->generateToken();
				$url = base_url("registro/activaciones?token=$token&mail=$correo");
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

				if ($this->correo->enviar_correo("Confirmación de registro Boxni", $correo, $bodyhtml)) {
					echo json_encode(['status' => 'success', 'message' => 'Correo registrado']);
				} else {
					echo json_encode(['status' => 'error', 'message' => 'El correo ya se ha registrado']);
				}
				$data = ['nombre' => $txtNombre, 'activo' => 0, 'tipousarioid' => $cboTusuario, 'apellidopat' => $txtApepat, 'apellidomat' => $txtApemat, 'correo' => $correo, 'fechanan' => $dttFechanan, 'login_token_reset' => $token];

				$idusuario = $this->lg->insertarUsuarios($data);

				$user = $this->lg->login(['id' => $idusuario])->row();

				switch ($cboTusuario) {
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
				$this->output->set_status_header(400)->set_content_type('application/json')->set_output(json_encode([
					'status' => false,
					'message' => [
						'Nombre' => form_error('txtNombre'),
						'Apellidopat' => form_error('txtApepat'),
						'Apellidomat' => form_error('txtApemat'),
						'Fechanacimiento' => form_error('ddtFechanan'),
						'correo' => form_error('email'),
						'Tipousuario' => form_error('cboTusuario')
					]
				]));
			}
		} else {
			show_404();
		}
	}


	public function registroFinal()
	{
		if ($this->input->is_ajax_request()) {

			$this->form_validation->set_rules('token', 'Contraseña', 'required|callback_validartoken');
			$this->form_validation->set_rules('email', 'Contraseña', 'required');
			$this->form_validation->set_rules('password', 'Contraseña', 'required|min_length[5]');
			$this->form_validation->set_rules('txtPassword1', 'Confirmar contraseña', 'required|matches[password]');

			if ($this->form_validation->run()) {
				$token = $this->input->post("token", true);
				$correo = $this->input->post("email", true);
				$txtPassword = $this->input->post("password", true);



				$set = [
					'contrasena' => sha1($txtPassword),
					'activo' => 1,
					'login_token_reset' => null
				];

				$where = [
					'login_token_reset' => $token,
					'correo' => $correo
				];


				if ($this->lg->actualizarregistro('usuarios', $set, $where)) {
					$this->varificarLogin();
					/* $this->output->set_status_header(200)->set_content_type('application/json')->set_output(json_encode([
						'status' => true,
						'message' => 'Registro finalizado'
					])); */
				} else {
					$this->output->set_status_header(500)->set_content_type('application/json')->set_output(json_encode([
						'status' => false,
						'message' => 'Algo salió mal'
					]));
				}
			} else {
				$this->output->set_status_header(400)->set_content_type('application/json')->set_output(json_encode([
					'status' => false,
					'message' => [
						'correo' => form_error('correo'),
						'token' => form_error('token'),
						'contraseña' => form_error('password'),
						'confirmacion' => form_error('txtPassword1'),
					]
				]));
			}
		} else {
			show_404();
		}
	}

	public function logout()
	{
		session_destroy();
	}

	public function validExistentMail($str)
	{
		$resp = $this->lg->selectExistentMail($str);
		if ($resp) {
			$this->form_validation->set_message('validExistentMail', 'El {field} no está disponible');
			return false;
		} else {
			return true;
		}
	}

	public function validarToken($token)
	{
		$correo = $this->input->post('email', true);
		if ($this->lg->authTokenRegistro($token, $correo)) {
			return true;
		} else {
			$this->form_validation->set_message('validarToken', 'El {field} no es valido');
			return false;
		}
	}
}
