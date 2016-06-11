<section id="gift" class="gift white">
	 		<div class="container">
	 			<div class="row">
	 				<div class="col-sm-12 text-center">
 						<div class="heading wow animated fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
							<h3>Presentes</h3>
							<p> Amigos(as), como já possuímos o apartamento montado, não faremos lista de presente.
								<br>Caso deseje nos presentear, estamos aceitando contribuições nas contas abaixo
								ou através do pag seguro que aceita cartão de crédito .</p>
						</div>
						<!-- /.heading end -->
 					</div>
	 			</div>
	 			<div class="row">
					<div class="col-md-3 text-center">
						<h5>Conta Corrente 1</h5>
						<p>Banco Itaú</p>
						<p>José Vicente A. Junior</p>
						<span>Agência: 3309</span>
						<p>Conta: 2209-0</p>
					</div>
	 				<div class="col-md-3 text-center">
						
  <h5>Conta Corrente 2</h5>
<p>Banco do Brasil</p>
						<p>Luana Kessia L. A. Martins</p>
<span>Agência: 0503-7</span>
<p>Conta: 39.432-7</p>
					</div>
<div class="col-md-3 text-center">
	<h5>Conta Corrente 3</h5>
<p>Caixa Econômica</p>
<span>Em Breve</span>
<!-- <p>Conta: 2209-0</p> -->
					</div>
	 				<div class="col-md-3 text-center">
						<h5>Contribuição via PagSeguro</h5>
						<p>(pagamento via cartão de crédito, boleto, parcelamento em até 12x)</p>

						<?php echo form_open('presentes/pagSeguro', 'id="form-pagSeguro"'); ?>
						<!--<form class="contact_form" role="form" action="#"> -->
						<div class="row">
							<div class="col-xs-8 col-sm-6 col-md-6 col-md-offset-3">
								<div class="form-group">
									<input type="number" name="valor" min="1" max="1000000000" class="form-control" id="exampleImput" placeholder="R$" required="required">
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<input type="submit" name="submit" class="btn btn-danger" value="Confirmar">

								</div>
							</div>
							<div class="col-md-4">
								<p class="contact-success">Sua menssagem foi enviada com sucesso.</p><p>
								</p><p class="contact-error">Error ! Por favor tente novamente.</p>
							</div>
						</div>
						<!-- </form> -->
						<?php echo form_close(); ?>
					</div>
	 			</div>

				
					<div class="row">
						<div class="text-center">
							<div class="text-center contact" style="padding: 50px;">
								<h5 style="
    /* margin-top: 40px; */
">Se desejar, nos informe que você contribuiu!!!</h5>
								<?php echo form_open('presentes/inserir', 'id="form-presentes"'); ?>
								<!--<form class="contact_form" role="form" action="#"> -->
								<div class="row">
									<div class="col-xs-8 col-sm-6 col-md-6 col-md-offset-3">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" placeholder="Seu nome, valor(caso deseje informar) " required="required">
										</div>
									</div>

									<div class="col-xs-8 col-sm-6 col-md-6 col-md-offset-3">
										<div class="form-group">
											<input type="submit" name="submit" class="btn default-btn btn-block" value="Enviar">
										</div>
									</div>
									<div class="col-md-4">
										<p class="contact-success">Sua menssagem foi enviada com sucesso.</p><p>
										</p><p class="contact-error">Error ! Por favor tente novamente.</p>
									</div>
								</div>
								<!-- </form> -->
								<?php echo form_close(); ?>
							</div>
							<!-- /.contact-block end -->
						</div>
					</div>

	 		</div>
	 	</section>