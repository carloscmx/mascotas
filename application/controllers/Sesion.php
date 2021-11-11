<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sesion extends CI_Controller
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
        $this->load->helper('modalb');
        $this->load->helper('alertb');
        $this->load->library('session');
        $this->load->model("Catalogo_model", "mc");
        $this->load->model("models_veterinario/Veterinario_model", "vm");
        $this->load->library('Utilerias');
    }

    public function PaginaPrincipal()
    {
        if (isset($_SESSION['user_client'])) {
            $url = base_url("cliente/inicio");
            header("Location: $url");
        } else {
            $this->load->view("landing");
        }
    }

    public function PaginaPrincipalvet()
    {
        if (isset($_SESSION['user_vet'])) {
            $url = base_url("veterinario/inicio");
            header("Location: $url");
        } else {
            $this->load->view("landing");
        }
    }

    public function index()
    {
        $this->session->validarSesionCliente();
        $data['mascotas'] = $this->mc->detallemascotas(['iduser' => $_SESSION['user_client']->id, 'activo' => 1])->result();

        $this->template->set("titulo", "Bienvenido cliente");
        $this->template->load("template/Template_view", "contenido", "paginas/paginas_mascotas/Iniciomascotas", $data);
    }

    public function indexveterinario()
    {
        $this->session->validarSesionVeterinario();
        $data['certificados'] = $this->vm->vetmodeldetalle(['idusuario' => $_SESSION['user_vet']->id]);
        $this->template->set("titulo", "Bienvenido veterinario");
        $this->template->load("template_vet/Template_pagestarter", "contenido", "paginas/paginas_veterinario/Inicioveterinario", $data);
    }
}
