<!-- gift start -->
	 	<section id="gift" class="gift white">
	 		<div class="container">
	 			<div class="row">
	 				<div class="col-sm-12 text-center">
 						<div class="heading wow animated fadeInUp">
							<h3>Gift Registration</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet pharetra <br> nunc, non scelerisque ligula. Crasveljusto nulla Vestibuluma.</p>
						</div>
						<!-- /.heading end -->
 					</div>
	 			</div>
	 			<div class="row">
					<div class="col-md-4">
						<div class="gift-block wow animated fadeInUp" data-wow-delay=".6s" data-wow-duration="1s">
							<a><img class="img-responsive" src="images/company_02b.png" alt="Gift name"></a>
	 						<span class="gift-overlay">

	 						</span>
						</div>
						<!-- /.gift-block end -->
					</div>
	 				<div class="col-md-4">
	 					<div class="gift-block wow animated fadeInUp" data-wow-delay=".6s" data-wow-duration="1s">
	 						<a href="#"><img class="img-responsive" src="images/company_02.png" alt="Gift name"></a>
	 						<span class="gift-overlay">

	 						</span>
	 					</div>
	 					<!-- /.gift-block end -->
	 				</div>
	 				<div class="col-md-4">
	 					<div class="gift-block wow animated fadeInUp" data-wow-delay="1.2s" data-wow-duration="1s">
							<!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
							<form action="https://pagseguro.uol.com.br/checkout/v2/donation.html" method="post">
								<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
								<input type="hidden" name="currency" value="BRL" />
								<input type="hidden" name="receiverEmail" value="morbios@gmail.com" />
								<input type="image" src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/doacoes/209x48-doar-roxo-assina.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
							</form>
							<!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
						</div>
	 					<!-- /.gift-block end -->
	 				</div>
	 			</div>
				<div clas="container">
					<div class="row">
						<div class="col-md-9">
							<div class="contact-block">
								<h5>Caso deseje, informe que você contribuiu!!!</h5>
								<?php echo form_open('presentes/inserir', 'id="form-presentes"'); ?>
								<!--<form class="contact_form" role="form" action="#"> -->
								<div class="row">
									<div class="col-xs-8 col-sm-6">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" placeholder="Seu nome..." required="required">
										</div>
									</div>

									<div class="col-xs-8">
										<div class="form-group">
											<input type="submit" name="submit" class="btn default-btn btn-block" value="Enviar meu nome">
										</div>
									</div>
									<div class="col-md-4">
										<p class="contact-success">Sua menssagem foi enviada com sucesso.<p>
										<p class="contact-error">Error ! Por favor tente novamente.</p>
									</div>
								</div>
								<!-- </form> -->
								<?php echo form_close(); ?>
							</div>
							<!-- /.contact-block end -->
						</div>
					</div>
				</div>
	 		</div>
	 	</section>
 	<!-- event end -->