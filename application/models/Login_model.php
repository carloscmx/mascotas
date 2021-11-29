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

class Login_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
    $this->db = $this->load->database('default', true);
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------


  public function login($where)
  {

    $this->db->select("*");
    $this->db->from("usuarios");
    $this->db->where($where);
    return $this->db->get();
  }


  public function insertarUsuarios($data)
  {

    $this->db->insert("usuarios", $data);
    $insert_id = $this->db->insert_id();
    return  $insert_id;
  }
  public function actualizarUsuarios($data, $where)
  {
    $this->db->where($where);


    $this->db->update("usuarios", $data);
  }
  public function actualizarregistro($data, $where)
  {
    $this->db->where($where);


    $this->db->update("activacion", $data);
  }

  public function activacion($data)
  {
    $bool = false;
    if (!$this->existecorreo($data['correoregistro'])) {
      $this->db->insert("activacion", $data);
      $bool = true;
    }
    return $bool;
  }
  public function existecorreo($correo)
  {
    $registro = false;

    $this->db->select('*');
    $this->db->from('activacion');
    $this->db->where(['correoregistro' => $correo]);
    if ($this->db->get()->num_rows() > 0) {
      $registro = true;
    }
    return $registro;
  }

  function validartoken($token)
  {
    $result = ['status' => 'error', 'action' => false, 'correo' => ''];
    $this->db->select('*');
    $this->db->from('activacion');
    $this->db->where(['token' => $token, 'activo' => 0]);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      $queryrow = $query->row();
      $result = ['status' => 'success', 'action' => true, 'correo' => $queryrow->correoregistro, 'idactivacion' => $queryrow->idregistro];
    }
    return $result;
  }

  public function generarCodigoVerificacion()
  {
    $codigoRandom = mt_rand(1000, 9999);

    $rowsQuery = $this->db->get_where('usuarios', ['login_token_reset' => $codigoRandom])->num_rows();
    if ($rowsQuery > 0) {
      $this->generarCodigoVerificacion();
    } else {
      return $codigoRandom;
    }
  }

  public function validarCodigo($codigo, $idUsuario)
  {
    $where = [
      'login_token_reset' => $codigo,
      'id' => $idUsuario
    ];
    $get = $this->db->get_where('usuarios', $where)->num_rows();
    if ($get > 0) {
      return true;
    } else {
      return false;
    }
  }

  public function update($table, $set, $where)
  {
    $this->db->update($table, $set, $where);
    if ($this->db->affected_rows() > 0) {
      return true;
    } else {
      return false;
    }
  }

  public function delete($table, $where)
  {
    $this->db->delete($table, $where);
    if ($this->db->affected_rows() > 0) {
      return true;
    } else {
      return false;
    }
  }




  // ------------------------------------------------------------------------

}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */