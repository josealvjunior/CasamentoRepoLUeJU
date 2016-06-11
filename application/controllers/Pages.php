<?php
class Pages extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('recados_model');
        $this->load->helper('url_helper');
    }

    public function view($page = 'home')
    {
        	 if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
             {
                // Whoops, we don't have a page for that!
                show_404();
             }

             /* Carrega a biblioteca do CodeIgniter responsável pela validação dos formulários */
                $this->load->library('form_validation');
                $data['title'] = ucfirst($page); // Capitalize the first letter
                $this->load->view('templates/header', $data);
                $this->load->view('pages/'.$page, $data);
                $this->load->view('pages/casal.php', $data);
                $this->load->view('pages/historia.php', $data);
                $this->load->view('pages/padrinhos.php', $data);
                $this->load->view('pages/evento.php', $data);
                $this->load->view('pages/presentes.php', $data);
                $this->load->view('pages/fotos.php', $data);
                $this->load->view('pages/rsvp.php', $data);
                $data['recados'] = $this->recados_model->get_recados();
                $this->load->view('pages/recados.php', $data);
                $this->load->view('templates/footer', $data);
    }
}