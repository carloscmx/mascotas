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
		$this->load->helper(array('form', 'url'));
		$this->load->library("form_validation");
		$this->load->helper("form");
		$this->load->model("Catalogo_model", "mc");
		$this->load->library('upload');
		$this->load->library('session');

		$this->session->validarSesionCliente();
	}

	public function index()
	{
		$this->load->view("paginas/formCatalogo");
	}


	public function guardarAnimal()
	{
		$valid_extensions = array('jpeg', 'jpg', 'png'); // valid extensions
		$path = 'resources/uploads/img/'; // upload directory
		if (!empty($_FILES['image'])) {
			$img = $_FILES['image']['name'];
			$tmp = $_FILES['image']['tmp_name'];
			// get uploaded file's extension
			$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
			// can upload same image using rand function
			$final_image = rand(1000, 1000000) . $img;
			// check's valid format
			if (in_array($ext, $valid_extensions)) {
				$path = $path . strtolower($final_image);
				if (move_uploaded_file($tmp, $path)) {
					$txtNombrepet = $this->input->post("txtNombrepet", true);
					$ddtFechanan = $this->input->post("ddtFechanan", true);
					$txtColor = $this->input->post("txtColor", true);
					$data = [
						'nombremascota' => $txtNombrepet,
						'fechanan' => date("m-d-Y", strtotime($ddtFechanan)),
						'color' => $txtColor,
						'genero' => 0,
						'ubicacionimagen' => $path
					];
					$this->mc->catalogocrear($data);
					echo json_encode(['status' => 'success', 'message' => 'Exito se ha guardado correctamente']);
				} else {
					echo json_encode(['status' => 'error', 'message' => 'No se pudo copiar la imagen verifique la ruta de destino']);
				}
			} else {
				echo json_encode(['status' => 'error', 'message' => 'Extension invalida del archivo']);
			}
		} else {
			echo json_encode(['status' => 'error', 'message' => 'No se ha seleccionado ninguna imagen']);
		}
	}


	public function mostrarAnimal()
	{
		$this->load->view("paginas/formCatalogo");
	}

	public function mostrarcatalogo()
	{

		$result['data'] = $this->mc->catalogover();
		$this->load->view('paginas/vistacatalogo', $result);
	}

	public function detallesCatalogo()
	{
		$idmascota =$_GET['detalle'];
		$data['mascota'] = $this->mc->detallemascotas(['idmascota'=>$idmascota])->row();
		//0echo json_encode($data);
		$this->load->view('paginas/detallesmascotas', $data);
	}

	public function logout()
	{
		
	}
}


/* End of file Catalogo.php */
/* Location: ./application/controllers/Catalogo.php */
