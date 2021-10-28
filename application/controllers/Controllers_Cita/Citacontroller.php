<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Citacontroller extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Login_model", "lg");
        $this->load->library('Correo');
        $this->load->helper('modals');
        $this->load->library('session');
        $this->load->model("Catalogo_model", "mc");
        $this->load->model("models_veterinario/Veterinario_model", "vm");




        $this->load->library('Utilerias');
    }
    public function indexcita()
    {
        $this->template->set("titulo", "Inicio Cita");
        $this->template->load("template/Template_view", "contenido", "paginas/paginas_citas/Iniciocita");
    }

    public function registrocita()
    {
        $this->template->set("titulo", "Registro cita");
        $this->template->load("template/Template_view", "contenido", "paginas/paginas_citas/Registrocita");
    }

    public function guardarCita()
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
                    $ddtFechanan = $this->input->post("ddtFechanan", true);
                    $txtColor = $this->input->post("txtColor", true);
                    $cboSexo = $this->input->post("cboSexo", true);


                    $data = [
                        'nombremascota' => $txtNombrepet,
                        'idespecie' => $cbEspecie,
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
}
