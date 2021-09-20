<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Login_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Login_model extends CI_Model  {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
    $this->db = $this->load->database('default', true);
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function selectUsuarios()
  {
    
    $this->db->get('usuarios');
    


  }
   

  public function insertarUsuarios($data)
  {
 
 $this->db->insert("usuarios",$data);
  }

  public function activacion($data)
  {
    $bool=false;
 if(!$this->existecorreo($data['correoregistro'])){
  $this->db->insert("activacion",$data);
  $bool=true;

 }
 return $bool;
  }
  public function existecorreo($correo){
          $registro=false;

    $this->db->select('*');
    $this->db->from('activacion');
    $this->db->where(['correoregistro'=>$correo]);
    if($this->db->get()->num_rows()>0){
      $registro=true;
    }
    return $registro;
  }

  function validartoken($token)
  {
    $result=['status'=>'error','action'=>false,'correo'=>''];
    $this->db->select('*');
    $this->db->from('activacion');
    $this->db->where(['token'=>$token]);
    $query=$this->db->get();
    if($query->num_rows()>0){
$queryrow=$query->row();
      $result=['status'=>'success','action'=>true,'correo'=>$queryrow->correoregistro];
    }
    return $result;
    
  }


  

  // ------------------------------------------------------------------------

}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */