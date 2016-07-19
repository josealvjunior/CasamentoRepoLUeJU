<?php
class Presentes extends CI_Controller {

    public function pagSeguro()
    {
        /*
        /* Carrega a biblioteca do CodeIgniter respons�vel pela valida��o dos formul�rios */
        $this->load->library('form_validation', 'PagSeguroLibrary');
        $this->load->model('presentes_model');
        /* Define as tags onde a mensagem de erro ser� exibida na p�gina */
        $this->form_validation->set_error_delimiters('<span>', '</span>');

        /* Define as regras para valida��o */
        $this->form_validation->set_rules('valor', 'decimal', 'required');
        /* Executa a valida��o e caso houver erro... */

        if ($this->form_validation->run() === FALSE) {
            /* Chama a fun��o index do controlador */
            $this->load->view('pages/presentes.php');
            /* Sen�o, caso sucesso na valida��o... */

        } else {
            /* Recebe os dados do formul�rio (vis�o) */
            $data['valor'] = $this->input->post('valor');
            $data['descricao'] = 'Presente Luana e Juninho';
           //inserir data atual tamb�m....
            /* Chama a fun��o inserir do modelo */

            $this->presentes_model->pagSeguro($data);
            //redirect('#contact');
        };
        /** INICIO PROCESSO PAGSEGURO */
            require_once(APPPATH.'libraries/PagSeguroLibrary/PagSeguroLibrary.php');

            /** INICIO PROCESSO PAGSEGURO */
            $paymentrequest = new PagSeguroPaymentRequest();

            $data = Array(
                'id' => '01', // identificador
                'description' => 'Presente Luana e Juninho', // descri��o
                'quantity' => 1, // quantidade
                'amount' => $this->input->post('valor'), // valor unit�rio
            );
            $item = new PagSeguroItem($data);
            /* $paymentRequest deve ser um objeto do tipo PagSeguroPaymentRequest */

            $paymentrequest->addItem($item);
            //Definindo moeda
            $paymentrequest->setCurrency('BRL');

            // 1- PAC(Encomenda Normal)
            // 2-SEDEX
            // 3-NOT_SPECIFIED(N�o especificar tipo de frete)
            $paymentrequest->setShipping(3);
            //Url de redirecionamento
            //$paymentrequest->setRedirectURL($redirectURL);// Url de retorno

            $credentials = PagSeguroConfig::getAccountCredentials();//credenciais do vendedor

            //$compra_id = App_Lib_Compras::insert($produto);
            //$paymentrequest->setReference($compra_id);//Referencia;

            $url = $paymentrequest->register($credentials);

            header("Location: $url");
    }

    function inserir()
    {
        /*
        /* Carrega a biblioteca do CodeIgniter respons�vel pela valida��o dos formul�rios */
        $this->load->library(array('form_validation', 'email','session'));
        $this->load->model('presentes_model');

        /* Define as tags onde a mensagem de erro ser� exibida na p�gina */
        $this->form_validation->set_error_delimiters('<span>', '</span>');

        /* Define as regras para valida��o */
        $this->form_validation->set_rules('name', 'name', 'required|max_length[100]');
        /* Executa a valida��o e caso houver erro... */
        if ($this->form_validation->run() === FALSE) {
                    /* Chama a fun��o index do controlador */
            $this->load->view('pages/presentes.php');
            /* Sen�o, caso sucesso na valida��o... */

        } else {
            /* Recebe os dados do formul�rio (vis�o) */
            $data['name'] = $this->input->post('name');
            //inserir data atual tamb�m....


            /* Chama a fun��o inserir do modelo */
            $this->load->library('email'); // load email library
            $this->email->from('lueju.alves@gmail.com', 'Luana & Juninho');
            $this->email->to('lueju.alves@gmail.com');
            $this->email->subject('Sinalização de presente');
            $this->email->message('Olá recebemos um presente '. $data['name']);
            $this->email->send();
            $this->presentes_model->inserir($data);
            //redirect('#contact');
            $this->session->set_flashdata('sucesso','Seu Presente foi registrado com sucesso!');

            redirect('','#gift');
        }
    }
}