<?php


defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';
/**
 *
 * Controller Autenticacion_controller
 *
 * Proposito del controlador...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Bryan E. Pool Mercado <bryanedilberto@hotmail.com>
 * @link      https://github.com/bryane9911061563
 * @param     ...
 * @return    ...
 *
 */

class Autenticacion_controller extends RestController
{

  public function __construct()
  {
    parent::__construct();
  }

  public function loginAut_post()
  {
    $correo = $this->input->post('correo', true);
    $this->response([
      'data' => $correo
    ], RestController::HTTP_OK);
  }
}


/* Final del archivo Autenticacion_controller.php */
/* Location: ./application/controllers/Autenticacion_controller.php */