<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<h3 class="breadcrumb-header">Product</h3>
				<?php foreach($product as $p) { ?>
				<ul class="breadcrumb-tree">
					<li><a href="<?= base_url('user/kategori/index/'. $p->kategori) ?>">Back</a></li>
					<li class="active"><?= $p->nama ?></li>
				</ul>
				<?php } ?>
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
			<!-- Product main img -->
			<div class="col-md-5 col-md-push-2">
				<div id="product-main-img">
					<?php foreach ($picproduct as $pic) : ?>
					<div class="product-preview">
						<img src="<?= base_url() ?>assets/upload/<?= $pic->picture ?>" height="400px" width="400px"
							alt="">
					</div>
					<?php endforeach; ?>
				</div>
			</div>
			<!-- /Product main img -->
			<!-- Product thumb imgs -->
			<div class="col-md-2  col-md-pull-5">
				<div id="product-imgs">
					<?php foreach ($picproduct as $pic) : ?>
					<div class="product-preview">
						<img src="<?= base_url() ?>assets/upload/<?= $pic->picture ?>" height="130px" alt="">
					</div>
					<?php endforeach; ?>
				</div>
			</div>

			<!-- /Product thumb imgs -->

			<!-- Product details -->
			<div class="col-md-5">
				<div class="product-details">
					<?php foreach ($product as $prd) : ?>
					<?php
						echo form_open('user/cart/cart');
						echo form_hidden('id', $prd->id_product);
						echo form_hidden('harga', $prd->harga);
						echo form_hidden('nama', $prd->nama);
						echo form_hidden('berat', $prd->berat);
						?>
					<h2 class="product-name" style="padding-top: 20px;"><?= $prd->nama ?></h2>
					<p style="padding-top: 30px;"><?= $prd->keterangan ?></p>
					<div class="product-details" style="margin-top: 20px;">
						<h3 class="product-price" style="margin-top: 10px;">Rp
							<?= number_format($prd->harga, 0, ',', '.') ?></h3>
						<span class="product-available">In Stock <?= $prd->stock ?></span>
					</div>
					<?php endforeach; ?>

					<?php if (isset($_SESSION["id_user"])) : ?>
					<div class="add-to-cart">
						<div class="qty-label">
							Qty
							<div class="input-number">
								<input type="number" name="qty" value="1">
								<span class="qty-up">+</span>
								<span class="qty-down">-</span>
							</div>
						</div>
						<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
					</div>
					<?php endif; ?>
					<?= form_close() ?>
					<ul class="product-links">
						<li>Category:</li>
						<li><a href="#"><?= $prd->kategori ?></a></li>
					</ul>
				</div>
			</div>
			<!-- /Product details -->

			<!-- Product tab -->
			<div class="col-md-12">
				<div id="product-tab">
					<!-- product tab nav -->
					<ul class="tab-nav">
						<li class="active"><a data-toggle="tab" href="#tab1">Specification</a></li>
						<li><a data-toggle="tab" href="#tab2">Description</a></li>
						<li><a data-toggle="tab" href="#tab3">Details</a></li>
					</ul>
					<!-- /product tab nav -->

					<!-- product tab content -->
					<div class="tab-content">
						<?php foreach ($product as $prd) : ?>
						<!-- tab1  -->
						<div id="tab1" class="tab-pane fade in active">
							<div class="row">
								<div class="col-md-12">
									<p><?= nl2br(htmlspecialchars($prd->spesifikasi)) ?></p>
								</div>
							</div>
						</div>
						<!-- /tab1  -->
						<!-- tab2  -->
						<div id="tab2" class="tab-pane fade in">
							<div class="row">
								<div class="col-md-12">
									<p><b><?= $prd->keterangan ?></b></p>
									<p><?= nl2br(htmlspecialchars($prd->deskripsi)) ?></p>
								</div>
							</div>
						</div>
						<!-- /tab2  -->
						<!-- tab1  -->
						<div id="tab3" class="tab-pane fade in">
							<div class="row">
								<div class="col-md-12">
									<p><b>Product Details: </b></p>
									<br>
									<p><?= nl2br(htmlspecialchars($prd->product_detail)) ?></p>
								</div>
							</div>
						</div>
						<!-- /tab1  -->
						<?php endforeach; ?>
					</div>
					<!-- /product tab content  -->
				</div>
			</div>
			<!-- /product tab -->

			<!-- section title -->
			<div class="col-md-12" style="padding-top: 100px;">
				<div class="section-title">
					<h3 class="title">Product Serupa</h3>
				</div>
			</div>
			<!-- /section title -->

			<div class="col-md-12">
				<div class="row">
					<?php foreach($ktrprd as $kp) { ?>
					<!-- product -->
					<div class="col-lg-4 col-md-4 col-sm-12">
						<a href="<?= base_url('user/product/detail/' . $kp->id_product) ?>">
							<div class="product">
								<div class="productt-img">
									<img src="<?php echo base_url() ?>assets/upload/<?= $kp->picture ?>"
										class="responsivee-img" alt="">
								</div>

								<div class="product-body">
									<p class="product-category"><?= $kp->kategori ?></p>
									<h3 class="product-name"><a href="#"><?= $kp->nama ?></a></h3>
									<h4 class="product-price">Rp <?= number_format($kp->harga, 0, ',', '.') ?></h4>
								</div>
							</div>
						</a>
					</div>
					<!-- /product -->
					<?php } ?>
				</div>
			</div>
		</div>
		<!-- row -->
	</div>
	<!-- container -->
</div>
<!-- /SECTION -->
