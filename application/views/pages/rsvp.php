<!-- .quote start -->
<section id="quote" class="quote">
	<div class="color-overlay">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<blockquote>
						<p>O meu coração, hoje tem paz. Decepção, ficou pra trás <br> Eu encontrei, um grande amor,felicidade
							enfim chegou.</p>
					</blockquote>
					<!-- blockquote end -->
				</div>
			</div>
		</div>
	</div>
	<!-- /.color-overlay end -->
</section>
<!-- .quote end -->

<!-- contact start -->
<section id="contact" class="contact">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<div class="heading wow animated fadeInUp">
					<h3>RSVP</h3>
					<p>Confirme presença o quanto antes, pois as mesas serão reservadas.
						<br> É só preencher os campos abaixo, selecionar a ocasião em que comparecerá e clicar em confirmar.
                        <br>Caso haja mais convidados em sua família aproveite e confirme a presença deles.
					</p>
				</div>
				<!-- /.heading end -->
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3 divider">
				<h5>contatos</h5>
				<div class="contact-address">
					<ul>
						<li>
							<i class="fa fa-phone"></i>
							<div class="address-phone">
								<h4>Telefone</h4>
								<span>Lu: 98486-1680</span>
								<span>Ju: 98775-1169</span>
							</div>
							<!-- /.address-phone -->
						</li>
						<li>
							<i class="fa fa-paper-plane"></i>
							<div class="address-phone">
								<h4>email</h4>
								<span>lueju.alves@gmail.com</span>
							</div>
							<!-- /.address-phone -->
						</li>
					</ul>
				</div>
			</div>
			<div class="col-sm-9">
				<div class="contact-block">
                    <?php echo validation_errors(); ?>
					<?php echo form_open('rsvp/inserir', 'id="form-rsvp"'); ?>
					<!--<form class="contact_form" role="form" action="#"> -->
					<div class="row">
                        <div class="col-sm-12" align="center">
                            <h5>Confirmação de presença</h5>
                        </div>
						<div class="col-sm-6">
							<div class="form-group" class="col-sm-4">
								<input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome e sobrenome" required="required">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="numpessoas" name="numpessoas" placeholder="Digite nome e sobrenome de outros convidados confirmados.">
							</div>
						</div>
						<div class="col-sm-6">
                            <div class="form-group">
                                <select  class="form-control" required aria-required="true" name="eventAttending" id="eventAttending">
                                    <option value="" disabled selected hidden>Qual ocasião irei(iremos)</option>
                                    <option value="Cerimônia e Recepção">Cerimônia e Recepção</option>
                                    <option value="Cerimônia religiosa">Cerimônia Religiosa</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Seu email..." required="required">
                            </div>
						</div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn default-btn btn-block" value="Confirmar">
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

		</div>
	</div>
	<!-- map start -->
	<section id="map" class="map" float="both">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.9895345131904!2d-43.92409618554002!3d-19.92484584329343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa6998d7a002fa9%3A0xabdca189526bb30d!2sMatriz+De+Santa+Efig%C3%A9nia+Dos+Militares!5e0!3m2!1spt-BR!2sbr!4v1448579626559" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		<iframe align="right" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3751.874271988249!2d-44.0908025!3d-19.8875302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa694ceb1d687cd%3A0x1dd3373a5a829760!2sR.+Ant%C3%B4nio+Dias%2C+50+-+Praia%2C+Contagem+-+MG%2C+32044-440!5e0!3m2!1spt-BR!2sbr!4v1448580012312" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</section>
	<!-- map end -->
</section>
<!-- contact end -->
