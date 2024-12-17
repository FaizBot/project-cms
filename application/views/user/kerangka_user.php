<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Electro - HTML Ecommerce Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Font Awesome -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="<?= base_url('assets/user/') ?>css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="<?= base_url('assets/user/') ?>css/slick.css" />
	<link type="text/css" rel="stylesheet" href="<?= base_url('assets/user/') ?>css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="<?= base_url('assets/user/') ?>css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="<?= base_url('assets/user/') ?>css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?= base_url('assets/user/') ?>css/style.css" />

	<!-- Sweet Alert -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>sweetalert2/sweetalert2.min.css" />

	<style>
		/* From Uiverse.io by andrew-demchenk0 */ 
		.info {
		font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
		width: 650px;
		padding: 12px;
		display: flex;
		flex-direction: row;
		align-items: center;
		justify-content: start;
		background: #f8d7da;
		border-radius: 8px;
		box-shadow: 0px 0px 5px -3px #111;
		}

		.info__icon {
		width: 20px;
		height: 20px;
		transform: translateY(-2px);
		margin-right: 8px;
		}

		.info__icon path {
		fill: #721c24;
		}

		.info__title {
		font-weight: 500;
		font-size: 14px;
		color: #721c24;
		}
		.productt-img {
			width: 100%; /* Memastikan kontainer gambar memanfaatkan lebar penuh */
			height: 230px; /* Tinggi tetap */
			overflow: hidden; /* Memastikan gambar tidak keluar dari kontainer */
			display: flex;
			justify-content: center;
			align-items: center;
			background: #f9f9f9; /* Opsional: warna latar belakang jika gambar tidak ada */
			
		}
		
		.responsivee-img {
			width: 100%;
			height: 100%;
			object-fit: cover; /* Menjaga proporsi gambar */
			object-position: center; /* Menempatkan gambar di tengah */
			
		}

		#ttop-header {
			margin-bottom: -10px;
			padding-top: 5px;
			padding-bottom: 5px;
			background-color: #1E1F29;
		}

		#marquee {
			display: inline-block;
			white-space: nowrap;
			overflow: hidden;
			animation: scroll 10s linear infinite;
			font-size: 14px;
			color: #F8FAFC;
		}

		@keyframes scroll {
			0% { transform: translateX(290%); }
			100% { transform: translateX(-150%); }
		}

		/* From Uiverse.io by Na3ar-17 */ 
		.cardd {
		width: 200px;
		/* background-color: rgba(36, 40, 50, 1);
		background-image: linear-gradient(135deg, rgba(36, 40, 50, 1) 0%, rgba(36, 40, 50, 1) 40%, rgba(37, 28, 40, 1) 100%); */

		background-color: rgba(36, 40, 50, 1);
		background-image: linear-gradient(
			139deg,
			rgba(36, 40, 50, 1) 0%,
			rgba(36, 40, 50, 1) 0%,
			rgba(37, 28, 40, 1) 100%
		);

		border-radius: 10px;
		padding: 15px 0px;
		display: flex;
		flex-direction: column;
		gap: 10px;
		}

		.cardd .separator {
		border-top: 1.5px solid #42434a;
		}

		.cardd .list {
		list-style-type: none;
		display: flex;
		flex-direction: column;
		gap: 8px;
		padding: 0px 10px;
		}

		.cardd .list .element {
		display: flex;
		align-items: center;
		color: #7e8590;
		gap: 10px;
		transition: all 0.3s ease-out;
		padding: 4px 7px;
		border-radius: 6px;
		cursor: pointer;
		}

		.cardd .list .element svg {
		width: 19px;
		height: 19px;
		transition: all 0.3s ease-out;
		}

		.cardd .list .element .label {
		font-weight: 600;
		}

		.cardd .list .element:hover {
		background-color: #5353ff;
		color: #ffffff;
		transform: translate(1px, -1px);
		}
		.cardd .list .delete:hover {
		background-color: #8e2a2a;
		}

		.cardd .list .element:active {
		transform: scale(0.99);
		}

		.cardd .list:not(:last-child) .element:hover svg {
		stroke: #ffffff;
		}

		.cardd .list:last-child svg {
		stroke: #bd89ff;
		}
		.cardd .list:last-child .element {
		color: #bd89ff;
		}

		.cardd .list:last-child .element:hover {
		background-color: rgba(56, 45, 71, 0.836);
		}


	</style>
</head>

<body>
	<!-- HEADER -->
	<header>
		<?php if (isset($_SESSION["id_user"])) : ?>
		<!-- TOP HEADER -->
		<div id="ttop-header">
			<div class="container">
				<?php foreach($user as $usr) { ?>
				<p id="marquee">Selamat Datang di Website Electro, Selamat Berbelanja <?= $usr['nama']; ?>!</p>
				<?php } ?>
			</div>
		</div>
		<!-- /TOP HEADER -->
		<?php endif; ?>

		<?php if (!isset($_SESSION["id_user"])) : ?>
		<!-- TOP HEADER -->
		<div id="ttop-header">
			<div class="container">
				<a href="<?= base_url('admin/auth') ?>"><p id="marquee">Silahkan Login Terlebih Dahulu !!</p></a>
			</div>
		</div>
		<!-- /TOP HEADER -->
		<?php endif; ?>

		<!-- MAIN HEADER -->
		<div id="header">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- LOGO -->
					<div class="col-md-3">
						<div class="header-logo">
							<a href="#" class="logo">
								<img src="<?= base_url('assets/user/') ?>img/logo.png" alt="">
							</a>
						</div>
					</div>
					<!-- /LOGO -->

					<!-- SEARCH BAR -->
					<div class="col-md-6">
						<div class="header-search">
							<form id="search-form">
								<select class="input-select" name="category" id="category">
									<option value="0">All Categories</option>
									<?php foreach ($kategori as $ktr) { ?>
									<option value="<?= $ktr['nama_kategori'] ?>"><?= $ktr['nama_kategori'] ?></option>
									<?php } ?>
								</select>
								<input class="input" type="text" id="query" placeholder="Search here" required>
								<button class="search-btn" type="submit">Search</button>
							</form>
						</div>
					</div>
					<!-- /SEARCH BAR -->


					<?php if (isset($_SESSION["id_user"])) : ?>
					<!-- ACCOUNT -->
					<div class="col-md-3 clearfix">
						<div class="header-ctn">
							<?php if (isset($cart)) : ?>
							<!-- Cart -->
							<div class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
									<i class="fa fa-shopping-cart"></i>
									<span>Your Cart</span>
									<div class="qty"><?= count($cart) ?></div>
								</a>
								<div class="cart-dropdown">
									<div class="cart-list">
										<?php
											$total = 0;
											foreach($cart as $c) {
											$total += $c['sub_total']; // Menambahkan setiap sub_total ke variabel $total
										?>
										<div class="product-widget">
											<div class="product-img">
												<img src="<?= base_url() ?>/assets/upload/<?= $c['picture'] ?>" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="<?= base_url('user/product/detail/'.$c['id_product']) ?>"><?= $c['nama'] ?></a></h3>
												<h4 class="product-price"><span class="qty">Rp
														<?= number_format($c['harga'], 0, ',', '.') ?></span><span
														class="qty"> <?= $c['qty'] ?>x</span>Rp<?= number_format($c['sub_total'], 0, ',', '.') ?></h4>
											</div>
											<form action="<?= base_url('user/cart/deletecart/') ?>" method="post">
												<input type="hidden" name="id_user" value="<?= $c['id_user'] ?>">
												<input type="hidden" name="id_product" value="<?= $c['id_product'] ?>">
												<button type="submit" class="delete"><i class="fa fa-close"></i></button>
											</form>
										</div>
										<?php } ?>
									</div>
									<div class="cart-summary">
										<small><?= count($cart) ?> Item(s) selected</small>
										<h5>SUBTOTAL: Rp <?= number_format($total, 0, ',', '.') ?></h5>
									</div>
									<div class="cart-btns">
										<a href="<?= base_url('user/cart') ?>">View Cart</a>
										<a href="<?= base_url('user/checkout') ?>">Checkout <i class="fa fa-arrow-circle-right"></i></a>
									</div>
								</div>
							</div>
							<!-- /Cart -->
							<!-- Account Dropdown -->
							<div class="dropdown">
								<a class="dropdown-toggle d-flex align-items-center" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="fa fa-user-circle"></i>
									<span class="ml-2">Your Account</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink" style="background-color: rgba(36, 40, 50, 1);">
									<div class="cardd">
									<ul class="list">
										<li class="element">
										<svg
											xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
											stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-user">
										<rect width="18" height="18" x="3" y="3" rx="2"/><circle cx="12" cy="10" r="3"/>
										<path d="M7 21v-2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2"/></svg>
										<a href="<?= base_url('user/user') ?>"><p class="label">My Account</p></a>
										</li>
										<li class="element">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
										stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chart-line">
										<path d="M3 3v16a2 2 0 0 0 2 2h16"/><path d="m19 9-5 5-4-4-3 3"/>
										</svg>
										<a href="<?= base_url('user/order/index/'.$this->session->userdata('id_user')) ?>"><p class="label">Track My Order</p></a>
										</li>
									</ul>
									<div class="separator"></div>
									<ul class="list">
										<li class="element">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
										stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-out">
										<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><polyline points="16 17 21 12 16 7"/><line x1="21" x2="9" y1="12" y2="12"/></svg>
										<a href="<?= base_url('admin/auth/logout') ?>"><p class="label">Log Out</p></a>
										</li>
									</ul>
								</div>
							</div>
							<!-- Account -->
							<?php endif; ?>

							<?php if (!isset($cart)) : ?>
							<!-- Cart -->
							<div class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
									<i class="fa fa-shopping-cart"></i>
									<span>Your Cart</span>
									<div class="qty">3</div>
								</a>
								<div class="cart-dropdown">
									<div class="cart-list">
										<div class="product-widget">
											<div class="product-img">
												<img src="./img/product01.png" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#">tidak</a></h3>
												<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
											</div>
											<button class="delete"><i class="fa fa-close"></i></button>
										</div>
									</div>
									<div class="cart-summary">
										<small>3 Item(s) selected</small>
										<h5>SUBTOTAL: $2940.00</h5>
									</div>
									<div class="cart-btns">
										<a href="#">View Cart</a>
										<a href="#">Checkout <i class="fa fa-arrow-circle-right"></i></a>
									</div>
								</div>
							</div>
							<!-- /Cart -->
							<?php endif; ?>

							<!-- Menu Toogle -->
							<div class="menu-toggle">
								<a href="#">
									<i class="fa fa-bars"></i>
									<span>Menu</span>
								</a>
							</div>
							<!-- /Menu Toogle -->
						</div>
					</div>
					<!-- /ACCOUNT -->
					<?php endif; ?>
					<?php if(!isset($_SESSION["id_user"])) : ?>
						<div class="col-md-3 clearfix">
							<a href="<?= base_url('admin/auth') ?>">
								<div class="header-ctn">
									<div class="dropdown">
										<a class="dropdown-toggle d-flex align-items-center" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fa fa-user-circle"></i>
											<a href="<?= base_url('admin/auth') ?>"><span class="ml-2">Your Account</span></a>
										</a>
									</div>
								</div>
							</a>
						</div>
					<?php endif; ?>
				</div>
				<!-- row -->
			</div>
			<!-- container -->
		</div>
		<!-- /MAIN HEADER -->
	</header>
	<!-- /HEADER -->
								
	<div id="search-results">
		<!-- Results will be displayed here -->
		<?= $contents; ?>
	</div>
	
	<div id="newsletter" class="section">
	<!-- container -->
	<div class="container">
		
	</div>
	<!-- /container -->
</div>
<!-- /NEWSLETTER -->

	<!-- FOOTER -->
	<footer id="footer">
		<!-- top footer -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-6 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">About Us</h3>
							<?php foreach($konfigurasi as $konfig) { ?>
							<p><?= $konfig['profil_website'] ?></p>
							<ul class="footer-links">
								<li><a href="#"><i class="fa fa-map-marker"></i><?= $konfig['alamat'] ?></a></li>
								<li><a href="#"><i class="fa fa-phone"></i><?= $konfig['no_wa'] ?></a></li>
								<li><a href="#"><i class="fa fa-envelope-o"></i><?= $konfig['email'] ?></a></li>
							</ul>
							<?php } ?>
						</div>
					</div>

					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">Categories</h3>
							<ul class="footer-links">
								<?php
									$current_category = $this->uri->segment(4);
								?>
								<?php foreach($kategori as $ktr) { ?>
								<li
									class="<?= (isset($current_category) && $current_category == $ktr['nama_kategori']) ? 'active' : '' ?>">
									<a
										href="<?= base_url('user/kategori/index/'.$ktr['nama_kategori']) ?>"><?= $ktr['nama_kategori'] ?></a>
								</li>
								<?php } ?>
							</ul>
						</div>
					</div>

					<div class="clearfix visible-xs"></div>

					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">Service</h3>
							<?php foreach($user as $usr) { ?>
							<ul class="footer-links">
								<li><a href="<?= base_url('user/user') ?>">My Account</a></li>
								<li><a href="<?= base_url('user/order/index/'.$usr['id_user']) ?>">Track My Order</a></li>
								<li><a href="<?= base_url('user/cart') ?>">View Cart</a></li>
							</ul>
							<?php } ?>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /top footer -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<script src="<?= base_url('assets/user/') ?>js/jquery.min.js"></script>
	<script src="<?= base_url('assets/user/') ?>js/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/user/') ?>js/slick.min.js"></script>
	<script src="<?= base_url('assets/user/') ?>js/nouislider.min.js"></script>
	<script src="<?= base_url('assets/user/') ?>js/jquery.zoom.min.js"></script>
	<script src="<?= base_url('assets/user/') ?>js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		const totalProducts = 100; // Jumlah total produk
		const productsPerPage = 20; // Produk per halaman
		const totalPages = Math.ceil(totalProducts / productsPerPage);
		let currentPage = 1;

		function renderProducts() {
			const start = (currentPage - 1) * productsPerPage + 1;
			const end = Math.min(currentPage * productsPerPage, totalProducts);

			const productContainer = document.getElementById("products");
			productContainer.innerHTML = `<p>Showing products ${start} to ${end} of ${totalProducts}</p>`;
		}

		function updatePagination() {
			const paginationItems = document.querySelectorAll(".store-pagination .page-item");
			paginationItems.forEach((item, index) => {
				item.classList.remove("active");
				if (index + 1 === currentPage) {
					item.classList.add("active");
				}
			});

			const nextButton = document.querySelector(".store-pagination li:last-child");
			nextButton.classList.toggle("disabled", currentPage === totalPages);
		}

		function goToPage(page) {
			if (page < 1 || page > totalPages) return;
			currentPage = page;
			renderProducts();
			updatePagination();
		}

		function changePage(direction) {
			goToPage(currentPage + direction);
		}

		// Initialize
		renderProducts();
		updatePagination();


	</script>
	<script>
    document.addEventListener('DOMContentLoaded', () => {
        const tabs = document.querySelectorAll('.tab-nav li a');
        const tabContent = document.querySelectorAll('.tab-pane');

        tabs.forEach(tab => {
            tab.addEventListener('click', event => {
                event.preventDefault();

                // Hapus kelas 'active' dari semua tab dan konten
                tabs.forEach(tab => tab.parentElement.classList.remove('active'));
                tabContent.forEach(content => content.classList.remove('active'));

                // Tambahkan kelas 'active' pada tab yang diklik dan konten terkait
                const target = document.querySelector(tab.getAttribute('href'));
                tab.parentElement.classList.add('active');
                target.classList.add('active');
            });
        });
    });
	</script>

	<script>
		document.addEventListener('DOMContentLoaded', () => {
			function confirmDeleteUsr(id) {
				Swal.fire({
					title: 'Are you sure?',
					text: "You won't be able to revert this!",
					icon: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Yes, delete it!'
				}).then((result) => {
					if (result.isConfirmed) {
						window.location.href = '<?= base_url('admin/user/hapus/'); ?>' + id;
					}
				});
			}
			window.confirmDeleteUsr = confirmDeleteUsr; // Make sure it's globally accessible.

			function confirmDeleteKtr(id) {
				Swal.fire({
					title: 'Are you sure?',
					text: "You won't be able to revert this!",
					icon: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Yes, delete it!'
				}).then((result) => {
					if (result.isConfirmed) {
						window.location.href = '<?= base_url('admin/kategori/hapus/'); ?>' + id;
					}
				});
			}
			window.confirmDeleteKtr = confirmDeleteKtr; // Make sure it's globally accessible.

			function confirmDeletePrd(id) {
				Swal.fire({
					title: 'Are you sure?',
					text: "You won't be able to revert this!",
					icon: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Yes, delete it!'
				}).then((result) => {
					if (result.isConfirmed) {
						window.location.href = '<?= base_url('admin/product/hapus/'); ?>' + id;
					}
				});
			}
			window.confirmDeletePrd = confirmDeletePrd; // Make sure it's globally accessible.

			function confirmDeletePic(id) {
				Swal.fire({
					title: 'Are you sure?',
					text: "You won't be able to revert this!",
					icon: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'Yes, delete it!'
				}).then((result) => {
					if (result.isConfirmed) {
						window.location.href = '<?= base_url('admin/picproduct/hapus/'); ?>' + id;
					}
				});
			}
			window.confirmDeletePic = confirmDeletePic; // Make sure it's globally accessible.
		});
	</script>

	<script>
		<?php if($this->session->flashdata('success')): ?>
			Swal.fire({
				title: "Berhasil",
				text: "<?= $this->session->flashdata('success'); ?>",
				icon: "success"
			});

		<?php elseif($this->session->flashdata('error')): ?>
			Swal.fire({
				title: "Gagal!",
				text: "<?= $this->session->flashdata('error'); ?>",
				icon:"error"
			});
		<?php endif; ?>
	</script>

	<script>
		document.getElementById('search-form').addEventListener('submit', function (e) {
			e.preventDefault();

			const category = document.getElementById('category').value;
			const query = document.getElementById('query').value;

			fetch('<?= base_url("user/home/ajax_search_html") ?>', {
				method: 'POST',
				headers: {
					'Content-Type': 'application/json',
					'X-Requested-With': 'XMLHttpRequest'
				},
				body: JSON.stringify({ category, query })
			})
			.then(response => response.text())
			.then(html => {
				document.getElementById('search-results').innerHTML = html;
			})
			.catch(error => console.error('Error:', error));
		});
	</script>

</body>

</html>
