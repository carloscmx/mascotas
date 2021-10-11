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

class Veterinario_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('default', true);
    }

    public function vetmodelcrear($data)
    {

        $this->db->insert('veterinariosinfo', $data);
    }

    public function vetmodelver($where = null)
    {
        if ($where != NULL) {
            $this->db->where($where);
        }

        $query = $this->db->query("select * from veterinariosinfo");
        return $query->result();
    }

    function vetmodelborrar($idveterinarioinfo)
    {
        $this->db->where('id', $idveterinarioinfo);
        $this->db->set('activo', '0');
        return $this->db->update('veterinariosinfo');
    }

    function vetmodeldetalle($where = NULL)
    {
        if ($where != NULL) {
            $this->db->where($where);
        }
        $this->db->select("*");
        $this->db->from("veterinariosinfo");

        return  $this->db->get();
    }

    function vetmodelactualizar($where = NULL)
    {
        if ($where != NULL) {
            $this->db->where($where);
        }
        $this->db->select("*");
        $this->db->from("veterinariosinfo");

        return  $this->db->get();
    }

    function vetmodelobtener($where = NULL)
    {
        if ($where != NULL) {
            $this->db->where($where);
        }
        $this->db->select("*");
        $this->db->from("veterinariosinfo");

        return  $this->db->get();
    }
}
