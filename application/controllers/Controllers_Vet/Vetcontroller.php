<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vetcontroller extends CI_Controller
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



        $this->load->library('Utilerias');
    }
    public function indexveterinario()
    {
        $this->session->validarSesionVeterinario();
        $data['veterinarios'] = $this->mc->detalleveterinarios(['idusuario' => $_SESSION['user_vet']->id, 'activo' => 1])->result();

        $this->template->set("titulo", "Bienvenido veterinario");
        $this->template->load("template_vet/Template_pagestarter", "contenido", "paginas_veterinario/Inicioveterinario");
    }

    public function registroveterinario()
    {
        $data['especies'] = $this->mc->obtenerEspecies(['activo' => 1])->result();

        $this->template->set("titulo", "Registro veterinario");
        $this->template->load("template_vet/Template_pagestarter", "contenido", "paginas_veterinario/Registroveterinario", $data);
    }

    public function guardardatosveterinario()
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
                    $txtNombrevet = $this->input->post("txtNombrevet", true);
                    $txtApellidopvet = $this->input->post("txtApellidopvet", true);
                    $txtApellidomvet = $this->input->post("txtApellidomvet", true);
                    $cboExt = $this->input->post("cboExt", true);
                    $txtTel = $this->input->post("txtTel", true);
                    $txtDir = $this->input->post("txtDir", true);


                    $data = [
                        'nombreveterinario' => $txtNombrevet,
                        'apellidopvet' => $txtApellidopvet,
                        'apellidomvet' => $txtApellidomvet,
                        'extension' => $cboExt,
                        'telefono' => $txtTel,
                        'direccion' => $txtDir,
                        'ubicacionimagen' => $path,
                        'iduser' => $_SESSION['user_vet']->id
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

    public function logoutvet()
    {
        session_destroy();
    }
}
