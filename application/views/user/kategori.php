<!-- NAVIGATION -->
<nav id="navigation">
	<!-- container -->
	<div class="container">
		<!-- responsive-nav -->
		<div id="responsive-nav">
			<!-- NAV -->
			<ul class="main-nav nav navbar-nav">
				<li class="">
					<a href="<?= base_url()?>">Home</a>
				</li>
				<?php
					$current_category = $this->uri->segment(4);
				?>
				<li class="<?= (isset($all) && $all == 'home') ? 'active' : '' ?>"></li>
				<li <?php $all = $this->uri->segment(2); ?>
					class="<?= (isset($all) && $all == 'home') ? 'active' : '' ?>">
					<a href="<?= base_url('user/home') ?>">All</a>
				</li>
				<?php foreach($kategori as $ktr) { ?>
				<li
					class="<?= (isset($current_category) && $current_category == $ktr['nama_kategori']) ? 'active' : '' ?>">
					<a
						href="<?= base_url('user/kategori/index/'.$ktr['nama_kategori']) ?>"><?= $ktr['nama_kategori'] ?></a>
				</li>
				<?php } ?>
			</ul>
			<!-- /NAV -->
		</div>
		<!-- /responsive-nav -->
	</div>
	<!-- /container -->
</nav>
<!-- /NAVIGATION -->


<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- store products -->
			<div class="row">
				<?php foreach ($select as $slct) : ?>
				<!-- product -->
				<div class="col-md-4 col-xs-6">
				<a href="<?= base_url('user/product/detail/' . $slct->id_product) ?>">
						<div class="product">
							<div class="productt-img">
								<img src="<?php echo base_url() ?>assets/upload/<?= $slct->picture ?>"
									class="responsivee-img" alt="">
							</div>

							<div class="product-body">
								<p class="product-category"><?= $slct->kategori ?></p>
								<h3 class="product-name"><a href="#"><?= $slct->nama ?></a></h3>
								<h4 class="product-price">Rp <?= number_format($slct->harga, 0, ',', '.') ?></h4>
							</div>
						</div>
					</a>
				</div>
				<!-- /product -->
				<?php endforeach; ?>

				<div class="clearfix visible-lg visible-md"></div>

			</div>
			<!-- /store products -->

			<!-- store bottom filter -->
			<div class="store-filter clearfix">
				<ul class="store-pagination">
					<li class="page-item active" onclick="goToPage(1)">1</li>
					<li class="page-item" onclick="goToPage(2)">2</li>
					<li class="page-item" onclick="goToPage(3)">3</li>
					<li class="page-item" onclick="goToPage(4)">4</li>
					<li class="page-item" onclick="changePage(1)">
						<a href="#"><i class="fa fa-angle-right"></i></a>
					</li>
				</ul>
			</div>
			<div id="products"></div>
			<!-- /store bottom filter -->

		</div>
		<!-- /STORE -->
	</div>
	<!-- /row -->
</div>
