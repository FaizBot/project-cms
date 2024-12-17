<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<h3 class="breadcrumb-header">Checkout</h3>
				<ul class="breadcrumb-tree">
					<li><a href="<?= base_url() ?>">Home</a></li>
					<li><a href="<?= base_url('user/cart') ?>">Cart</a></li>
					<li class="active">Checkout</li>
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
			<form action="<?= base_url('user/checkout/process_checkout') ?>" method="post">
				<div class="col-md-7">
					<?php foreach($user as $usr) { ?>
					<!-- Billing Details -->
					<div class="billing-details">
						<div class="section-title">
							<h3 class="title">Alamat Pengiriman</h3>
						</div>
						<div class="form-group">
							<label for="">Nama</label>
							<input class="input" type="text" name="nama" value="<?= $usr['nama']; ?>" readonly>
						</div>
						<div class="form-group">
							<label for="">Email</label>
							<input class="input" type="email" name="email" value="<?= $usr['email']; ?>" required>
						</div>
						<div class="form-group">
							<label for="">No Handphone</label>
							<input class="input" type="text" name="no_hp" value="<?= $usr['no_hp']; ?>" required>
						</div>
						<div class="form-group">
							<label for="">Alamat</label>
							<input class="input" type="text" name="alamat" value="<?= $usr['alamat']; ?>" required>
						</div>
						<div class="form-group">
							<label for="">Provinsi</label>
							<select name="provinsi" class="form-control" id="">
								<option value="">Pilih Provinsi</option>
								<?php foreach($provinsi as $key => $tiap_provinsi) { ?>
								<option value="<?= $tiap_provinsi["province"] ?>" id_provinsi="<?= $tiap_provinsi["province_id"] ?>"><?= $tiap_provinsi["province"] ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="">Kota / Kabupaten</label>
							<select name="kota" class="form-control" id="">
								<option value="">Pilih Provinsi terlebih dahulu</option>
							</select>
						</div>
						<div class="form-group">
							<label for="">Jasa</label>
							<select name="kurir" class="form-control" id="">
								<option value="tiki">TIKI</option>
								<option value="jne">JNE</option>
								<option value="pos">POS INDONESIA</option>
							</select>
						</div>
						<div class="form-group">
							<label for="">Paket</label>
							<select name="paket" class="form-control" id="">
								<option value="">Silahkan lengkapi alamat tujuan terlebih dahulu</option>
							</select>
						</div>
						<div class="info">
							<div class="info__icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" height="24" fill="none">
								<path fill="#393a37" d="m12 1.5c-5.79844 0-10.5 4.70156-10.5 10.5 0 5.7984 4.70156 10.5 10.5 10.5 5.7984 0 10.5-4.7016 10.5-10.5 0-5.79844-4.7016-10.5-10.5-10.5zm.75 15.5625c0 .1031-.0844.1875-.1875.1875h-1.125c-.1031 0-.1875-.0844-.1875-.1875v-6.375c0-.1031.0844-.1875.1875-.1875h1.125c.1031 0 
								.1875.0844.1875.1875zm-.75-8.0625c-.2944-.00601-.5747-.12718-.7808-.3375-.206-.21032-.3215-.49305-.3215-.7875s.1155-.57718.3215-.7875c.2061-.21032.4864-.33149.7808-.3375.2944.00601.5747.12718.7808.3375.206.21032.3215.49305.3215.7875s-.1155.57718-.3215.7875c-.2061.21032-.4864.33149-.7808.3375z"></path>
							</svg>
							</div>
							<div class="info__title">Silahkan cek <b>NOMER TELP</b> dan <b>ALAMAT</b> terlebih dahulu</div>
						</div>
					</div>
					<!-- /Billing Details -->

					<!-- Order notes -->
					<div class="order-notes">
						<textarea name="note" class="input" placeholder="Order Notes"></textarea>
					</div>
					<!-- /Order notes -->
					<?php } ?>
				</div>
				<!-- Order Details -->
				<div class="col-md-5 order-details">
					<div class="section-title text-center">
						<h3 class="title">Your Order</h3>
					</div>
					<div class="order-summary">
						<div class="order-col">
							<div><strong>PRODUCT</strong></div>
							<div><strong>TOTAL</strong></div>
						</div>
						<?php
						$total = 0;
						foreach($cart as $c) { 
						$total += $c['sub_total'];    
						?>
						<input type="hidden" name="totalberat" value="<?= $c['totalberat'] ?>">
						<div class="order-products">
							<div class="order-col">
								<div><?= $c['qty']?>x <?= $c['nama']?></div>
								<div>Rp <?= number_format($c['sub_total'], 0, ',', '.') ?></div>
							</div>
						</div>
						<?php } ?>
						<div class="order-col">
							<div>Ongkir</div>
							<div><strong id="ongkir">Dibayar setelah paket sampai</strong></div>
						</div>
						<div class="order-col">
							<div><strong>TOTAL</strong></div>
							<div><strong class="order-total" id="total"><?= number_format($total, 0, ',', '.') ?></strong></div>
						</div>
						<br>
						<p><b>PAYMENT</b></p>
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-1" value="Transfer Bank" required>
								<label for="payment-1">
									<span></span>
									Transfer Bank
								</label>
								<div class="caption">
									<p>SeaBank, Bank BCA, Bank Mandiri, Bank BNI, Bank BRI, Bank Syariah Indonesia(BSI), Bank Lainnya</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-2" value="Kartu Kredit/Debit">
								<label for="payment-2">
									<span></span>
									Kartu Kredit/Debit
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-3" value="Cash On Delivery">
								<label for="payment-3">
									<span></span>
									Cash On Delivery
								</label>
								<div class="caption">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua.</p>
								</div>
							</div>
							<div class="infoo">
								<div class="info__icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" height="24" fill="none">
									<path fill="#393a37" d="m12 1.5c-5.79844 0-10.5 4.70156-10.5 10.5 0 5.7984 4.70156 10.5 10.5 10.5 5.7984 0 10.5-4.7016 10.5-10.5 0-5.79844-4.7016-10.5-10.5-10.5zm.75 15.5625c0 .1031-.0844.1875-.1875.1875h-1.125c-.1031 0-.1875-.0844-.1875-.1875v-6.375c0-.1031.0844-.1875.1875-.1875h1.125c.1031 0 
									.1875.0844.1875.1875zm-.75-8.0625c-.2944-.00601-.5747-.12718-.7808-.3375-.206-.21032-.3215-.49305-.3215-.7875s.1155-.57718.3215-.7875c.2061-.21032.4864-.33149.7808-.3375.2944.00601.5747.12718.7808.3375.206.21032.3215.49305.3215.7875s-.1155.57718-.3215.7875c-.2061.21032-.4864.33149-.7808.3375z"></path>
								</svg>
								</div>
							<div class="info__title">Pilih Metode Pembayaran</div>
						</div>
					</div>
					<button type="submit" class="primary-btn order-submit">Buat Pesanan</button>
				</div>
				<!-- /Order Details -->
			</form>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
