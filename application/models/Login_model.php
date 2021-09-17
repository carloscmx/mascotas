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

  // ------------------------------------------------------------------------

}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */