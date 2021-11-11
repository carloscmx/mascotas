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
        $this->load->helper('modalb');
        $this->load->helper('alertb');
        $this->load->model("Catalogo_model", "mc");
        $this->load->model("models_veterinario/Veterinario_model", "vm");



        $this->load->library('Utilerias');
    }

    public function registroveterinario()
    {
        $data['veterinariosinfo'] = $this->vm->vetmodelobtener(['activovet' => 1])->result();

        $this->template->set("titulo", "Registro veterinario");
        $this->template->load("template_vet/Template_pagestarter", "contenido", "paginas/paginas_veterinario/Registroveterinario");
    }

    public function guardardatosveterinario()
    {

        if ($this->input->is_ajax_request()) {

            $this->form_validation->set_rules('txtNombrevet', 'Nombrevet', 'required');
            $this->form_validation->set_rules('txtApellidopvet', 'Apellidopvet', 'required');
            $this->form_validation->set_rules('txtApellidomvet', 'Apellidomvet', 'required');
            $this->form_validation->set_rules('cboExt', 'Extvet', 'required');
            $this->form_validation->set_rules('txtTel', 'Telvet', 'required');
            $this->form_validation->set_rules('txtDescripvet', 'Descripvet', 'required');
            $this->form_validation->set_rules('txtHorariovet', 'Horariovet', 'required');

            if ($this->form_validation->run()) {

                $valid_extensions = array('jpeg', 'jpg', 'png', 'pdf', 'docx'); // valid extensions
                $path = 'resources/uploads/documents/'; // upload directory
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
                            $txtDescripvet = $this->input->post("txtDescripvet", true);
                            $txtHorariovet = $this->input->post("txtHorariovet", true);


                            $data = [
                                'nombreveterinario' => $txtNombrevet,
                                'apellidopvet' => $txtApellidopvet,
                                'apellidomvet' => $txtApellidomvet,
                                'extension' => $cboExt,
                                'telefono' => $txtTel,
                                'descripcionvet' => $txtDescripvet,
                                'horariovet' => $txtHorariovet,
                                'cedula' => $path,
                                'rfc' => $path,
                                'fotovet' => $path,
                                'idusuario' => $_SESSION['user_vet']->id
                            ];
                            $this->vm->vetmodelcrear($data);
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
            } else {
                $this->output->set_status_header(400)->set_content_type('application/json')->set_output(json_encode([
                    'status' => false,
                    'message' => [
                        'Nombrevet' => form_error('txtNombrevet'),
                        'Aellidopvet' => form_error('txtApellidopvet'),
                        'Apellidomvet' => form_error('txtApellidomvet'),
                        'Extvet' => form_error('cboExt'),
                        'Telvet' => form_error('txtTel'),
                        'Descripvet' => form_error('txtDescripvet'),
                        'Horariovet' => form_error('txtHorariovet')
                    ]
                ]));
            }
        } else {
            show_404();
        }
    }

    public function detallesvet()
    {
        $home = base_url();

        if (isset($_GET['detallevet'])) {
            $idveterinarioinfo = $_GET['detallevet'];
            if ($this->vm->vetmodeldetalle(['idveterinarioinfo' => $idveterinarioinfo, 'idusuario' => $_SESSION['user_vet']->id])->num_rows() > 0) {
                $detallesvet = $this->vm->vetmodeldetalle(['idveterinarioinfo' => $idveterinarioinfo])->row();
                $data['veterinariosinfo'] = $detallesvet;


                $this->template->set("titulo", "Detalles veterinario");
                $this->template->load("template_vet/Template_pagestarter", "contenido", "paginas/paginas_veterinario/Detallesveterinario", $data);
            } else {
                show_error("Sin permiso", 403, "Ha ocurrido un error, <a href='{$home}'>Regresar</a>");
            }
        } else {
            show_error("Sin permiso", 403, "Ha ocurrido un error, <a href='{$home}'>Regresar</a>");
        }
    }

    public function logoutvet()
    {
        session_destroy();
    }
}
