<!-- NAVIGATION -->
<nav id="navigation">
	<!-- container -->
	<div class="container">
		<!-- responsive-nav -->
		<div id="responsive-nav">
			<!-- NAV -->
			<ul class="main-nav nav navbar-nav">
				<li class="active">
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
			<!-- shop -->
			<a href="<?=base_url('user/kategori/index/Laptop') ?>" class="cta-btn">
				<div class="col-md-4 col-xs-6">
					<div class="shop">
						<div class="shop-img">
							<img src="<?php echo base_url() ?>assets/user/img/shop01.png" alt="">
						</div>
						<div class="shop-body">
							<h3>Laptop<br>Collection</h3>
						</div>
					</div>
				</div>
			</a>
			<!-- /shop -->

			<!-- shop -->
			<a href="<?=base_url('user/kategori/index/Accessories') ?>" class="cta-btn">
				<div class="col-md-4 col-xs-6">
					<div class="shop">
						<div class="shop-img">
							<img src="<?php echo base_url() ?>assets/user/img/shop03.png" alt="">
						</div>
						<div class="shop-body">
							<h3>Accessories<br>Collection</h3>
						</div>
					</div>
				</div>
			</a>
			<!-- /shop -->

			<!-- shop -->
			<a href="<?=base_url('user/kategori/index/Camera') ?>" class="cta-btn">
				<div class="col-md-4 col-xs-6">
					<div class="shop">
						<div class="shop-img">
							<img src="<?php echo base_url() ?>assets/user/img/shop02.png" alt="">
						</div>
						<div class="shop-body">
							<h3>Cameras<br>Collection</h3>
						</div>
					</div>
				</div>
			</a>
			<!-- /shop -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- HOT DEAL SECTION -->
<div id="hot-deal" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<div class="hot-deal">
					<ul class="hot-deal-countdown">
						<li>
							<div>
								<h3>N</h3>
							</div>
						</li>
						<li>
							<div>
								<h3>O</h3>
							</div>
						</li>
						<li>
							<div>
								<h3>W</h3>
							</div>
						</li>
						<li>
							<div>
								<h3>!!!</h3>
							</div>
						</li>
					</ul>
					<h2 class="text-uppercase">hot deal this week</h2>
					<p>New Collection Up to 50% OFF</p>
					<a class="primary-btn cta-btn" href="<?= base_url('user/home') ?>">Shop now</a>
				</div>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /HOT DEAL SECTION -->
<!-- NEWSLETTER -->
	<!-- row -->
	<div class="row">
		<div class="col-md-12">
			<div class="newsletter">
				<p>Masukan untuk <strong>ELECTRO</strong></p>
				<form action="<?= base_url('user/kritik/simpan') ?>" method="post">
					<input class="input" name="kritik" type="text" placeholder="Masukan Kritik dan Saran">
					<button type="submit" class="newsletter-btn"><i class="fa fa-envelope"></i> Send</button>
				</form>
				<?php foreach($konfigurasi as $k) { ?>
				<ul class="newsletter-follow">
					<li>
						<a href="#"><i class="fa fa-facebook"></i></a>
					</li>
					<li>
						<a href="https://www.instagram.com/<?= $k['instagram'] ?>/profilecard/?igsh=MXd1a3FsYTU4aDFmaA=="><i class="fa fa-instagram"></i></a>
					</li>
					<li>
						<a href="wa.me/<?= $k['no_wa'] ?>"><i class="fa fa-whatsapp"></i></a>
					</li>
				</ul>
				<?php } ?>
			</div>
		</div>
	</div>
	<!-- /row -->
<!-- /NEWSLETTER -->
