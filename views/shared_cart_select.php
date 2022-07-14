<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<input type="hidden" class="csrf_token" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>"/>

<div class="patoi-grid-sorting">
	<div class="ordering">
		<select name="product" onchange="product.update_price($(this).val())">
			<?php foreach ($items as $key => $value): ?>
				<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
			<?php endforeach; ?>
		</select>
	</div>
	<div class="price pt-3">
		<div class="old-price"><?php echo $price_old; ?></div>
		<div class="new-price"><?php echo $price_new; ?></div>
	</div>
</div>

<div class="products-add-to-cart">
	<div class="input-counter">
		<span class="minus-btn"><i class='bx bx-minus'></i></span>
		<input type="text" name="amount" value="1" min="1" max="<?php echo $max; ?>" pattern="\d*">
		<span class="plus-btn"><i class='bx bx-plus'></i></span>
	</div>
	<button type="button" onclick="cart.insert()" class="default-btn"><span>ADICIONAR</span></button>
</div>
