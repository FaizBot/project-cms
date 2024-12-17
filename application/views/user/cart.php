<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<h3 class="breadcrumb-header">Cart</h3>
				<ul class="breadcrumb-tree">
					<li><a href="<?= base_url() ?>">Home</a></li>
					<li class="active">Cart</li>
					<li><a href="<?= base_url('user/checkout') ?>">Checkout</a></li>
				</ul>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /BREADCRUMB -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-7">
				<div class="shopping_cart_table">
					<table>
						<thead>
							<tr>
								<th width="40%">Product</th>
								<th width="15%">Quantity</th>
								<th width="10%">Total</th>
								<th width="15%"></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($cart as $c) { ?>
							<tr>
								<td class="product_cart_item">
									<div class="product_cartitem_pic">
										<img src="<?= base_url() ?>/assets/upload/<?= $c['picture'] ?>" width="90px" alt="">
									</div>
									<div class="product_cartitem_text">
										<h6><?= $c['nama']?></h6>
										<h5>Rp<?= number_format($c['harga'], 0, ',', '.') ?></h5>
									</div>
								</td>
								<td class="quantity__item">
									<div class="quantity">
										<div class="pro-qty-2 text-center">
											<h5><?= $c['qty']?></h5>
										</div>
									</div>
								</td>
								<td class="cart__price">Rp<?= number_format($c['sub_total'], 0, ',', '.') ?></td>
								<td class="cart__close">
									<a href="<?= base_url('user/cart/deletecart/'. $c['id_product'] .'/'. $c['id_user']) ?>" class="delete"><i class="fa fa-close"></i></a>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>

			<!-- Order Details -->
			<div class="col-md-5 order-details">
				<div class="section-title text-center">
					<h3 class="title">Your Cart</h3>
				</div>
				<div class="order-summary">
                    <?php
                    $total = 0;
                    foreach($cart as $c) { 
                    $total += $c['sub_total'];    
                    ?>
					<div class="order-products">
						<div class="order-col">
							<div><?= $c['qty']?>x <?= $c['nama']?></div>
							<div>Rp <?= number_format($c['sub_total'], 0, ',', '.') ?></div>
						</div>
					</div>
                    <?php } ?>
					<div class="order-col">
						<div><strong>TOTAL</strong></div>
						<div><strong class="order-total"><?= number_format($total, 0, ',', '.') ?></strong></div>
					</div>
				</div>
				<a href="<?= base_url('user/checkout') ?>" class="primary-btn order-submit">Checkout</a>
			</div>
			<!-- /Order Details -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
