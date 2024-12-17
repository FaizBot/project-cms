<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SeoDash Free Bootstrap Admin Template by Adminmart</title>
	<link rel="shortcut icon" type="image/png"
		href="<?= base_url('assets/admin/src') ?>/assets/images/logos/seodashlogo.png" />
	<link rel="stylesheet" href="<?= base_url('assets/admin/src') ?>/assets/css/styles.min.css" />
	<link rel="stylesheet" href="<?= base_url('assets/') ?>sweetalert2/sweetalert2.min.css" />
	<style>
		textarea {
			height: 150px; /* Atur tinggi tetap */
			resize: none; /* Nonaktifkan pengubahan ukuran */
			overflow-y: auto; /* Tambahkan scroll jika teks melebihi area */
		}

		.badges {
		padding: 5px 10px;
		border-radius: 5px;
		color: white;
		font-weight: bold;
		text-align: center;
		}

		.bg-red {
			background-color: #f44336;
			/* Red for 'Pesanan Masuk' */
		}

		.bg-blue {
			background-color: #2196f3;
			/* Blue for 'Pesanan Dikonfirmasi' */
		}

		.bg-yellow {
			background-color: #ffeb3b;
			/* Yellow for 'Pesanan Dikemas' */
		}

		.bg-orange {
			background-color: #ff9800;
			/* Orange for 'Pesanan Dikirim' */
		}

		.bg-purple {
			background-color: #9c27b0;
			/* Purple for 'Pesanan Dalam Perjalanan' */
		}

		.bg-darkgreen {
			background-color: #388e3c;
			/* Dark green for 'Pesanan Selesai' */
		}
	</style>
</head>

<body>
	<!--  Body Wrapper -->
	<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
		data-sidebar-position="fixed" data-header-position="fixed">
		<!-- Sidebar Start -->
		<aside class="left-sidebar">
			<!-- Sidebar scroll-->
			<div>
				<div class="brand-logo d-flex align-items-center justify-content-between">
					<a href="<?= base_url() ?>" class="text-nowrap logo-img">
						<img src="<?= base_url('assets/admin/src') ?>/assets/images/logos/logo-light.svg" alt="" />
					</a>
					<div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
						<i class="ti ti-x fs-8"></i>
					</div>
				</div>
				<!-- Sidebar navigation-->
				<nav class="sidebar-nav scroll-sidebar" data-simplebar="">
					<?php
						$menu = $this->uri->segment(2);
					?>
					<ul id="sidebarnav">
						<li class="nav-small-cap">
							<i class="ti ti-dots nav-small-cap-icon fs-6"></i>
							<span class="hide-menu">Home</span>
						</li>
						<li class="sidebar-item <?php if ($menu == 'home') {
                                      echo 'selected';
                                    } ?>">
							<a class="sidebar-link <?php if ($menu == 'home') {
                                        echo 'active';
                                      } ?>" href="<?= base_url('admin/home') ?>">
								<span>
									<iconify-icon icon="bx:home-alt"></iconify-icon>
								</span>
								<span class="hide-menu">Dashboard</span>
							</a>
						</li>
						<li class="sidebar-item <?php if ($menu == 'konfigurasi') {
                                      echo 'selected';
                                    } ?>">
							<a class="sidebar-link <?php if ($menu == 'konfigurasi') {
                                        echo 'active';
                                      } ?>" href="<?= base_url('admin/konfigurasi') ?>">
								<span>
									<iconify-icon icon="uit:circuit"></iconify-icon>
								</span>
								<span class="hide-menu">Konfigurasi</span>
							</a>
						</li>
						<li class="sidebar-item <?php if ($menu == 'kritik') {
                                      echo 'selected';
                                    } ?>">
							<a class="sidebar-link <?php if ($menu == 'kritik') {
                                        echo 'active';
                                      } ?>" href="<?= base_url('admin/kritik') ?>">
								<span>
									<iconify-icon icon="bx:chat"></iconify-icon>
								</span>
								<span class="hide-menu">Komentar</span>
							</a>
						</li>
						<li class="sidebar-item <?php if ($menu == 'user') {
                                      echo 'selected';
                                    } ?>">
							<a class="sidebar-link <?php if ($menu == 'user') {
                                        echo 'active';
                                      } ?>" href="<?= base_url('admin/user') ?>">
								<span>
									<iconify-icon icon="gridicons:multiple-users"></iconify-icon>
								</span>
								<span class="hide-menu">User</span>
							</a>
						</li>
						</li>
						<li class="sidebar-item <?php if ($menu == 'product') {
                                      echo 'selected';
                                    } ?>">
							<a class="sidebar-link <?php if ($menu == 'product') {
                                        echo 'active';
                                      } ?>" href="<?= base_url('admin/product') ?>">
								<span>
									<iconify-icon icon="bx:cart"></iconify-icon>
								</span>
								<span class="hide-menu">Product</span>
							</a>
						</li>
						<li class="sidebar-item <?php if ($menu == 'picproduct') {
                                      echo 'selected';
                                    } ?>">
							<a class="sidebar-link <?php if ($menu == 'picproduct') {
                                        echo 'active';
                                      } ?>" href="<?= base_url('admin/picproduct') ?>">
								<span>
									<iconify-icon icon="bx:images"></iconify-icon>
								</span>
								<span class="hide-menu">Picture Product</span>
							</a>
						</li>
						<li class="sidebar-item <?php if ($menu == 'kategori') {
                                      echo 'selected';
                                    } ?>">
							<a class="sidebar-link <?php if ($menu == 'kategori') {
                                        echo 'active';
                                      } ?>" href="<?= base_url('admin/kategori') ?>">
								<span>
									<iconify-icon icon="bx:table"></iconify-icon>
								</span>
								<span class="hide-menu">Kategori Product</span>
							</a>
						</li>
						<li class="sidebar-item <?php if ($menu == 'kurir') {
                                      echo 'selected';
                                    } ?>">
							<a class="sidebar-link <?php if ($menu == 'kurir') {
                                        echo 'active';
                                      } ?>" href="<?= base_url('admin/kurir') ?>">
								<span>
									<iconify-icon icon="fa6-solid:truck-ramp-box"></iconify-icon>
								</span>
								<span class="hide-menu">Kurir</span>
							</a>
						</li>
						<li class="sidebar-item <?php if ($menu == 'order') {
                                      echo 'selected';
                                    } ?>">
							<a class="sidebar-link <?php if ($menu == 'order') {
                                        echo 'active';
                                      } ?>" href="<?= base_url('admin/transaksi/order') ?>">
								<span>
									<iconify-icon icon="mdi:cube-send"></iconify-icon>
								</span>
								<span class="hide-menu">Semua Pesanan</span>
							</a>
						</li>
						<li class="sidebar-item <?php if ($menu == 'masuk') {
                                      echo 'selected';
                                    } ?>">
							<a class="sidebar-link <?php if ($menu == 'masuk') {
                                        echo 'active';
                                      } ?>" href="<?= base_url('admin/transaksi/order/masuk') ?>">
								<span>
									<iconify-icon icon="mdi:cube-send"></iconify-icon>
								</span>
								<span class="hide-menu">Pesanan Masuk</span>
							</a>
						</li>
						<li class="sidebar-item <?php if ($menu == 'konfirmasi') {
                                      echo 'selected';
                                    } ?>">
							<a class="sidebar-link <?php if ($menu == 'konfirmasi') {
                                        echo 'active';
                                      } ?>" href="<?= base_url('admin/transaksi/order/konfirmasi') ?>">
								<span>
									<iconify-icon icon="mdi:cube-send"></iconify-icon>
								</span>
								<span class="hide-menu">Pesanan Dikonfirmasi</span>
							</a>
						</li>
						<li class="sidebar-item <?php if ($menu == 'dikemas') {
                                      echo 'selected';
                                    } ?>">
							<a class="sidebar-link <?php if ($menu == 'dikemas') {
                                        echo 'active';
                                      } ?>" href="<?= base_url('admin/transaksi/order/dikemas') ?>">
								<span>
									<iconify-icon icon="mdi:cube-send"></iconify-icon>
								</span>
								<span class="hide-menu">Pesanan Dikemas</span>
							</a>
						</li>
						<li class="sidebar-item <?php if ($menu == 'dikirim') {
                                      echo 'selected';
                                    } ?>">
							<a class="sidebar-link <?php if ($menu == 'dikirim') {
                                        echo 'active';
                                      } ?>" href="<?= base_url('admin/transaksi/order/dikirim') ?>">
								<span>
									<iconify-icon icon="mdi:cube-send"></iconify-icon>
								</span>
								<span class="hide-menu">Pesanan Dikirim</span>
							</a>
						</li>
						<li class="sidebar-item <?php if ($menu == 'menuju_alamat') {
                                      echo 'selected';
                                    } ?>">
							<a class="sidebar-link <?php if ($menu == 'menuju_alamat') {
                                        echo 'active';
                                      } ?>" href="<?= base_url('admin/transaksi/order/menuju_alamat') ?>">
								<span>
									<iconify-icon icon="mdi:cube-send"></iconify-icon>
								</span>
								<span class="hide-menu">Pesanan Menuju Alamat</span>
							</a>
						</li>
						<li class="sidebar-item <?php if ($menu == 'selesai') {
                                      echo 'selected';
                                    } ?>">
							<a class="sidebar-link <?php if ($menu == 'selesai') {
                                        echo 'active';
                                      } ?>" href="<?= base_url('admin/transaksi/order/selesai') ?>">
								<span>
									<iconify-icon icon="mdi:cube-send"></iconify-icon>
								</span>
								<span class="hide-menu">Pesanan Selesai</span>
							</a>
						</li>
						<!-- End Sidebar navigation -->
			</div>
			<!-- End Sidebar scroll-->
		</aside>
		<!--  Sidebar End -->
		<!--  Main wrapper -->
		<div class="body-wrapper">
			<!--  Header Start -->
			<header class="app-header">
				<nav class="navbar navbar-expand-lg navbar-light">
					<ul class="navbar-nav">
						<li class="nav-item d-block d-xl-none">
							<a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
								href="javascript:void(0)">
								<i class="ti ti-menu-2"></i>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link nav-icon-hover" href="javascript:void(0)">
								<i class="ti ti-bell-ringing"></i>
								<div class="notification bg-primary rounded-circle"></div>
							</a>
						</li>
					</ul>
					<div class="navbar-collapse justify-content-end px-0" id="navbarNav">
						<ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
							<li class="nav-item dropdown">
								<a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
									data-bs-toggle="dropdown" aria-expanded="false">
									<img src="<?= base_url('assets/admin/src') ?>/assets/images/profile/user-1.jpg"
										alt="" width="35" height="35" class="rounded-circle">
								</a>
								<div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
									aria-labelledby="drop2">
									<div class="message-body">
										<a href="javascript:void(0)"
											class="d-flex align-items-center gap-2 dropdown-item">
											<i class="ti ti-user fs-6"></i>
											<p class="mb-0 fs-3">My Profile</p>
										</a>
										<a href="javascript:void(0)"
											class="d-flex align-items-center gap-2 dropdown-item">
											<i class="ti ti-mail fs-6"></i>
											<p class="mb-0 fs-3">My Account</p>
										</a>
										<a href="javascript:void(0)"
											class="d-flex align-items-center gap-2 dropdown-item">
											<i class="ti ti-list-check fs-6"></i>
											<p class="mb-0 fs-3">My Task</p>
										</a>
										<a href="<?= base_url('admin/auth/logout') ?>"
											class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</nav>
			</header>
			<!--  Header End -->
			<div class="container-fluid">
				<?= $contents; ?>
			</div>
		</div>
	</div>
	<!-- <script src="<?= base_url('assets/admin/src') ?>/assets/libs/jquery/dist/jquery.min.js"></script> -->
	<script src="https://code.jquery.com/jquery-3.7.1.js"
		integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/admin/src') ?>/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/admin/src') ?>/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
	<script src="<?= base_url('assets/admin/src') ?>/assets/libs/simplebar/dist/simplebar.js"></script>
	<script src="<?= base_url('assets/admin/src') ?>/assets/js/sidebarmenu.js"></script>
	<script src="<?= base_url('assets/admin/src') ?>/assets/js/app.min.js"></script>
	<script src="<?= base_url('assets/admin/src') ?>/assets/js/dashboard.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
	<script src="<?= base_url('assets/') ?>DataTables/datatables.min.js"></script>
	<script src="<?= base_url('assets/') ?>sweetalert2/sweetalert2.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
		let table = new DataTable('#myTable');

	</script>
	<script>
		$("#menghilang").delay("slow").slideDown("slow").delay(1000).slideUp(600);

	</script>
	<script src=""></script>
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

			function confirmDeleteKurir(id) {
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
						window.location.href = '<?= base_url('admin/kurir/hapus/'); ?>' + id;
					}
				});
			}
			window.confirmDeleteKurir = confirmDeleteKurir; // Make sure it's globally accessible.

			function confirmDeletePesanan(id) {
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
						window.location.href = '<?= base_url('admin/transaksi/order/hapus/'); ?>' + id;
					}
				});
			}
			window.confirmDeletePesanan = confirmDeletePesanan; // Make sure it's globally accessible.

			function confirmDeleteKonfigurasi(id) {
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
						window.location.href = '<?= base_url('admin/konfigurasi/hapus/'); ?>' + id;
					}
				});
			}
			window.confirmDeleteKonfigurasi = confirmDeleteKonfigurasi; // Make sure it's globally accessible.
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
    const salesData = <?php echo json_encode($sales); ?>;
    console.log("Sales Data: ", salesData);

    const labels = salesData.map(sale => sale.tanggal);
    const data = salesData.map(sale => sale.total_penjualan);

    console.log("Labels: ", labels);
    console.log("Data: ", data);

    const ctx = document.getElementById('salesChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Total Penjualan',
                data: data,
                borderColor: 'blue',
                backgroundColor: 'rgba(0, 0, 255, 0.1)',
                tension: 0.4
            }]
        }
    });
</script>

</body>

</html>
