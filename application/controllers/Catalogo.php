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
		$this->load->model("Catalogo_model");
		$this->load->library('upload');
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
}


/* End of file Catalogo.php */
/* Location: ./application/controllers/Catalogo.php */
