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
		$this->load->helper('modals');
		$this->load->helper('modalb');
		$this->load->helper('alertb');



		$this->session->validarSesionCliente();
	}

	public function index()
	{
		$this->load->view("paginas/formCatalogo");
	}
	public function registromascota()
	{
		$data['especies'] = $this->mc->obtenerEspecies(['activo' => 1])->result();
		$data['razas'] = $this->mc->obtenerRazas()->result();

		$this->template->set("titulo", "Registro mascotas");
		$this->template->load("template/Template_view", "contenido", "paginas/paginas_mascotas/ViewRegistro", $data);
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
					$cbEspecie = $this->input->post("cbEspecie", true);
					$cbRaza = $this->input->post("cbRaza", true);
					$ddtFechanan = $this->input->post("ddtFechanan", true);
					$txtColor = $this->input->post("txtColor", true);
					$cboSexo = $this->input->post("cboSexo", true);


					$data = [
						'nombremascota' => $txtNombrepet,
						'idespecie' => $cbEspecie,
						'idraza' => $cbRaza,
						'fechanan' => date("Y-m-d", strtotime($ddtFechanan)),
						'color' => $txtColor,
						'genero' => $cboSexo,
						'ubicacionimagen' => $path,
						'iduser' => $_SESSION['user_client']->id
					];
					$this->mc->catalogocrear($data);
					echo json_encode(['status' => 'success', 'message' => 'Exito se ha guardado correctamente']);
				} else {
					echo json_encode(['status' => 'error', 'message' => "No se pudo copiar la imagen verifique la ruta de destino {$path}"]);
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
		$home = base_url();

		if (isset($_GET['detalle'])) {
			$idmascota = $_GET['detalle'];
			if ($this->mc->detallemascotas(['idmascota' => $idmascota, 'iduser' => $_SESSION['user_client']->id, 'activo' => 1])->num_rows() > 0) {
				$detallemascota = $this->mc->detallemascotas(['idmascota' => $idmascota])->row();
				$data['mascota'] = $detallemascota;
				$data['especie'] = $this->mc->obtenerEspecies(['idespecie' => $detallemascota->idespecie])->row();
				$data['raza'] = $this->mc->obtenerRazas(['idraza' => $detallemascota->idraza])->row();

				$this->template->set("titulo", "Detalles");
				$this->template->load("template/Template_view", "contenido", "paginas/paginas_mascotas/detallesmascotas", $data);
			} else {
				show_error("Sin permiso", 403, "Ha ocurrido un error, <a href='{$home}'>Regresar</a>");
			}
		} else {
			show_error("Sin permiso", 403, "Ha ocurrido un error, <a href='{$home}'>Regresar</a>");
		}
	}

	public function editarmascota()
	{
		$home = base_url();

		if (isset($_GET['detalle'])) {
			$idmascota = $_GET['detalle'];
			if ($this->mc->detallemascotas(['idmascota' => $idmascota, 'iduser' => $_SESSION['user_client']->id, 'activo' => 1])->num_rows() > 0) {
				$detallemascota = $this->mc->detallemascotas(['idmascota' => $idmascota])->row();
				$data['mascota'] = $detallemascota;
				$data['especie'] = $this->mc->obtenerEspecies(['idespecie' => $detallemascota->idespecie])->row();



				$this->template->set("titulo", "Modificar");
				$this->template->load("template/Template_view", "contenido", "paginas/paginas_mascotas/editarmascota", $data);
			} else {
				show_error("Sin permiso", 403, "Ha ocurrido un error, <a href='{$home}'>Regresar</a>");
			}
		} else {
			show_error("Sin permiso", 403, "Ha ocurrido un error, <a href='{$home}'>Regresar</a>");
		}
	}

	public function eliminarmascota()
	{
		$idmascotas = $this->uri->segment(3);
		$respuesta = $this->lg->borrarmascota($idmascotas);
		if ($respuesta['action']) {
			$this->load->view('paginas/vistacatalogo');
		} else {
			show_error("No se pudo procesar esta peticion.", 403, "Ha ocurrido un error.");
		}
	}

	public function ajustescliente()
	{
		$this->template->set("titulo", "Ajustes de cuenta");
		$this->template->load("template/Template_view", "contenido", "paginas/paginas_mascotas/ajustescliente");
	}

	public function razaxespecie()
	{
		$id = ($_POST['id_especie']);
		$where = ["idespecie" => $id];

		$get = $this->mc->obtenerRazas($where);
		echo json_encode($get->result_array());
	}
}


/* End of file Catalogo.php */
/* Location: ./application/controllers/Catalogo.php */
