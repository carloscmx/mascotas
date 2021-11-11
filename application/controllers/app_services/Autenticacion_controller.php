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
    $this->load->library('Correo');
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

  public function register_post()
  {
    $this->form_validation->set_rules('nombre', 'Nombre', 'required');
    $this->form_validation->set_rules('pap', 'Primer apellido', 'required');
    $this->form_validation->set_rules('sap', 'Segundo apellido', 'required');
    $this->form_validation->set_rules('nac', 'Fecha de nacimiento', 'required');
    $this->form_validation->set_rules('correo', 'Correo', 'required');
    $this->form_validation->set_rules('password', 'Contraseña', 'required');
    $this->form_validation->set_rules('confirm', 'Confirmación de contraseña', 'required|matches[password]');


    if ($this->form_validation->run()) {

      $nombre = $this->input->post('nombre', true);
      $pap = $this->input->post('pap', true);
      $sap = $this->input->post('sap', true);
      $nac = $this->input->post('nac', true);
      $correo = $this->input->post('correo', true);
      $password = $this->input->post('password', true);

      $codVerificacion = $this->lg->generarCodigoVerificacion();

      $dataInsert = [
        'correo' => $correo,
        'contrasena' => sha1($password),
        'activo' => 0,
        'tipousarioid' => 2,
        'nombre' => $nombre,
        'apellidopat' => $pap,
        'apellidomat' => $sap,
        'fecharegistro' => date('Y-m-d H:i:s'),
        'fechanan' => date('Y-m-d', strtotime($nac)),
        'login_token_reset' => $codVerificacion
      ];

      $id = $this->lg->insertarUsuarios($dataInsert);
      if ($id > 0) {

        $token = $codVerificacion;
        $urlimg = base_url('resources/assets/images/logo1.png');
        $bodyhtml = "
            <style>
            .button {
              background-color: #4CAF50;
              border: none;
              color: white;
              padding: 15px 32px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 16px;
              margin: 4px 2px;
              cursor: pointer;
            }
            </style>
            <div align='center'><img src='{$urlimg}'></div>
            </br>
            <h1><div align='center' style='font-family: Lato, Helvetica, sans-serif;'>Haz solicitado restablecer tu contraseña</h1><br/>
            <br/>
            <div align='center' style='font-family: Lato, Helvetica, sans-serif;'>Bienvenido
            <div align='center' style='font-family: Lato, Helvetica, sans-serif;'>Nos da gusto que que seas miembro de la familia Boxni<br/>
            <br/>
            <div align='center' style='font-family: Lato, Helvetica, sans-serif;'>Este es el codigo para finalizar su registro<br/>
            <br/>
            <div align='center'><h1>$token</h1><br/>
            <br/>
            <div align='center' style='font-family: Lato, Helvetica, sans-serif;'>Si no has usted quien generó el registro, infórmenos<br/></div>
          ";

        $respCorreo = $this->correo->enviar_correo("Finalizar registro Boxni", $correo, $bodyhtml);
        if ($respCorreo) {

          $this->response(['status' => true, 'message' => $id], RestController::HTTP_OK);
        } else {
          $this->response(['status' => false, 'message' => 'Algo salió mal al enviar el correo'], RestController::HTTP_INTERNAL_ERROR);
        }
      } else {
        $this->response(['status' => false, 'message' => 'Algo salio mal al finalizar el registro'], RestController::HTTP_INTERNAL_ERROR);
      }
    } else {
      $this->response([
        'status' => false,
        'message' => [
          'nombre' => form_error('nombre'),
          'pap' => form_error('pap'),
          'sap' => form_error('sap'),
          'nac' => form_error('nac'),
          'correo' => form_error('correo'),
          'password' => form_error('password'),
          'confirm' => form_error('confirm'),
        ]
      ], RestController::HTTP_BAD_REQUEST);
    }
  }

  public function codeConfirm_post()
  {
    $this->form_validation->set_rules('code', 'Codigo de confirmacion', 'required');
    $this->form_validation->set_rules('id', 'Usuario', 'required');

    if ($this->form_validation->run()) {
      $codigo = $this->input->post('code', true);
      $id = $this->input->post('id', true);

      $resp = $this->lg->validarCodigo($codigo, $id);
      if ($resp) {
        $this->response([
          'status' => true,
          'message' => 'Registro finalizado'
        ], RestController::HTTP_OK);
      } else {
        $this->response([
          'status' => false,
          'message' => 'Código inválido'
        ], RestController::HTTP_UNAUTHORIZED);
      }
    } else {
      $this->response([
        'status' => false,
        'message' => [
          'code' => form_error('code'),
          'id' => form_error('id')
        ]
      ], RestController::HTTP_BAD_REQUEST);
    }
  }
}


/* Final del archivo Autenticacion_controller.php */
/* Location: ./application/controllers/Autenticacion_controller.php */