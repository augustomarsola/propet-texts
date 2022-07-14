<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- Start Page Title Area -->
<div class="page-title-area" style="background-image: url(assets/img/title-galinhada.jpg);">
	<div class="container">
		<div class="page-title-content">
			<h1><?php echo $title; ?></h1>
			<ul>
				<li class="text-black">Receitas</li>
				<li><?php echo $title; ?></li>
			</ul>
		</div>
	</div>
</div>
<!-- End Page Title Area -->

<!-- Start Products Details Area -->
<div class="products-details-area ptb-100">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-5 col-md-12">
				<div class="products-details-thumbs-image">
					<ul class="products-details-thumbs-image-slides">
						<li><img src="assets/img/products/pd-galinhada-01.png" alt="image"></li>
						<li><img src="assets/img/products/pd-galinhada-02.png" alt="image"></li>
						<li><img src="assets/img/products/pd-galinhada-03.png" alt="image"></li>
					</ul>
					<div class="slick-thumbs">
						<ul>
							<li><img src="assets/img/products/pd-galinhada-01.png" alt="image"></li>
							<li><img src="assets/img/products/pd-galinhada-02.png" alt="image"></li>
							<li><img src="assets/img/products/pd-galinhada-03.png" alt="image"></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-7 col-md-12">
				<div class="products-details-desc">
					<h3><?php echo $title; ?></h3>
					<div class="rating">
						<i class='bx bxs-star'></i>
						<i class='bx bxs-star'></i>
						<i class='bx bxs-star'></i>
						<i class='bx bxs-star'></i>
						<i class='bx bxs-star'></i>
					</div>
					<?php echo prd_info()['gaca-pote-0230']['description']; ?>
					<?php $this->load->view('shared_cart_select'); ?>
					<div class="products-share m-lg-3">
						<ul class="social">
							<li><a href="#" class="facebook" target="_blank"><i class='bx bxl-facebook'></i></a></li>
							<li><a href="#" class="twitter" target="_blank"><i class='bx bxl-twitter'></i></a></li>
							<li><a href="#" class="instagram" target="_blank"><i class='bx bxl-instagram'></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12">
				<div class="products-details-tabs">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
						<li class="nav-item">
							<button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="false">Descrição</button>
						</li>
						<li class="nav-item">
							<button class="nav-link" id="additional-information-tab" data-bs-toggle="tab" data-bs-target="#additional-information" type="button" role="tab" aria-controls="additional-information" aria-selected="false">Informações Adicionais</button>
						</li>
						<li class="nav-item">
							<button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Reviews</button>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="description" role="tabpanel">
							<p>Alimento natural úmido, desenvolvido especialmente para o seu cão adulto. Feito artesanalmente e com uma receita balanceada, que garante a saúde de seu melhor amigo. <strong>Pote Pró Pet</strong> é livre de conservantes, corantes, acidulantes, estabilizantes e sabores artificiais.</p>

							<p><strong>INGREDIENTES:</strong> Água, peito de frango, batata doce, cenoira, arroz parbolizado, fígado de frango, ervilha, abóbora, folha de brócolis, óleao de canola, levedura de cerveja, semente de abóbora, alga nori, farinha de casca de ovo, fosfato bicálcico, sal light, magnésio quelado, ferro quelado, sulfato de zinco, iodo quelado, manganês quelado, cobre quelado, vitamina B1, vitamina B2, niaciamida, panteonato de cálcio, vitamina B6, cloreto de colina, ácido fólico, vitamina B12, vitamina A, vitamina D2, vitamina E.</p>

							<p><strong>MODO DE CONSERVAÇÃO:</strong> Armazenar em local seco, fresco e ao abrigo da luz. Após aberto, conservar refrigerado até 9&#8451; por no máximo 3 dias.</p>

							<div class="row pt-3 border-top">
								<div class="col-lg-5 col-md-12">
									<p><strong>RECOMENDAÇÕES:</strong> Cães não habituados à Alimentação Natural - AN - devem receber até 30% de <strong>Pote Pró Pet</strong> no primeiro dia, até 60% no segundo dia e até 100% a partir do terceiro.</p>
									<p><strong>Pode ser misturado à ração em qualquer proporção, para aumentar o sabor e o apetite.</strong></p>
									<p><strong>SUGESTÃO DIÁRIA:</strong> A quantidade recomendada pode alterar em função da atividade do seu cão. Recomendação baseada numa dieta exclusiva de <strong>Pote Pró Pet</strong>. Divida a quantidade diária em 2 a 3 refeições preferencialmente.</p>
								</div>
								<div class="col-lg-1 col-md-12"></div>
								<div class="col-lg-5 col-md-12">
									<div class="table-responsive">
										<table class="table table-striped">
											<tbody>
											<tr>
												<td><strong>PORTE/PESO</strong></td>
												<td><strong>QUANTIDADE</strong></td>
											</tr>
											<tr>
												<td>Miniatura - Até 5kg</td>
												<td>Até 300g</td>
											</tr>
											<tr>
												<td>Pequeno - 5kg a 10 kg</td>
												<td>200g - 600g</td>
											</tr>
											<tr>
												<td>Médio - 10kg a 25kg</td>
												<td>400g - 1250g</td>
											</tr>
											<tr>
												<td>Grande - 25kg a 35kg</td>
												<td>1000g - 1750g</td>
											</tr>
											<tr>
												<td>Gigante > 35kg</td>
												<td>4% do peso</td>
											</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>

						<div class="tab-pane fade" id="additional-information" role="tabpanel">
							<div class="row">
								<div class="col-lg-5 col-md-12">
									<p><strong>ENRIQUECIDO COM (POR KG):</strong></p>
									<ul class="leaders">
										<li><span>Ácido Fólico</span> <span>150 &micro;g</span></li>
										<li><span>Ácido Pantotênico</span> <span>2mg</span></li>
										<li><span>Cobre Quelado</span> <span>1mg</span></li>
										<li><span>Colina</span> <span>0,37g</span></li>
										<li><span>Ferro Quelado</span> <span>0,02g</span></li>
										<li><span>Iodo Quelado</span> <span>0,55mg</span></li>
										<li><span>Magnésio Quelado</span> <span>0,15g</span></li>
										<li><span>Manganês Quelado</span> <span>2 &micro;g</span></li>
										<li><span>Niacina</span> <span>2mg</span></li>
										<li><span>Potássio</span> <span>0,55g</span></li>
										<li><span>Vitamina A</span> <span>1200 UI</span></li>
										<li><span>Vitamina B1</span> <span>2,9mg</span></li>
										<li><span>Vitamina B2</span> <span>3mg</span></li>
										<li><span>Vitamina B6</span> <span>1mg</span></li>
										<li><span>Vitamina B12</span> <span>12 &micro;g</span></li>
										<li><span>Vitamina D3</span> <span>300 UI</span></li>
										<li><span>Vitamina E</span> <span>50 UI</span></li>
										<li><span>Zinco</span> <span>0,025g</span></li>
									</ul>
								</div>
								<div class="col-lg-1 col-md-12"></div>
								<div class="col-lg-5 col-md-12">
									<p><strong>NÍVEIS GARANTIDOS (POR KG)</strong></p>
									<ul class="leaders">
										<li><span>Umidade (máxima)</span> <span>750g</span></li>
										<li><span>Proteína bruta (mínimo)</span> <span>120g</span></li>
										<li><span>Matéria mineral (máximo)</span> <span>25g</span></li>
										<li><span>Extrato etéreo (mínimo)</span> <span>45g</span></li>
										<li><span>Fibra alimentar (máximo)</span> <span>12g</span></li>
										<li><span>Fósforo (mínimo)</span> <span>2g</span></li>
										<li><span>Cálcio (mínimo)</span> <span>2g</span></li>
										<li><span>Cálcio (máximo)</span> <span>4g</span></li>
									</ul>
									<p class="border-top pt-3"><strong>DADOS DA EMBALAGEM:</strong></p>
									<div class="table-responsive">
										<table class="table table-striped">
											<tbody>
											<tr>
												<td>Peso</td>
												<td>500g</td>
											</tr>
											<tr>
												<td>Dimensões</td>
												<td>10 cm × 10 cm × 10 cm</td>
											</tr>
											<tr>
												<td>Material</td>
												<td>Vidro</td>
											</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="reviews" role="tabpanel">
							<div class="products-review-comments">
								<div class="user-review">
									<img src="assets/img/user/user1.jpg" alt="image">
									<div class="review-rating">
										<div class="review-stars">
											<i class='bx bxs-star checked'></i>
											<i class='bx bxs-star checked'></i>
											<i class='bx bxs-star checked'></i>
											<i class='bx bxs-star checked'></i>
											<i class='bx bxs-star checked'></i>
										</div>
									</div>
									<span class="d-block sub-name">James Anderson</span>
									<p>Very well built theme, couldn't be happier with it. Can't wait for future updates to see what else they add in.</p>
								</div>
								<div class="user-review">
									<img src="assets/img/user/user2.jpg" alt="image">
									<div class="review-rating">
										<div class="review-stars">
											<i class='bx bxs-star checked'></i>
											<i class='bx bxs-star checked'></i>
											<i class='bx bxs-star checked'></i>
											<i class='bx bxs-star'></i>
											<i class='bx bxs-star'></i>
										</div>
									</div>
									<span class="d-block sub-name">Sarah Taylor</span>
									<p>Santiago who travels from his homeland in Spain to the Egyptian desert in search of a treasure buried near the Pyramids. Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut labore et. Lorem ipsum dolor sit amet, consectetur adipiscing elitet.</p>
								</div>
								<div class="user-review">
									<img src="assets/img/user/user3.jpg" alt="image">
									<div class="review-rating">
										<div class="review-stars">
											<i class='bx bxs-star checked'></i>
											<i class='bx bxs-star checked'></i>
											<i class='bx bxs-star checked'></i>
											<i class='bx bxs-star checked'></i>
											<i class='bx bxs-star checked'></i>
										</div>
									</div>
									<span class="d-block sub-name">David Warner</span>
									<p>Stunning design, very dedicated crew who welcome new ideas suggested by customers, nice support.</p>
								</div>
								<div class="user-review">
									<img src="assets/img/user/user4.jpg" alt="image">
									<div class="review-rating">
										<div class="review-stars">
											<i class='bx bxs-star checked'></i>
											<i class='bx bxs-star checked'></i>
											<i class='bx bxs-star checked'></i>
											<i class='bx bxs-star checked'></i>
											<i class='bx bxs-star'></i>
										</div>
									</div>
									<span class="d-block sub-name">King Kong</span>
									<p>Stunning design, very dedicated crew who welcome new ideas suggested by customers, nice support.</p>
								</div>
							</div>
							<div class="review-form-wrapper">
								<h3>Add a review</h3>
								<p class="comment-notes">Your email address will not be published. Required fields are marked <span>*</span></p>
								<form>
									<div class="row">
										<div class="col-lg-12 col-md-12">
											<div class="rating">
												<input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
												<input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
												<input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
												<input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
												<input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Name *">
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="form-group">
												<input type="email" class="form-control" placeholder="Email *">
											</div>
										</div>
										<div class="col-lg-12 col-md-12">
											<div class="form-group">
												<textarea placeholder="Your review" class="form-control" cols="30" rows="6"></textarea>
											</div>
										</div>
										<div class="col-lg-12 col-md-12">
											<p class="comment-form-cookies-consent">
												<input type="checkbox" id="test1">
												<label for="test1">Save my name, email, and website in this browser for the next time I comment.</label>
											</p>
										</div>
										<div class="col-lg-12 col-md-12">
											<button type="submit">SUBMIT</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Products Details Area -->
