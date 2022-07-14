<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!-- Start Page Title Area -->
<div class="page-title-area" style="background-image: url(assets/img/title-cart.jpg);">
	<div class="container">
		<div class="page-title-content">
			<h1>Carrinho de Compras</h1>
			<ul>
				<li><a href="home">Home</a></li>
				<li>Carrinho de Compras</li>
			</ul>
		</div>
	</div>
</div><!-- End Page Title Area -->

<!-- Start Cart Area -->
<div class="cart-area ptb-100">
	<div class="container">
		<form id="cart-form">
			<input type="hidden" class="csrf_token" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>"/>
			<div class="cart-table table-responsive">
				<table class="table table-bordered" id="table-cart">
					<thead>
					<tr>
						<th scope="col"></th>
						<th scope="col">Produto</th>
						<th scope="col">Preço</th>
						<th scope="col">Quantidade</th>
						<th scope="col">Total</th>
					</tr>
					</thead>
					<tbody>

					<?php $i = 1; ?>
					<?php if (count($this->cart->contents()) > 0): ?><?php foreach ($this->cart->contents() as $items): ?>
						<tr>
							<td>
								<?php echo form_hidden('prd_' . $i, $items['rowid']); ?>
								<button type="button"
										class="btn remove"
										onclick="cart.delete_modal('<?php echo $items['rowid']; ?>', this)"
										data-img="<?php echo $items['img']; ?>"
										data-nam="<?php echo $items['name']; ?>"
										data-pri="R$ <?php echo $this->cart->format_number($items['price']); ?>">
									<i class='bx bx-trash'></i>
								</button>
							</td>
							<td class="product-thumbnail">
								<a href="<?php echo $items['url']; ?>">
									<img src="<?php echo $items['img']; ?>" alt="cart-item">
									<?php echo $items['name']; ?>
								</a>
								<?php if ($this->cart->has_options($items['rowid'])): ?>
									<p>
										<?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>
											<strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br/>
										<?php endforeach; ?>
									</p>
								<?php endif; ?>
							</td>
							<td>R$ <?php echo $this->cart->format_number($items['price']); ?></td>
							<td class="product-quantity">
								<div class="input-counter">
									<span class="minus-btn"><i class='bx bx-minus'></i></span>
									<input type="text" name="<?php echo 'amt_' . $i; ?>" value="<?php echo $items['qty']; ?>" min="0" max="100" pattern="\d*">
									<span class="plus-btn"><i class='bx bx-plus'></i></span>
								</div>
							</td>
							<td>R$ <?php echo $this->cart->format_number($items['subtotal']); ?></td>
						</tr>
						<?php $i++; ?><?php endforeach; ?><?php else: ?>
						<tr>
							<td colspan="5" class="text-center">O CARRINHO DE COMPRAS ESTÁ VAZIO</td>
						</tr>
					<?php endif; ?>
					</tbody>
				</table>
			</div>

			<?php if (count($this->cart->contents()) > 0): ?>
				<div class="row pt-3">
					<div class="col-lg-12 col-md-12 col-sm-12 text-end">
						<button type="button" class="default-btn btn-100" onclick="cart.update()">
							<span>ATUALIZAR CARRINHO</span>
						</button>
					</div>
				</div>
				<div class="row cart-buttons pt-3">
					<div class="col-lg-12 col-md-12 col-sm-12 text-end">
						<div class="shopping-coupon-code">
							<input type="text" class="form-control" placeholder="Cupom Promocional" name="coupon" style="text-transform: uppercase">
							<button type="button" onclick="cart.coupon()">Aplicar Cupom</button>
						</div>
					</div>
				</div>

				<div class="cart-totals">
					<ul>
						<li>Subtotal <span>R$ <?php echo $this->cart->format_number($this->cart->total()); ?></span></li>
						<li>Frete <span>R$ 30,00</span></li>
						<li>Total <span>R$ <?php echo $this->cart->format_number($this->cart->total() + 30); ?></span></li>
					</ul>
					<div class="border-top pt-3 text-center">
						<button type="button" class="default-btn btn-100" onclick="cart.checkout()">
							<span>FINALIZAR COMPRA</span>
						</button>
					</div>
				</div>
			<?php endif; ?>

		</form>
	</div>
</div>
<!-- End Cart Area -->

<!-- Start Modal -->
<div class="modal fade productsQuickView" id="product" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			<div class="modal-body">
				<div class="row align-items-center">
					<div class="col-lg-6 col-md-6">
						<div class="image">
							<img id="modal-img" src="" alt="image">
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="content">
							<h3 id="modal-name"></h3>
							<div class="price m-1">
								<div class="new-price" style="font-size: 17px"></div>
							</div>
							<div class="rating">
								<i class='bx bxs-star'></i>
								<i class='bx bxs-star'></i>
								<i class='bx bxs-star'></i>
								<i class='bx bxs-star'></i>
								<i class='bx bxs-star'></i>
							</div>
							<div class="row pt-1">
								<div class="col-lg-12 col-md-12 col-sm-12 text-center">
									Confirma a remoção deste item do carrinho?
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 text-center pt-3">
									<button id="modal-remove" type="button" class="btn btn-danger" onclick="cart.delete(this)"><span>REMOVER</span></button>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 text-center pt-3">
									<button type="button" class="btn btn-outline-success" onclick="$('#product').modal('hide');"><span>CANCELAR</span></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Modal -->
