<?php

/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2019, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2019, British Columbia Institute of Technology (https://bcit.ca/)
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * CodeIgniter URL Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		EllisLab Dev Team
 * @link		https://codeigniter.com/user_guide/helpers/url_helper.html
 */

// ------------------------------------------------------------------------

if (!function_exists('modal_simple')) {
	/**
	 * Modal simple
	 *
	 * Este helper sirve para generar un modal sencillo utilizado parametros basicos.
	 *
	 * @param	string	$idmodal
	 * @param	string	$titulo
	 * @return	string  $textobody
	 * @return	bool  $cancelbutton
	 */
	function modal_simple($idmodal, $titulo, $textobody, $cancelbutton = true, $modalsize = "")
	{

		$button = "";
		if ($cancelbutton) {
			$button = "<button type='button' class='btn btn-default' data-dismiss='modal'>Cerrar</button>";
		}
		return $modal =
			"<div class='modal fade' tabindex='-1' role='dialog' id='{$idmodal}'>
			<div class='modal-dialog {$modalsize}' role='document'>
			<div class='modal-content'>
			<div class='modal-header'>
	
			  <h4 class='modal-title'>{$titulo}</h4>
			</div>
			<div class='modal-body'>
			  <p>{$textobody}</p>
			</div>
			
			<div class='modal-footer'>
			{$button}
			</div>
		  </div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	  </div><!-- /.modal -->
	  ";
	}
}

if (!function_exists('large_modal')) {
	/**
	 * Modal Largo
	 *
	 * Este helper sirve para generar un modal largo utilizado parametros basicos.
	 *
	 * @param	string	$idmodal
	 * @param	string	$titulo
	 * @return	string  $textobody
	 * @return	bool  $cancelbutton
	 */
	function large_modal($idmod, $titul, $texto, $cancelbtn = true)
	{
		$button = "";
		if ($cancelbtn) {
			$button = "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='.bs-example-modal-lg'>Large modal</button>";
		}
		return $modal = "<div class='modal fade' bs-example-modal-lg' tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' id='{$idmod}'>
		  <div class='modal-dialog modal-lg' role='document'>
			<div class='modal-content'>
			<div class='modal-header'>
			
			<h4 class='modal-title'>{$titul}</h4>
		  </div>
		  <div class='modal-body'>
			<p>{$texto}</p>
		  </div>
		  <div class='modal-footer'>
		  {$cancelbtn}
		  </div>
		  </div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	  </div><!-- /.modal -->
	  ";
	}
}
