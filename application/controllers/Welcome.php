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
	public function index()
	{

		$this->load->model("Login_model","lg");
		
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
	
	}
}
