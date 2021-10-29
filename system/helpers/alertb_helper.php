<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */


if (!function_exists('basic_message')) {

  function basic_message(): string
  {
    return "swal(
      'Ya casi eres parte de Boxni. Registra tus datos personales para finalizar');";
  }
}

if (!function_exists('success_message')) {

  function sucess_message(): string
  {
    return "swal(
      'Se envió un mensaje a tu correo electrónico',
      'Sigue las instrucciones del mensaje para restablecer la contraseña ',
      'success'
    );";
  }
}

if (!function_exists('success_message2')) {

  function sucess_message2(): string
  {
    return "swal(
      'Éxito',
      'Muchas gracias por registrarse. A continuación recibirás un mensaje de confirmación para completar tu registro',
      'success'
    );";
  }
}

if (!function_exists('success_message3')) {

  function success_message3(): string
  {
    return "swal(
      '¡SE COMPLETO TU REGISTRO!',
      'Estamos muy entusiasmados porque ya eres parte de nuestra familia. Recuerda que en Boxni, podrás encontrar una variedad de servicios para tu mascota como veterinarias, tiendas de alimento, farmacias, spa hoteles y mucho más.',
      'success'
    );";
  }
}

if (!function_exists('success_message4')) {

  function success_message4(): string
  {
    return "swal(
      '¡Contraseña modificada!',
      'Tu contraseña ha sido cambiada por una nueva',
      'success'
    );";
  }
}

if (!function_exists('success_message5')) {

  function success_message5(): string
  {
    return "swal(
      '¡Éxito!',
      'Se han guardado los datos de tu mascota correctamente',
      'success'
    );";
  }
}

if (!function_exists('success_message6')) {

  function success_message6(): string
  {
    return "swal(
      '¡Éxito!',
      'Se han guardado tus datos como veterinario correctamente',
      'success'
    );";
  }
}

if (!function_exists('error_message')) {

  function error_message(): string
  {
    return "swal(
      '¡Ha ocurrido un error!',
      'Ingresa tu correo o contraseña correctamente',
      'error'
    );";
  }
}

if (!function_exists('error_message2')) {

  function error_message2(): string
  {
    return "swal(
      '¡Ha ocurrido un error!',
      'Ingresa un correo valido',
      'error'
    );";
  }
}

if (!function_exists('error_message3')) {

  function error_message3(): string
  {
    return "swal(
      '¡Ha ocurrido un error!',
      'Debes llenar todos los campos correctamente',
      'error'
    );";
  }
}

if (!function_exists('question_message')) {

  function question_message(): string
  {
    return "swal(
      '¿Te aseguraste de registrar todos los campos?',
      'Verifica que todos los datos se encuentren completos',
      'question');";
  }
}

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
            text: 'Esta accion no podra deshacerse',
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
      'Tu mascota ha sido eliminado.',
      'success'
    );";
  }
}
