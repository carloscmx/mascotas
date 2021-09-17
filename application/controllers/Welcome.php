<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function __construct(){
		parent::__construct();
		$this->load->model("Login_model","lg");

	}
	public function index()
	{

		
		$usuarios = $this->lg->selectUsuarios();
		$data["usuarios"] = $usuarios;
		$this->template->set("titulo","inicio");
		$this->template->load("template/Template_view","contenido","paginas/Inicio_view",$data);

	}
	public function login()
	{
		$this->template->set("titulo","Iniciar sesion");
		$this->template->load("template/LoginTemplate_view","contenido","paginas/login");

		
	
	
	}
	public function registro()
	{
		$this->template->set("titulo","registro");
		$this->template->load("template/LoginTemplate_view","contenido","paginas/registroView");

	//	$this->db->insert('usuarios',$data);
	//	redirect("welcome/login");  
	
	}
	public function recibirparametrosregistro(){
		$nombre=$this->input->post("nombre",TRUE);
		$correo=$this->input->post("correo",TRUE);
		$password=$this->input->post("password",TRUE);
		$this->lg->insertarUsuarios([
			'nombre'=>$nombre,
			'correo'=>$correo,
			'contrasena'=>sha1($password),
			'activo'=>0,
			'tipousarioid'=>2
		]);



		//echo json_encode($_POST);

	}
}
