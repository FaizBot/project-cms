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
                <form action="<?= base_url('user/user/update') ?>" method="post">
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
                                <input class="input" type="hidden" name="id_user" value="<?= $usr['id_user'] ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Username :</label>
                                <input class="input" type="text" name="username" value="<?= $usr['username'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Password :</label>
                                <input class="input" type="password" name="password">
                            </div>
                            <div class="infooo">
                                <div class="info__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" height="24" fill="none">
                                        <path fill="#393a37" d="m12 1.5c-5.79844 0-10.5 4.70156-10.5 10.5 0 5.7984 4.70156 10.5 10.5 10.5 5.7984 0 10.5-4.7016 10.5-10.5 0-5.79844-4.7016-10.5-10.5-10.5zm.75 15.5625c0 .1031-.0844.1875-.1875.1875h-1.125c-.1031 0-.1875-.0844-.1875-.1875v-6.375c0-.1031.0844-.1875.1875-.1875h1.125c.1031 0 
                                        .1875.0844.1875.1875zm-.75-8.0625c-.2944-.00601-.5747-.12718-.7808-.3375-.206-.21032-.3215-.49305-.3215-.7875s.1155-.57718.3215-.7875c.2061-.21032.4864-.33149.7808-.3375.2944.00601.5747.12718.7808.3375.206.21032.3215.49305.3215.7875s-.1155.57718-.3215.7875c-.2061.21032-.4864.33149-.7808.3375z"></path>
                                    </svg>
                                </div>
							    <div class="info__title">Kosongi Jika Tidak Ingin <b>MENGGANTI PASSWORD</b></div>
						    </div>
                            <br>
                            <div class="form-group">
                                <label for="">Email :</label>
                                <input class="input" type="email" name="email" value="<?= $usr['email'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">No Handphone :</label>
                                <input class="input" type="tel" name="no_hp" value="<?= $usr['no_hp'] ?>">
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
                            <textarea class="input" name="alamat"><?= $usr['alamat'] ?></textarea>
                        </div>
                        <div class="order-notes">
                            <label for="">Kota :</label>
                            <textarea class="input" name="kota" readonly><?= $usr['kota'] ?></textarea>
                        </div>
                        <div class="order-notes">
                            <label for="">Provinsi :</label>
                            <textarea class="input" name="provinsi" readonly><?= $usr['provinsi'] ?></textarea>
                        </div>
                        <button type="submit" class="primary-btn cta-btn" style="margin-left: 420px;">Simpan</button>
                    </div>
                    <?php } ?>
                    <!-- /Order notes -->
                </form>
			</div>
			<!-- STORE -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
