<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Catalogo
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Catalogo extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view("paginas/formCatalogo");
  }
}


/* End of file Catalogo.php */
/* Location: ./application/controllers/Catalogo.php */