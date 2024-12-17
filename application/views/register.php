<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SeoDash Free Bootstrap Admin Template by Adminmart</title>
  <link rel="shortcut icon" type="image/png" href="<?= base_url('assets/admin/src') ?>/assets/images/logos/seodashlogo.png" />
  <link rel="stylesheet" href="<?= base_url('assets/admin/src') ?>/assets/css/styles.min.css" />
  <link rel="stylesheet" href="<?= base_url('assets/') ?>sweetalert2/sweetalert2.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="<?= base_url() ?>" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="<?= base_url('assets/user/') ?>img/logo.png" alt="">
                </a>
                <p class="text-center">Your Social Campaigns</p>
                <form action="<?= base_url('user/user/simpan'); ?>" method="post">
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                  </div>
                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4">Sign Up</button>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                    <a class="text-primary fw-bold ms-2" href="<?= base_url('admin/auth') ?>">Sign In</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?= base_url('assets/admin/src') ?>/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url('assets/admin/src') ?>/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
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
</body>

</html>