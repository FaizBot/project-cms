<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<h3 class="breadcrumb-header">MY ACCOUNT</h3>
				<ul class="breadcrumb-tree">
					<li><a href="<?= base_url() ?>">Home</a></li>
					<li class="active">ACCOUNT</li>
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
			<!-- STORE -->
			<div id="store" class="col-lg-12 col-sm-12">
				<!-- Billing Details -->
				<div class="section-title">
					<h3 class="title">Biodata</h3>
				</div>
				<div class="col-lg-6 col-sm-12">
					<div class="billing-details">
						<?php foreach($user as $usr) { ?>
						<div class="form-group">
							<label for="">Nama :</label>
							<input class="input" type="text" name="nama" value="<?= $usr['nama'] ?>" readonly>
						</div>
						<div class="form-group">
							<label for="">Username :</label>
							<input class="input" type="text" name="username" value="<?= $usr['username'] ?>" readonly>
						</div>
						<div class="form-group">
							<label for="">Email :</label>
							<input class="input" type="email" name="email" value="<?= $usr['email'] ?>" readonly>
						</div>
						<div class="form-group">
							<label for="">No Handphone :</label>
							<input class="input" type="tel" name="no_hp" value="<?= $usr['no_hp'] ?>" readonly>
						</div>
						<div class="form-group">
							<label for="">Kode Pos :</label>
							<input class="input" type="text" name="kode_pos" value="<?= $usr['kode_pos'] ?>" readonly>
						</div>
					</div>
				</div>
				<!-- /Billing Details -->
				
				<!-- Order notes -->
				<div class="col-lg-6 col-sm-12">
					<div class="order-notes">
						<label for="">Alamat :</label>
						<textarea class="input" name="alamat" readonly><?= $usr['alamat'] ?></textarea>
					</div>
					<div class="order-notes">
						<label for="">Kota :</label>
						<textarea class="input" name="kota" readonly><?= $usr['kota'] ?></textarea>
					</div>
					<div class="order-notes">
						<label for="">Provinsi :</label>
						<textarea class="input" name="provinsi" readonly><?= $usr['provinsi'] ?></textarea>
					</div>
				</div>
				<a href="<?= base_url('user/user/tambah') ?>" class="primary-btn cta-btn" style="margin-left: 455px;">Edit</a>
				<?php } ?>
				<!-- /Order notes -->
			</div>
			<!-- STORE -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
