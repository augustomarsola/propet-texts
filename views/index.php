<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!doctype html>
<html lang="pt-br">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<base href="<?php echo base_url(); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pote Pró Pet - Comida de Verdade</title>

	<!-- Icon Tags -->
	<link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="assets/img/icon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="assets/img/icon/favicon-16x16.png">
	<link rel="manifest" href="assets/img/icon/site.webmanifest">

	<!-- Link of CSS files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css?v=<?php echo SRC_VER; ?>">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css?v=<?php echo SRC_VER; ?>">
	<link rel="stylesheet" href="assets/css/owl.theme.default.min.css?v=<?php echo SRC_VER; ?>">
	<link rel="stylesheet" href="assets/css/magnific-popup.min.css?v=<?php echo SRC_VER; ?>">
	<link rel="stylesheet" href="assets/css/animate.min.css?v=<?php echo SRC_VER; ?>">
	<link rel="stylesheet" href="assets/css/rangeSlider.min.css?v=<?php echo SRC_VER; ?>">
	<link rel="stylesheet" href="assets/css/odometer.min.css?v=<?php echo SRC_VER; ?>">
	<link rel="stylesheet" href="assets/css/boxicons.min.css?v=<?php echo SRC_VER; ?>">
	<link rel="stylesheet" href="assets/css/slick.min.css?v=<?php echo SRC_VER; ?>">
	<link rel="stylesheet" href="assets/css/countrySelect.min.css?v=<?php echo SRC_VER; ?>">
	<link rel="stylesheet" href="assets/css/meanmenu.min.css?v=<?php echo SRC_VER; ?>">
	<link rel="stylesheet" href="assets/css/style.css?v=<?php echo SRC_VER; ?>">
	<link rel="stylesheet" href="assets/css/responsive.css?v=<?php echo SRC_VER; ?>">
	<!-- App CSS files -->
	<?php
	if (isset($asset_css)) {
		foreach ($asset_css as $file) {
			echo '<link rel="stylesheet" href="' . $file . (SRC_MIN ? '.min' : '') . '.css?v=' . SRC_VER . '">' . "\n";
		}
	}
	?>
</head>
<body>

<!-- Start Top Header Area -->
<div class="top-header-area">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<p><i class="bx bx-gift"></i> DESCONTO DE 10% NA PRIMEIRA COMPRA!</p>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<ul>
					<li><a href="<?php echo SOCIAL_FB; ?>" target="_blank"><i class='bx bxl-facebook'></i></a></li>
					<li><a href="<?php echo SOCIAL_IG; ?>" target="_blank"><i class='bx bxl-instagram'></i></a></li>
					<li><a href="<?php echo SOCIAL_WA; ?>" target="_blank"><i class='bx bxl-whatsapp'></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- End Top Header Area -->

<!-- Start Navbar Area -->
<div class="navbar-area">
	<div class="patoi-nav">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-md navbar-light">
				<a class="navbar-brand" href="home"><img src="assets/img/logo.png" alt="logo"></a>
				<div class="collapse navbar-collapse mean-menu">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a href="javascript:void(0)" class="dropdown-toggle nav-link <?php anchor_focus(1, 'receitas'); ?>">RECEITAS</a>
							<ul class="dropdown-menu">
								<li class="nav-item"><a href="receitas/galinhada_caipira" class="nav-link <?php anchor_focus(2, 'galinhada_caipira'); ?>">GALINHADA CAIPIRA</a></li>
								<li class="nav-item"><a href="receitas/omelete_vegetariano" class="nav-link <?php anchor_focus(2, 'omelete_vegetariano'); ?>">OMELETE VEGETARIANO</a></li>
								<li class="nav-item"><a href="receitas/porco_frutas" class="nav-link <?php anchor_focus(2, 'porco_frutas'); ?>">PORCO COM FRUTAS</a></li>
								<li class="nav-item"><a href="receitas/tropeiro_carne" class="nav-link <?php anchor_focus(2, 'tropeiro_carne'); ?>">TROPEIRO COM CARNE</a></li>
								<li class="nav-item"><a href="receitas/personalizado" class="nav-link" <?php anchor_focus(2, 'personalizado'); ?>>+ RECEITAS PERSONALIZADAS</a></li>
							</ul>
						</li>
						<li class="nav-item"><a href="reciclagem" class="nav-link <?php anchor_focus(1, 'reciclagem'); ?>">RECICLAGEM</a></li>
						<li class="nav-item"><a href="origem" class="nav-link <?php anchor_focus(1, 'origem'); ?>">ORIGEM</a></li>
						<li class="nav-item"><a href="contato" class="nav-link <?php anchor_focus(1, 'contato'); ?>">CONTATO</a></li>
					</ul>
				</div>
				<div class="others-option">
					<ul>
						<li><a href="login"><i class="bx bx-user-circle"></i></a></li>
						<li>
							<?php if (count($this->cart->contents()) > 0): ?>
								<a href="cart" style="color:var(--primaryColor)">
									<i class="bx bx-cart"></i><span class="badge shopping-cart"><?php echo $this->cart->total_items(); ?></span>
								</a>
							<?php else: ?>
								<a href="cart">
									<i class="bx bx-cart"></i><span class="badge shopping-cart" style="display:none"></span>
								</a>
							<?php endif; ?>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<div class="patoi-responsive-nav">
		<div class="container">
			<div class="patoi-responsive-menu">
				<div class="logo">
					<a href="home"><img src="assets/img/logo.png" alt="logo"></a>
				</div>
				<div class="icon-menu">
					<ul>
						<li><a href="login"><i class="bx bx-user-circle"></i></a></li>
						<li>
							<?php if (count($this->cart->contents()) > 0): ?>
								<a href="cart" style="color:var(--primaryColor)">
									<i class="bx bx-cart"></i><span class="badge shopping-cart"><?php echo $this->cart->total_items(); ?></span>
								</a>
							<?php else: ?>
								<a href="cart">
									<i class="bx bx-cart"></i><span class="badge shopping-cart" style="display:none"></span>
								</a>
							<?php endif; ?>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Navbar Area -->

<!-- Start Content Area -->
<?php $this->load->view($content); ?>
<!-- End Content Area -->

<!-- Start Footer Area -->
<footer class="footer-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<div class="pb-3"><img src="assets/img/logo-branco.png" alt="logo" width="200"></div>
					<ul class="footer-contact-info">
						<li><span>Whatsapp:</span> (11) 99939-1999</li>
						<li><span>Email:</span> <a href="mailto:contato@potepropet.com.br">contato@potepropet.com.br</a>
						</li>
						<li><span>CNPJ:</span> 26.104.481/0001-79</li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-footer-widget pl-4">
					<h3>Serviço</h3>
					<ul class="custom-links">
						<li><a href="#">Minha Conta</a></li>
						<li><a href="perguntas_frequentes">Perguntas Frequentes</a></li>
						<li><a href="#">Histórico de Compras</a></li>
						<li><a href="#">Informações de Entrega</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<h3>Informação</h3>
					<ul class="custom-links">
						<li><a href="politica_compra">Política de Compra</a></li>
						<li><a href="#">Política de Cookies</a></li>
						<li><a href="#">Política de Privacidade</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<img src="assets/img/agricultura-white.png" width="175"/>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright-area">
		<div class="container">
			<p>Copyright ©<?php echo date('Y'); ?> <span> - Pote Pró Pet</span></p>
		</div>
	</div>
</footer>
<!-- End Footer Area -->

<div class="go-top"><i class='bx bx-upvote'></i></div>

<?php if (isset($whatsapp)): ?>
	<!-- Start Whatsapp Floating Button --><a href="<?php echo SOCIAL_WA; ?>" class="float" target="_blank">
		<i class='bx bxl-whatsapp my-float'></i> </a><!-- End Whatsapp Floating Button -->
<?php endif; ?>

<!-- JS files -->
<script src="assets/js/jquery.min.js?v=<?php echo SRC_VER; ?>"></script>
<script src="assets/js/bootstrap.bundle.min.js?v=<?php echo SRC_VER; ?>"></script>
<script src="assets/js/magnific-popup.min.js?v=<?php echo SRC_VER; ?>"></script>
<script src="assets/js/meanmenu.min.js?v=<?php echo SRC_VER; ?>"></script>
<script src="assets/js/appear.min.js?v=<?php echo SRC_VER; ?>"></script>
<script src="assets/js/countrySelect.min.js?v=<?php echo SRC_VER; ?>"></script>
<script src="assets/js/odometer.min.js?v=<?php echo SRC_VER; ?>"></script>
<script src="assets/js/loopcounter.js?v=<?php echo SRC_VER; ?>"></script>
<script src="assets/js/owl.carousel.min.js?v=<?php echo SRC_VER; ?>"></script>
<script src="assets/js/rangeSlider.min.js?v=<?php echo SRC_VER; ?>"></script>
<script src="assets/js/slick.min.js?v=<?php echo SRC_VER; ?>"></script>
<script src="assets/js/form-validator.min.js?v=<?php echo SRC_VER; ?>"></script>
<script src="assets/js/contact-form-script.js?v=<?php echo SRC_VER; ?>"></script>
<script src="assets/js/ajaxchimp.min.js?v=<?php echo SRC_VER; ?>"></script>
<script src="assets/js/main<?php echo(SRC_MIN ? '.min' : ''); ?>.js?v=<?php echo SRC_VER; ?>"></script>

<!-- App JS files -->
<?php
if (isset($asset_js)) {
	foreach ($asset_js as $file) {
		echo '<script src="' . $file . (SRC_MIN ? '.min' : '') . '.js?v=' . SRC_VER . '"></script>' . "\n";
	}
}
?>

</body>
</html>
