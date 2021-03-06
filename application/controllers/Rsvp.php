<?php
class Rsvp extends CI_Controller {
    function inserir()
    {
        /*
        /* Carrega a biblioteca do CodeIgniter respons�vel pela valida��o dos formul�rios */
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('form_validation','session'));

        $this->load->model('rsvp_model');

        $this->form_validation->set_error_delimiters('<span>', '</span>');
        /* Define as regras para valida��o */
        $this->form_validation->set_rules('name', 'name', 'required|max_length[100]');
        //$this->form_validation->set_rules('numpessoas', 'numpessoas', 'required');
        $this->form_validation->set_rules('eventAttending', 'eventAttending','required');
        $this->form_validation->set_rules('email', 'email');

        /* Executa a valida��o e caso houver erro... */
        if ($this->form_validation->run() == FALSE) {
            /* Chama a fun��o index do controlador */
            $this->load->view('pages/rsvp.php');
            /* Sen�o, caso sucesso na valida��o... */

        } else {

            /* Recebe os dados do formul�rio (vis�o) */
            $data['name'] = $this->input->post('name');
            $data['numpessoas'] = $this->input->post('numpessoas');
            $data['eventAttending'] = $this->input->post('eventAttending');
            $data['email'] = $this->input->post('email');
            $data['data_criacao'] = date("Y-m-d");

            $this->load->library('email'); // load email library
            $this->email->from('lueju.alves@gmail.com', 'Luana & Juninho');
            $this->email->to($data['email']);
            $this->email->subject('Confirmacao de presenca');
            $this->email->bcc('lueju.alves@gmail.com');
            /*
            Olá xxxxx! Tudo bem?
            Muito obrigado por confirmar presença de xx pessoas (incluindo você) em nosso casamento!
            Não se esqueça da data e horário:
            a cerimônia será dia 13/08/2016 às 16h na Paróquia de Santa Efigênia dos Militares - R. Álvares Maciel, 223.
            Sua presença é muito importante para nós!
            Agradecemos o carinho e nós vemos lá!Abraços!
            Luana & Juninho
            */

            if($data['eventAttending'] =='Cerimônia e recepcao')
            {
                if(!empty($data['numpessoas'])){
                    $this->email->message(
                        'Ola '. $data['name'].'! Tudo bem?<br />
                    <p>Muito obrigado por confirmar sua presença e de '. $data['numpessoas'].' na cerimônia e recepção!<br /> 
                    Não se esqueça da data e horário:<br />
                    A cerimônia será dia 13/08/2016 às 16h na Paróquia de Santa Efigênia dos Militares - R. Álvares Maciel, 223.<br />
                    ***Haverá conferência nominal na portaria da recepção, então leve um documento de identidade!!!****<br />
                    Sua presença é muito importante para nós! Agradecemos o carinho e nos vemos lá!<br /> 
                    Abraços!<br /> 
                    Luana & Juninho.</p>'
                    );
                }else {
                    $this->email->message(
                        'Ola '. $data['name'].'! Tudo bem?<br />
                    <p>Muito obrigado por confirmar sua presença na cerimônia e recepção!<br /> 
                    Não se esqueça da data e horário:<br />
                    A cerimônia será dia 13/08/2016 às 16h na Paróquia de Santa Efigênia dos Militares - R. Álvares Maciel, 223.<br />
                    Sua presença é muito importante para nós! Agradecemos o carinho e nos vemos lá!<br /> 
                    Abraços!<br /> 
                    Luana & Juninho.</p>'
                    );

                }
            }else {

                if ($data['eventAttending'] == 'Cerimônia religiosa') {
                    if (!empty($data['numpessoas'])) {
                        $this->email->message(
                            'Ola ' . $data['name'] . '! Tudo bem?<br />
                        <p>Muito obrigado por confirmar sua presença e de ' . $data['numpessoas'] . ' na cerimônia religiosa!<br /> 
                        Não se esqueça da data e horário:<br />
                        A cerimônia será dia 13/08/2016 às 16h na Paróquia de Santa Efigênia dos Militares - R. Álvares Maciel, 223.<br />
                        Sua presença é muito importante para nós! Agradecemos o carinho e nos vemos lá!<br /> 
                        Abraços!<br /> 
                        Luana & Juninho.</p>'
                        );
                    } else {
                        $this->email->message(
                            'Ola ' . $data['name'] . '! Tudo bem?<br />
                        <p>Muito obrigado por confirmar sua presença na cerimônia religiosa!<br /> 
                        Não se esqueça da data e horário:<br />
                        A cerimônia será dia 13/08/2016 às 16h na Paróquia de Santa Efigênia dos Militares - R. Álvares Maciel, 223.<br />
                        Sua presença é muito importante para nós! Agradecemos o carinho e nos vemos lá!<br /> 
                        Abraços!<br /> 
                        Luana & Juninho.</p>'
                        );
                    }
                } else {
                    if($data['eventAttending'] =='Não')
                    {
                        if(!empty($data['numpessoas'])){
                            $this->email->message(
                                'Ola '. $data['name'].'! Tudo bem?<br />
                            <p>Que pena que você e '. $data['numpessoas'].' não poderão estar conosco, mas compreendemos!<br /> 
                            Abraços.<br /> 
                            Luana & Juninho.</p>'
                            );
                        }else {
                            $this->email->message(
                                'Ola '. $data['name'].'! Tudo bem?<br />
                            <p>Que pena que você não poderá estar conosco, mas compreendemos!<br /> 
                            Abraços.<br /> 
                            Luana & Juninho.</p>'
                            );
                        }
                    }
                }

            }

            if ($this->email->send()){
                echo "Mail Sent!";
            }
            else{
                echo $this->email->print_debugger();
            }


            /* Chama a fun��o inserir do modelo */

            $this->session->set_flashdata('sucesso','Sua Reserva foi cadastrada com sucesso!');
            $this->rsvp_model->inserir($data);
            //redirect('#contact');

            redirect('','#contact');
        }
    }
}