<?php

/**
 * @package	APIS WHMCS
 * @author	Carlos Cauich
 * @copyright	Copyright (c) Blazar Networks
 * @copyright	Copyright (c) Blazar Networks
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://blazar.mx
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') or exit('No direct script access allowed');

class Utilerias
{

	public function set_zero_format($number, $length)
	{
		return substr(str_repeat(0, $length) . $number, -$length);
	}
	function generateToken()
	{
		$longitud = 50;
		$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
		$password = "";
		//Reconstruimos la contraseña segun la longitud que se quiera
		for ($i = 0; $i < $longitud; $i++) {
			//obtenemos un caracter aleatorio escogido de la cadena de caracteres
			$password .= substr($str, rand(0, 62), 1);
		}

		return $password . md5(date("Y-m-d H:i:s"));
	}
	/**Genera una password segura con la longitud pedida */
	function generatePassword($longitud)
	{
		$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
		$password = "";
		//Reconstruimos la contraseña segun la longitud que se quiera
		for ($i = 0; $i < $longitud; $i++) {
			//obtenemos un caracter aleatorio escogido de la cadena de caracteres
			$password .= substr($str, rand(0, 62), 1);
		}

		return $password;
	}
	public function valida_rfc($valor)
	{
		$valor = str_replace("-", "", $valor);
		$cuartoValor = substr($valor, 3, 1);
		//RFC sin homoclave
		if (strlen($valor) == 10) {
			$letras = substr($valor, 0, 4);
			$numeros = substr($valor, 4, 6);
			if (ctype_alpha($letras) && ctype_digit($numeros)) {
				return true;
			}
			return false;
		}
		// Sólo la homoclave
		else if (strlen($valor) == 3) {
			$homoclave = $valor;
			if (ctype_alnum($homoclave)) {
				return true;
			}
			return false;
		}
		//RFC Persona Moral.
		else if (ctype_digit($cuartoValor) && strlen($valor) == 12) {
			$letras = substr($valor, 0, 3);
			$numeros = substr($valor, 3, 6);
			$homoclave = substr($valor, 9, 3);
			if (ctype_alpha($letras) && ctype_digit($numeros) && ctype_alnum($homoclave)) {
				return true;
			}
			return false;
			//RFC Persona Física. 
		} else if (ctype_alpha($cuartoValor) && strlen($valor) == 13) {
			$letras = substr($valor, 0, 4);
			$numeros = substr($valor, 4, 6);
			$homoclave = substr($valor, 10, 3);
			if (ctype_alpha($letras) && ctype_digit($numeros) && ctype_alnum($homoclave)) {
				return true;
			}
			return false;
		} else {
			return false;
		}
	} //fin validaRFC
	public function crearTXTVerticalBar($arreglo)
	{
		$txt = "";
		foreach ($arreglo as $row => $value) {
			$txt .= "{$value}|";
		}
		return $txt;
	}
	public function generarceros($number, $length = 10)
	{
		return substr(str_repeat(0, $length) . $number, -$length);
	}
	function fechaproduccion($facharecibida)
	{

		$fechaproduccion = "01-08-2021";

		$fchapro = date('Y-m-d', strtotime($fechaproduccion));
		$fcharecib = date('Y-m-d', strtotime($facharecibida));

		$respuesta = false;

		if ($fcharecib >= $fchapro) {
			$respuesta = true;
		}

		return $respuesta;
	}
	function is_base64_encoded($data)
	{
		// Check if there are valid base64 characters
		if (!preg_match('/^[a-zA-Z0-9\/\r\n+]*={0,2}$/', $data)) return false;

		// Decode the string in strict mode and check the results
		$decoded = base64_decode($data, true);
		if (false === $decoded) return false;

		// Encode the string again
		if (base64_encode($decoded) != $data) return false;

		return true;
	}
	function usuariosFactura()
	{
	}
}
