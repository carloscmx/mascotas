<?php
defined('BASEPATH') or exit('No direct script access allowed');

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

class Catalogo_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
    $this->db = $this->load->database('default', true);
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------


  public function catalogocrear($data)
  {

    $this->db->insert('mascota', $data);
  }

  public function catalogover()
  {

    $query = $this->db->query("select * from mascota");
    return $query->result();
  }

  function deleterecords($id)
  {
    $this->db->where("id", $id);
    $this->db->delete("crud");
    return true;
  }

  function detallemascotas($where = NULL)
  {
    if ($where != NULL) {
      $this->db->where($where);

    }
    $this->db->select("*");
    $this->db->from("mascota");

    return  $this->db->get();
  }







  // ------------------------------------------------------------------------

}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */
