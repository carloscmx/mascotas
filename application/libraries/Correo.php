<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Libraries Correo
 *
 * This Libraries for ...
 * 
 * @package		CodeIgniter
 * @category	Libraries
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

 class Correo
{

  // ------------------------------------------------------------------------
  protected $CI;
   function __construct()
  {
  $this-> CI =& get_instance();
   $this->CI->load->library('email');
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------

  public function enviar_correo($cabecera,$correosalida,$html)
  {
//Indicamos el protocolo a utilizar
$config['protocol'] = 'smtp';
         
//El servidor de correo que utilizaremos
 $config["smtp_host"] = 'ssl://mail.blazar.com.mx';

 $config["mailtype"] = 'html';

  
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
$this->CI->email->initialize($config);
//Ponemos la dirección de correo que enviará el email y un nombre
$this->CI->email->from('pruebas@blazar.com.mx', 'NOREPLY');
  
/*
* Ponemos el o los destinatarios para los que va el email
* en este caso al ser un formulario de contacto te lo enviarás a ti
* mismo
*/
$this->CI->email->to(trim($correosalida),"NOREPLY");

//Definimos el asunto del mensaje
$this->CI->email->subject($cabecera);

//Definimos el mensaje a enviar
$this->CI->email->set_newline("\r\n");

$this->CI->email->message($html);

$estado=false;
//Enviamos el email y si se produce bien o mal que avise con una flasdata
if($this->CI->email->send()){
  $estado=true;

}
return $estado;
  }

  // ------------------------------------------------------------------------
}

/* End of file Correo.php */
/* Location: ./application/libraries/Correo.php */