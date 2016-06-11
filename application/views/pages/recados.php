<!-- event start -->
	 	<section id="message" class="contact">
	 		<div class="container">
	 			<div class="row row-centered">
	 				<div class="col-sm-12 text-center">
 						<div class="heading wow animated fadeInUp">
							<h3>Deixe aqui sua mensagem!!!</h3>
							<p>Seu recado vai ficar registrado aqui em nosso site e desde já agradecemos por essa mensagem de carinho.
								<br>Estamos muito felizes por compartilhar ester momento com vocês!</p>
						</div>
 					</div>
	 			</div>
				<div class="align-center text-center">
					<div class="contact-block">
						<?php echo form_open('recados/inserir', 'id="form-recados"'); ?>
						<!--<form class="contact_form" role="form" action="#"> -->
						<div class="row">
							<div class="col-centered center-block">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" id="name" name="name" placeholder="Seu nome..." required="required">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" class="form-control" id="email" name="email" placeholder="Seu email...">
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<textarea class="form-control" name="message" id="message" rows="4" placeholder="Mensagem..." required="required">
									</textarea>
								</div>
								<div class="form-group">
									<input type="submit" name="submit" class="btn default-btn btn-block" value="Enviar recado">
								</div>
							</div>
							<div class="col-sm-12">
								<p class="contact-success">Sua menssagem foi enviada com sucesso.<p>
								<p class="contact-error">Error ! Por favor tente novamente.</p>
							</div>
						</div>
						<!-- </form> -->
						<?php echo form_close(); ?>
					</div>
					<!-- /.contact-block end -->
				</div>





					<div class="row">
						<div class="col-md-12">
							<div>
								<div>
									<!-- /.timeline-left -->
									<?php foreach($recados -> result() as $recado):?>
										<div class="col-md-4 text-center">
											<div>
												<div class="timeline-head">
													<h4><?php echo $recado->nome;?></h4>
												</div>
												<div class="timeline-body">
													<p><?php echo $recado->recado ?></p>
												</div>
											</div>
										</div>
									<?php endforeach; ?>
									<!-- /.timeline-right -->
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
	 		</div>
	 	</section>
 	<!-- event end -->		