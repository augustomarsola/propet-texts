<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- Start Page Title Area -->
<div class="mt-5">
	<div class="container">
		<div class="page-title-content">
			<h1>Contato</h1>
			<ul>
				<li><a href="home">Home</a></li>
				<li>Contato</li>
			</ul>
		</div>
	</div>
</div>
<!-- End Page Title Area -->

<!-- Start Contact Us Area -->
<div class="contact-area pt-100">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12">
				<div class="contact-form">
					<h3>Entre em Contato</h3>
					<form id="contactForm">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6">
								<div class="form-group mb-3">
									<label>Nome</label>
									<input type="text" name="name" class="form-control" id="name" required data-error="Informar o nome">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6">
								<div class="form-group mb-3">
									<label>Email</label>
									<input type="email" name="email" class="form-control" id="email" required data-error="Informar o email">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6">
								<div class="form-group mb-3">
									<label>Telefone</label>
									<input type="text" name="phone_number" class="form-control" id="phone_number" required data-error="Informar o telefone">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6">
								<div class="form-group mb-3">
									<label>Assunto</label>
									<input type="text" name="msg_subject" class="form-control" id="msg_subject" required data-error="Informar o assunto">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="form-group mb-3">
									<label>Mensagem</label>
									<textarea name="message" id="message" class="form-control" cols="30" rows="4" required data-error="Digite a mensagem"></textarea>
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12">
								<div class="form-check mb-3">
									<input type="checkbox" class="form-check-input" id="checkme">
									<label class="form-check-label" for="checkme">
										Aceito os <a href="terms-conditions.html">Termos de Uso</a> e a <a href="privacy-policy.html">Política de Privacidade</a>
									</label>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12">
								<button type="submit" class="default-btn"><span>Enviar Mensagem</span></button>
								<div id="msgSubmit" class="h3 text-center hidden"></div>
								<div class="clearfix"></div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-lg-4 col-md-12">
				<div class="contact-info">
					<h3>Informações de Contato</h3>
					<ul>
						<li><span>Hotline:</span> <a href="tel:12855">12855</a></li>
						<li><span>Tech support:</span> <a href="tel:+1514312-5678">+1 (514) 312-5678</a></li>
						<li><span>Email:</span> <a href="mailto:hello@patoi.com">hello@patoi.com</a></li>
						<li><span>Address:</span> 1523 Cook Hill Road New Haven, CT</li>
						<li><span>Available:</span> Monday - Friday 8:00am - 8:00pm</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="mb-5" id="maps">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46660.669043361966!2d-76.17429939609431!3d43.03529129888566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d9f3b8019f2991%3A0x58d5929e21a62e5!2sDinosaur%20Bar-B-Que!5e0!3m2!1sen!2sbd!4v1593527523138!5m2!1sen!2sbd"></iframe>
		</div>
	</div>
</div>
<!-- End Contact Us Area -->
