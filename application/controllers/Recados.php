<?php
class Recados extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('recados_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $this->load->helper('form');
        $data['recados'] = $this->recados_model->get_recados();
        $this->load->view('pages/recados.php', $data);
        $this->load->view('pages/home.php', $data);
    }

    function inserir()
    {
        /*
        /* Carrega a biblioteca do CodeIgniter respons�vel pela valida��o dos formul�rios */
        $this->load->library(array('form_validation','session'));
        $this->load->model('recados_model');
        /* Define as tags onde a mensagem de erro ser� exibida na p�gina */
        $this->form_validation->set_error_delimiters('<span>', '</span>');

        /* Define as regras para valida��o */
        $this->form_validation->set_rules('name', 'name', 'required|max_length[100]');
        $this->form_validation->set_rules('email', 'email');
        $this->form_validation->set_rules('message', 'message', 'required');
        /* Executa a valida��o e caso houver erro... */
        if ($this->form_validation->run() === FALSE) {
                    /* Chama a fun��o index do controlador */
            $this->load->view('pages/presentes.php');
            /* Sen�o, caso sucesso na valida��o... */

        } else {
            /* Recebe os dados do formul�rio (vis�o) */
            $data['nome'] = $this->input->post('name');
            $data['email'] = $this->input->post('email');
            $data['recado'] = $this->input->post('message');
            $data['dt_criacao'] = date("Y-m-d");
            //inserir data atual tamb�m....

            //enviar email de aviso//
            $this->load->library('email'); // load email library
            $this->email->from('lueju.alves@gmail.com', 'Luana & Juninho');
            $this->email->to('lueju.alves@gmail.com');
            $this->email->subject('Sinalização de recado');
            $this->email->message(
                'Olá, recebemos um recado de: '.$data['nome'].', '.$data['email'].
                '<br />O recado é: <br />'.
                '" '.$data['recado'].' " '.'</p>'
            );
            $this->email->send();

            if(!empty($data['email'])){
                //enviar email de resposta//
                $this->load->library('email'); // load email library
                $this->email->from('lueju.alves@gmail.com', 'Luana & Juninho');
                $this->email->to($data['email']);
                $this->email->subject('Recado Casmento Lu & Ju');
                $this->email->message(
                    'Oi '.$data['nome'].', tudo bem? '.
                    '<br />Lemos seu recado em nosso site. Muito obrigado pelo carinho e por ter nos escrito uma mensagem.<br />'.
                    'Abraços da Lu & do Ju.'.'</p>'
                );
                $this->email->send();
            }


            /* Chama a fun��o inserir do modelo */
            $this->session->set_flashdata('sucesso','Seu recado foi registrado com sucesso!');
            $this->recados_model->inserir($data);
            //redirect('#contact');

            redirect('','#message');
        }
    }
}