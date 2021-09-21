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
		$this->load->library('Correo');
		$this->load->library('Utilerias');


	}

	public function login()
	{
		$this->template->set("titulo","Iniciar sesion");
		$this->template->load("template/LoginTemplate_view","contenido","paginas/login");

	
	}
	public function varificarLogin(){
		
		$correo=$this->input->post("email",TRUE);
		$password=$this->input->post("password",TRUE);
		$result=$this->lg->login([
			'correo'=>$correo,
			'contrasena'=>sha1($password)
	]);
	$respuesta=['status'=>'error','message'=>'Usuario no entrado '];
	if($result->num_rows()>0){
		$respuesta=['status'=>'success','message'=>'Iniciando sesion.'];

	}
	echo json_encode($respuesta);
	}
	public function registro()
	{
		$token=$this->uri->segment(3);
		$respuesta=$this->lg->validartoken($token);
		if($respuesta['action']){
			$this->template->set("titulo","registro");
			$this->template->load("template/LoginTemplate_view","contenido","paginas/registroView");

		}else{
			show_error("ERROR",403,"HA OCURRIDO UN ERROR");
		}


	//	$this->db->insert('usuarios',$data);
	//	redirect("welcome/login");  
	
	}
	public function recibirparametrosregistro(){
		$nombre=$this->input->post("nombre",TRUE);
		$correo=$this->input->post("correo",TRUE);
		$password=$this->input->post("password",TRUE);
		$this->lg->insertarUsuarios([
			'nombre'=>$nombre,
			'contrasena'=>sha1($password),
			'activo'=>0,
			'tipousarioid'=>2
		]);

	}

	public function correo()
	{

		
		$this->template->set("titulo","Iniciar sesion");
		$this->template->load("template/LoginTemplate_view","contenido","paginas/correo");


	}


	public function recibirparametrosregistrocorreo(){
$correo=$this->input->post("email",true);
$token = $this->utilerias->generateToken();
$url=base_url("registro/activaciones/{$token}");
$bodyhtml="<h4>Bienvenido  completa tu registro</h4><br><a target='_blank' href='{$url}'>Confirmar Correo</a>";
		if($this->correo->enviar_correo("Registro de usuario",$correo,$bodyhtml)){
		if(	$this->lg->activacion([
			'correoregistro'=>$correo,
			'token'=>$token,
			'activo'=>0,
		])){
			echo json_encode(['status'=>'success','message'=>'Correo registrado']);
		}else{
			echo json_encode(['status'=>'error','message'=>'El correo ya se ha registrado']);

		}
		}else{
			echo json_encode(['status'=>'error','message'=>'Correo invalido']);

		}
	}


	public function registroFinal(){

		$token=$this->input->post("txtToken");

		$respuesta=$this->lg->validartoken($token);
		if($respuesta['action']){
			$txtNombre=$this->input->post("txtNombre",true);
			$txtApepat=$this->input->post("txtApepat",true);
			$txtAmater=$this->input->post("txtAmater",true);
			$dttFechanan=$this->input->post("dttFechanan",true);
			$txtPassword=$this->input->post("txtPassword",true);

		$data=['nombre'=>$txtNombre,'contrasena'=>sha1($txtPassword),'activo'=>1,'tipousarioid'=>2,'apellidopat'=>$txtApepat,'apellidomat'=>$txtAmater,'correo'=>$respuesta['correo']];
		$this->lg->insertarUsuarios($data);

		}else{
			echo json_encode(['status'=>'error','message'=>'Ha ocurrido un error']);
		}



	}


}
