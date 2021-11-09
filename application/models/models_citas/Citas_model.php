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

class Citas_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('default', true);
    }

    public function citamodelcrear($data)
    {

        $this->db->insert('citas', $data);
    }

    public function citamodelver($where = null)
    {
        if ($where != NULL) {
            $this->db->where($where);
        }

        $query = $this->db->query("select * from citas");
        return $query->result();
    }

    function citamodelborrar($idcita)
    {
        $this->db->where('id', $idcita);
        $this->db->set('activo', '0');
        return $this->db->update('citas');
    }

    function citamodeldetalle($where = NULL)
    {
        if ($where != NULL) {
            $this->db->where($where);
        }
        $this->db->select("*");
        $this->db->from("citas");

        return  $this->db->get();
    }

    function citamodelactualizar($where = NULL)
    {
        if ($where != NULL) {
            $this->db->where($where);
        }
        $this->db->select("*");
        $this->db->from("citas");

        return  $this->db->get();
    }

    function citamodelobtener($where = NULL)
    {
        if ($where != NULL) {
            $this->db->where($where);
        }
        $this->db->select("*");
        $this->db->from("citas");

        return  $this->db->get();
    }
}
