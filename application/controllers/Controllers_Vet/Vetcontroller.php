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

        $this->template->set("titulo", "Bienvenido");
        $this->template->load("template_vet/Template_pagestarter", "contenido", "paginas_veterinario/Inicioveterinario");
    }
}
