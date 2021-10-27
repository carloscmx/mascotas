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

class Productos_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('default', true);
    }

    public function productomodelcrear($data)
    {

        $this->db->insert('producto', $data);
    }

    public function productomodelver($where = null)
    {
        if ($where != NULL) {
            $this->db->where($where);
        }

        $query = $this->db->query("select * from producto");
        return $query->result();
    }

    function productomodelborrar($idpro)
    {
        $this->db->where('id', $idpro);
        $this->db->set('activo', '0');
        return $this->db->update('producto');
    }

    function productomodeldetalle($where = NULL)
    {
        if ($where != NULL) {
            $this->db->where($where);
        }
        $this->db->select("*");
        $this->db->from("producto");

        return  $this->db->get();
    }

    function productomodelactualizar($where = NULL)
    {
        if ($where != NULL) {
            $this->db->where($where);
        }
        $this->db->select("*");
        $this->db->from("producto");

        return  $this->db->get();
    }

    function productomodelobtener($where = NULL)
    {
        if ($where != NULL) {
            $this->db->where($where);
        }
        $this->db->select("*");
        $this->db->from("producto");

        return  $this->db->get();
    }
}
