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
		$this->load->library('email');


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

		$username = $_POST['correo'];
		$password=sha1($_POST['contrasena']);

		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where(array('correo'=> $usarname, 'contrasena' => $password));
		$query = $this->db->get();

		$user = $query->row();

		if($user->email){
			$this->session->set_flashdata("estas conectado");

			$_SESSION["user_logged"] = true;
			$_SESSION["usuario"] = $user->correo;

			redirect("user/profile", "refresh");


		}else{

			$this->session->set_flashdata("error", "no existe la cuenta");
			redirect("welcome/login", "refresh");

		}

		$this->load->view('login');

		
	
	
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

	}

	public function correo()
	{

		$this->load->view('paginas/correo');


	}
	public function recibirparametrosregistrocorreo(){
		//Indicamos el protocolo a utilizar
        $config['protocol'] = 'smtp';
         
       //El servidor de correo que utilizaremos
        $config["smtp_host"] = 'ssl://mail.blazar.com.mx';
         
       //Nuestro usuario
        $config["smtp_user"] = 'pruebas@blazar.com.mx';
         
       //Nuestra contraseña
        $config["smtp_pass"] = 'a.HD7pV?C_Wf';   
         
       //El puerto que utilizará el servidor smtp
        $config["smtp_port"] = '465';
        
       //El juego de caracteres a utilizar
        $config['charset'] = 'utf-8';
 
       //Permitimos que se puedan cortar palabras
        $config['wordwrap'] = TRUE;
         
       //El email debe ser valido 
       $config['validate'] = true;
       
        
      //Establecemos esta configuración
        $this->email->initialize($config);
  //Ponemos la dirección de correo que enviará el email y un nombre
  $this->email->from('pruebas@blazar.com.mx', 'MANUEL RAZ');
         
  /*
   * Ponemos el o los destinatarios para los que va el email
   * en este caso al ser un formulario de contacto te lo enviarás a ti
   * mismo
   */
  $correosalida=$this->input->post("email",true);
	$this->email->to(trim($correosalida), 'EJEMPLO');
	 
  //Definimos el asunto del mensaje
	$this->email->subject("CORREO TEST");
	 
  //Definimos el mensaje a enviar
  $token=rand(0,1999999);
	$this->email->message("TOKEN: {$token}");
	 
	//Enviamos el email y si se produce bien o mal que avise con una flasdata
	if($this->email->send()){
		echo "OK";
		$this->session->set_flashdata('envio', 'Email enviado correctamente');
	}else{
		echo "ERROR";

		$this->session->set_flashdata('envio', 'No se a enviado el email');
	}
	 

	}


}
