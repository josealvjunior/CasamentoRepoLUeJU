<?php
if (isset($_POST['submit'])){
	if($_POST['options'] == "PagSeguro"){
		require_once 'PagSeguroLibrary/PagSeguroLibrary.php';
		/** INICIO PROCESSO PAGSEGURO */
		$paymentRequest = new PagSeguroPaymentRequest();
		$data = Array(
	 'id' => '01', // identificador
	 'description' => 'Presente de Casamento Jèssica e Rafael', // descrição
	 'quantity' => 1, // quantidade
	 'amount' => $_POST['quantity'] . '.00' // valor unitário
	 );
		$item = new PagSeguroItem($data);
		/* $paymentRequest deve ser um objeto do tipo PagSeguroPaymentRequest */
		$paymentRequest->addItem($item);
	//Definindo moeda
		$paymentRequest->setCurrency('BRL');
	// 1- PAC(Encomenda Normal)
	// 2-SEDEX
	// 3-NOT_SPECIFIED(Não especificar tipo de frete)
	// $paymentRequest->setShipping(3);
		$sedexCode = PagSeguroShippingType::getCodeByType('SEDEX');  
		$paymentRequest->setShippingType($sedexCode);  
		$paymentRequest->setShippingAddress(  
    '30240440', // CEP  
    'Rua Professor Tancredo Martins', // logradouro  
    '59', // número do logradouro  
    'apto. 201', // complemento  
    'São Lucas', // bairro  
    'Belo Horizonte', // cidade  
    'MG', // estado  
    'BRA' // país  
    );  
	//Url de redirecionamento
		$redirectURL = "http://www.jessicafaria.com.br/casamento_jr/casamento.php";
	$paymentRequest->setRedirectURL($redirectURL);// Url de retorno
	$credentials = PagSeguroConfig::getAccountCredentials();//credenciais do vendedor
	//$compra_id = App_Lib_Compras::insert($produto);
	//$paymentRequest->setReference($compra_id);//Referencia;
	$url = $paymentRequest->register($credentials);
	print "<script>
	window.location.href = '".$url."';
</script>";
}
};
?>