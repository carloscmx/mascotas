<?php

/**
 * This file is part of CodeIgniter 4 framework.
 *
 * (c) CodeIgniter Foundation <admin@codeigniter.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */



if (!function_exists('modal_button')) {
    /**
     * Retorna un modal de tipo animado
     *
     * @param string    $id Sera el identificador del modal que se ejecutara
     * @param string    $titulo Titulo del boton
     * @param string    $icono Icono del boton de tipo Material Design Icon
     * @param string    $velocidad Velocidad en el que el modal se lanzara
     * @param string    $colorfondomodal Color del fondo de modal
     */
    function modal_button($id = 'custommodalid', $titulo = 'Boton instalado', $icono = 'mdi mdi-paw ', $velocidad = '200', $colorfondomodal = '#36404a'): string
    {
        return  " <a href='#{$id}' class='btn btn-custom waves-effect waves-light mb-4' data-animation='fadein' data-plugin='custommodal' data-overlaySpeed='{$velocidad}' data-overlayColor='{$colorfondomodal}'><i class='{$icono}'></i> {$titulo}</a>";
    }
}

if (!function_exists('modal_standar')) {
    /**
     * Retorna un modal de tipo animado
     *
     * @param string    $id Sera el identificador del modal
     * @param string    $titulo Es el titulo de la cabecera del modal
     * @param string    $mensaje El mensaje que se dara en el modal

     */
    function modal_standar($id = 'custommodalid', $titulo = '', $mensaje = ''): string
    {
        return  "  <div id='{$id}' class='modal-demo'>
        <button type='button' class='close' onclick='Custombox.close();'>
            <span>&times;</span><span class='sr-only'>Close</span>
        </button>
        <h4 class='custom-modal-title'>{$titulo}</h4>
        <div class='custom-modal-text'>
        <p>{$mensaje}</p>
        <br>
        <button class='btn w-lg btn-rounded btn-custom waves-effect waves-light' type='submit' onclick='javascript:Custombox.close();'>Cerrar</button>
        </div>
    </div>";
    }
}
