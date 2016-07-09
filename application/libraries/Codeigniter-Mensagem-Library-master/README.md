Descrição
============================

CodeIgniter Library, para retorno de mensagens (sucesso, erro e alerta) ao usuário.



Instalação
==========

Para instalar basta colocar os arquivos: 

  - mensagem.php na pasta application/libraries 
  - mensagens_lang.php na pasta application/language/portugues.



Utilização
==========

Primeiro é necessário carregar a library no codeigniter: $this->load->library('mensagem');
    
Depois, basta chamar os métodos da library dentro do seu controller passando como parâmetro o código da mensagem do erro utilizado no arquivo mensagem_lang.php.

Para exibir a mensagem, seja ela de erro, sucesso ou alerta na view, basta chamar o método: $this->mensagem->exibir();


Exemplos
========
- MENSAGEM DE ALERTA: 
    $this->mensagem->alerta('1');
    
    
- MENSAGEM DE ERRO:
    $this->mensagem->erro('A');


- MENSAGEM DE SUCESSO:
    $this->mensagem->sucesso('A');
