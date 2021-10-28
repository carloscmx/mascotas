<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */


if (!function_exists('delete_confirm')) {
  /**
   * Retorna la primera cabecera del metodo
   *
   * @etiqueta bool    $etiqueta es un tipo boleano para validar si necesitas retornar las cabeceras del script
   */
  function delete_confirm($nombrefuncion, $subfunction, $etiqueta = false): string
  {
    $script = '';
    $dom = "
      function {$nombrefuncion}(parameters){
        swal({
            title: 'Estas seguro?',
            text: 'Esta accion no podra deshacerse !',
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonText: 'Cancelar',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirmar'
          }).then(function() {
          {$subfunction}(parameters);
          });
        }
          ";
    if ($etiqueta) {
      $script = "<script>{$dom}</script>";
    } else {
      $script = $dom;
    }
    return $script;
  }
}

if (!function_exists('delete_confirm_message')) {

  function delete_confirm_message(): string
  {
    return "swal(
      'Eliminado!',
      'Registro elimidado correctamente.',
      'success'
    );";
  }
}

if (!function_exists('error_message')) {

  function error_message(): string
  {
    return "swal(
      'Ha ocurrido un error!',
      'Solicitud no procesada, vuelva a intentarlo mas tarde.',
      'error'
    );";
  }
}
