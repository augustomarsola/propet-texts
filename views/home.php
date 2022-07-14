<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!-- Start Main Banner Area -->
<div class="main-banner-area">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-12">
				<div class="main-banner-content text-center">
					<h1>comida natural de verdade!</h1>
					<img src="assets/img/potes/natural.png" alt="banner-image" width="350">
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="main-banner-image">
					<img src="assets/img/banner/banner4.png" alt="banner-image">
					<img src="assets/img/banner/banner2.png" alt="banner-image">
					<img src="assets/img/banner/banner3.png" alt="banner-image">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Main Banner Area -->

<!-- Start Products Area -->
<div class="products-area pt-75 pb-75">
	<div class="container">
		<div class="section-title">
			<h2>Receitas Especiais</h2>
		</div>
		<div class="row justify-content-center">
			<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
				<div class="single-products-box">
					<div class="image">
						<a href="receitas/galinhada_caipira" class="d-block">
							<img src="assets/img/potes/label-galinhada.png" alt="products-image">
						</a>
						<ul class="products-button">
							<li><a href="javascript:product.modal('gaca-pote-0535');"><i class='bx bx-cart-alt'></i></a></li>
						</ul>
					</div>
					<div class="content">
						<h3 class="text-black"><?php echo prd_info()['gaca-pote-0535']['name']; ?></h3>
						<div class="price">
							<span class="new-price"><?php echo 'R$ ' . number_format(prd_info()['gaca-pote-0535']['price'], 2, ',', '.'); ?></span>
							<span class="old-price"><?php echo 'R$ ' . number_format(prd_info()['gaca-pote-0535']['price'] + 5, 2, ',', '.'); ?></span>
						</div>
						<div class="rating">
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bx-star'></i>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
				<div class="single-products-box">
					<div class="image">
						<a href="receitas/omelete_vegetariano" class="d-block">
							<img src="assets/img/potes/label-omelete.png" alt="products-image">
						</a>
						<ul class="products-button">
							<li><a href="javascript:product.modal('omve-pote-0535');"><i class='bx bx-cart-alt'></i></a></li>
						</ul>
					</div>
					<div class="content">
						<h3 class="text-black"><?php echo prd_info()['omve-pote-0535']['name']; ?></h3>
						<div class="price">
							<span class="new-price"><?php echo 'R$ ' . number_format(prd_info()['omve-pote-0535']['price'], 2, ',', '.'); ?></span>
							<span class="old-price"><?php echo 'R$ ' . number_format(prd_info()['omve-pote-0535']['price'] + 5, 2, ',', '.'); ?></span>
						</div>
						<div class="rating">
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bx-star'></i>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
				<div class="single-products-box">
					<div class="image">
						<a href="receitas/porco_frutas" class="d-block">
							<img src="assets/img/potes/label-porco.png" alt="products-image">
						</a>
						<ul class="products-button">
							<li><a href="javascript:product.modal('pofr-pote-0535');"><i class='bx bx-cart-alt'></i></a></li>
						</ul>
					</div>
					<div class="content">
						<h3 class="text-black"><?php echo prd_info()['pofr-pote-0535']['name']; ?></h3>
						<div class="price">
							<span class="new-price"><?php echo 'R$ ' . number_format(prd_info()['pofr-pote-0535']['price'], 2, ',', '.'); ?></span>
							<span class="old-price"><?php echo 'R$ ' . number_format(prd_info()['pofr-pote-0535']['price'] + 5, 2, ',', '.'); ?></span>
						</div>
						<div class="rating">
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bx-star'></i>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
				<div class="single-products-box">
					<div class="image">
						<a href="receitas/tropeiro_carne" class="d-block">
							<img src="assets/img/potes/label-tropeiro.png" alt="products-image">
						</a>
						<ul class="products-button">
							<li><a href="javascript:product.modal('trca-pote-0535');"><i class='bx bx-cart-alt'></i></a></li>
						</ul>
					</div>
					<div class="content">
						<h3 class="text-black"><?php echo prd_info()['trca-pote-0535']['name']; ?></h3>
						<div class="price">
							<span class="new-price"><?php echo 'R$ ' . number_format(prd_info()['trca-pote-0535']['price'], 2, ',', '.'); ?></span>
							<span class="old-price"><?php echo 'R$ ' . number_format(prd_info()['trca-pote-0535']['price'] + 5, 2, ',', '.'); ?></span>
						</div>
						<div class="rating">
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bxs-star'></i>
							<i class='bx bx-star'></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Products Area -->

<!-- Start Feedback Area -->
<div class="feedback-area pb-100">
	<div class="container">
		<div class="section-title">
			<h2>Pets Amigos da Natureza</h2>
		</div>
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-12">
				<div class="feedback-slides owl-carousel owl-theme">
					<div class="single-feedback-box">
						<p>“Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus suscipit
							tortor eget felis porttitor volutpat. Praesent sapien massa, convallis a pellentesque nec,
							egestas non nisi. Nulla porttitor accumsan tincidunt. Vivamus magna justo, lacinia eget
							consectetur sed convallis at tellus.”</p>
						<div class="client-info">
							<h3>Compostagem</h3>
							<span>Yada Yada Yada</span>
						</div>
					</div>
					<div class="single-feedback-box">
						<p>“Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus suscipit
							tortor eget felis porttitor volutpat. Praesent sapien massa, convallis a pellentesque nec,
							egestas non nisi. Nulla porttitor accumsan tincidunt. Vivamus magna justo, lacinia eget
							consectetur sed convallis at tellus.”</p>
						<div class="client-info">
							<h3>Reciclagem</h3>
							<span>Yada Yada Yada</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 xol-md-12">
				<img src="assets/img/planet.png" alt="eco">
			</div>
		</div>
	</div>
</div>
<!-- End Feedback Area -->

<!-- Start Offer Area -->
<div class="offer-area pb-75">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-6">
				<div class="single-offer-box">
					<a href="#" class="d-block">
						<img src="assets/img/offer/offer2.jpg" alt="offer-image">
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-offer-box">
					<a href="#" class="d-block">
						<img src="assets/img/offer/offer1.jpg" alt="offer-image">
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="single-offer-box">
					<a href="#" class="d-block">
						<img src="assets/img/offer/offer3.jpg" alt="offer-image">
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Offer Area -->

<!-- Start Facility Area -->
<div class="facility-area pb-75">
	<div class="container">
		<div class="facility-inner">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-6">
					<div class="single-facility-box">
						<img src="assets/img/icon/icon1.png" alt="icon">
						<h3 style="color: black">Qualidade</h3>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-6">
					<div class="single-facility-box">
						<img src="assets/img/icon/icon2.png" alt="icon">
						<h3 style="color: black">Entrega Expressa</h3>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-6">
					<div class="single-facility-box">
						<img src="assets/img/icon/icon3.png" alt="icon">
						<h3 style="color: black">Suporte 24/7</h3>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-6">
					<div class="single-facility-box">
						<img src="assets/img/icon/icon4.png" alt="icon">
						<h3 style="color: black">Pagamento Seguro</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Facility Area -->

<!-- Start Brands Area -->
<div class="brands-area pb-75">
	<div class="container">
		<div class="section-title">
			<h2>Onde Encontrar</h2>
		</div>
		<div class="row justify-content-center align-items-center">
			<div class="col-lg-2 col-md-3 col-sm-4 col-4">
				<div class="single-brands-box">
					<a href="#" class="d-block">
						<img src="assets/img/brands/brands1.png" alt="brands">
					</a>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-4">
				<div class="single-brands-box">
					<a href="#" class="d-block">
						<img src="assets/img/brands/brands2.png" alt="brands">
					</a>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-4">
				<div class="single-brands-box">
					<a href="#" class="d-block">
						<img src="assets/img/brands/brands3.png" alt="brands">
					</a>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-4">
				<div class="single-brands-box">
					<a href="#" class="d-block">
						<img src="assets/img/brands/brands4.png" alt="brands">
					</a>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-4">
				<div class="single-brands-box">
					<a href="#" class="d-block">
						<img src="assets/img/brands/brands5.png" alt="brands">
					</a>
				</div>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-4">
				<div class="single-brands-box">
					<a href="#" class="d-block">
						<img src="assets/img/brands/brands6.png" alt="brands">
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Brands Area -->

<!-- Start QuickView Modal -->
<div class="modal fade productsQuickView" id="product-info" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			<div class="modal-body">
				<input type="hidden" class="csrf_token" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>"/>
				<input type="hidden" id="product-id" value=""/>
				<div class="row align-items-center">
					<div class="col-lg-4 col-md-4">
						<div class="image">
							<img id="product-prod" src="" alt="image">
						</div>
					</div>
					<div class="col-lg-8 col-md-8">
						<div class="content">
							<h3 id="product-name"></h3>
							<div class="row">
								<div class="col-8 col-md-6 col-lg-6">
									<div class="price">
										<span class="new-price"></span>
										<span class="old-price"></span>
									</div>
									<div class="rating">
										<i class='bx bxs-star'></i> <i class='bx bxs-star'></i>
										<i class='bx bxs-star'></i> <i class='bx bxs-star'></i>
										<i class='bx bxs-star'></i>
									</div>
								</div>
								<div class="col-4 col-md-6 col-lg-6 text-end">
									<a href="#" class="btn btn-outline-dark" id="product-href"><i class="bx bx-link-alt"></i></a>
								</div>
							</div>
							<div id="product-description"></div>
							<div class="products-add-to-cart">
								<div class="input-counter">
									<span class="minus-btn"><i class='bx bx-minus'></i></span>
									<input type="text" name="amount" value="1" min="1" max="100" pattern="\d*">
									<span class="plus-btn"><i class='bx bx-plus'></i></span>
								</div>
								<button type="button" onclick="cart.insert($('#product-id').val())" class="default-btn"><span>ADICIONAR</span></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End QuickView Modal -->
