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
<div style="width: 80%;margin-inline: auto;">
	<div class="row" style="display: flex; flex-wrap: wrap;">
	<?php foreach ($product as $item) : ?>
	<div class="col-4 product" style="width: 29%;margin-inline: 20px;">
		<div class="productt-img">
			<img src="<?php echo base_url() ?>assets/upload/<?= $item->picture ?>" class="responsivee-img" alt="">
		</div>
		<div class="product-body">
			<p class="product-category"><?= $item->kategori ?></p>
			<h3 class="product-name"><a href="#"><?= $item->nama ?></a></h3>
			<h4 class="product-price">Rp <?= number_format($item->harga, 0, ',', '.') ?></h4>
		</div>
	</div>
	<?php endforeach; ?>
</div>
</div>

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- store products -->
			<div class="row">
			
				<!-- <div class="clearfix visible-lg visible-md"></div> -->

			</div>
			<!-- /store products -->
		</div>
		<!-- /STORE -->

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
	<!-- /row -->
</div>
<!-- /section -->
