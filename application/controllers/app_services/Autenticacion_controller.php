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

    $this->load->model('Login_model', 'lg');
    $this->load->library('session');
  }

  public function loginAut_post()
  {

    if (isset($_SESSION['user_client'])) {
      $this->response([
        'status' => true,
        'message' => 'Sesion activa'
      ], 302);
    } else {
      $this->form_validation->set_rules('correo', 'Correo', 'required|valid_email');
      $this->form_validation->set_rules('password', 'Contraseña', 'required');
      if ($this->form_validation->run()) {

        $password = $this->input->post('password', true);
        $correo = $this->input->post('correo', true);

        $where = [
          'correo' => $correo,
          'contrasena' => sha1($password)
        ];

        $get = $this->lg->login($where);
        if ($get->num_rows() > 0) {

          $userData = $get->result_array();
          $_SESSION['user_client'] = $get->row();
          $this->response(
            [
              'status' => true,
              'message' => $userData[0]
            ],
            RestController::HTTP_OK
          );
        } else {
          $this->response([
            'status' => false, 'message' => 'Verifique su correo o contraseña'
          ], RestController::HTTP_UNAUTHORIZED);
        }
      } else {
        $this->response([
          'status' => false, 'message' => [
            'correo' => form_error('correo'),
            'password' => form_error('password'),
          ]
        ], RestController::HTTP_BAD_REQUEST);
      }
    }
  }
}


/* Final del archivo Autenticacion_controller.php */
/* Location: ./application/controllers/Autenticacion_controller.php */