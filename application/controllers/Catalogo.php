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

	public function insertar()
	{
		$ori_filename = $_FILES['ubicacionimagen']['name'];
		$new_name = time() . "" . str_replace('', '-', $ori_filename);
		$config = [

			'upload_path' => './images',
			'allowed_types' => 'gif|jpg|png',
			'file_name' => '$new_name',

		];
		$this->load->library('upload', $config);

		if ($this->upload->do_upload()) {
			$data = $this->input->post();
			$info = $this->upload->data();
			$image_path = base_url("img/" . $info['raw_name'] . $info['file_ext']);
			$data['imagen'] = $image_path;
			unset($data['submit']);
			$this_load->model('queries');
			if ($this->queries->insertImage($data)) {
				echo 'imagen guardada';
			} else {

				echo 'error al guardar';
			}
		}
	}

	public function catalogocrear()
	{

		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('userfile')) {
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_form', $error);
		} else {
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('upload_success', $data);
		}
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
}


/* End of file Catalogo.php */
/* Location: ./application/controllers/Catalogo.php */
