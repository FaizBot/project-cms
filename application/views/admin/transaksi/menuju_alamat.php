<body>
	<div class="page-wrapper">
		<div class="content">
			<div class="card">
				<div class="card-body">
					<div class="page-header">
						<div class="page-title">
							<h4><?= $title; ?></h4>
							<h6>Manage your <?= $title; ?></h6>
                            <br>
						</div>
					</div>

					<div class="table-responsive">
				        <table id="myTable" class="table table-bordered"
                            aria-describedby="DataTables_Table_0_info">
                            <thead>
                                <tr role="row">
                                    <th style="width: 30.844px;">No</th>
                                    <th style="width: 29.5625px;">ID Transaksi</th>
                                    <th style="width: 29.5625px;">Nama Pelanggan</th>
                                    <th style="width: 30.6875px;">Tanggal</th>
                                    <th style="width: 40.4583px;">Jumlah</th>
                                    <th style="width: 175.4583px;">Status</th>
                                    <th style="width: 78.4896px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; foreach ($transaksi as $t): ?>
                                <tr class="odd">
                                    <td><?=$no++?></td>
                                    <td><?= $t['id_transaction']; ?></td>
                                    <td><?= $t['nama']; ?></td>
                                    <td><?= $t['tanggal']; ?></td>
                                    <td>Rp<?= number_format($t['sub_total'], 0, ',', '.'); ?></td>

                                    <td>
                                        <span class="badges <?php 
                                            switch ($t['status']) {
                                                case 'Pesanan Masuk': echo 'bg-red'; break;
                                                case 'Pesanan Dikonfirmasi': echo 'bg-blue'; break;
                                                case 'Pesanan Dikemas': echo 'bg-yellow'; break;
                                                case 'Pesanan Dikirim': echo 'bg-orange'; break;
                                                case 'Pesanan Dalam Perjalanan': echo 'bg-purple'; break;
                                                case 'Pesanan Selesai': echo 'bg-darkgreen'; break;
                                                default: echo ''; 
                                            }
                                                                                                    ?>">
                                            <?= $t['status']; ?>
                                        </span>
                                    </td>

                                    <td>
                                        <!-- Trigger Modal for details -->
                                        <a class="me-3 center-icon" href="#" data-bs-toggle="modal"
                                            data-bs-target="#detailsModal<?= $t['id_transaction']; ?>">
                                            <iconify-icon icon="et:search" width="25" height="25"></iconify-icon>
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
						</table>
						
					</div>
				</div>
			</div>
		</div>

		<!-- Transaction Detail Modal -->
		<?php foreach ($transaksi as $t): ?>
		<div class="modal fade" id="detailsModal<?= $t['id_transaction']; ?>" tabindex="-1"
			aria-labelledby="productDetailsModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<!-- Modal Header -->
					<div class="modal-header">
						<h5 class="modal-title" id="productDetailsModalLabel">Details</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>

					<!-- Modal Body -->
					<div class="modal-body">
						<div class="row">
							<div class="col-lg-6 col-sm-12">
								<div class="card">
									<div class="card-body">
										<div class="productdetails">
											<h5 class="card-title">Data Pembayaran</h5>
											<br>
											<ul class="product-bar">
												<li>
													<h6>Id Transaksi</h6>
													<p><?= $t['id_transaction']; ?></p>
												</li>
												<li>
													<h6>Tanggal Pesanan</h6>
													<p><?= date('d-m-Y', strtotime($t['tanggal'])); ?></p>
												</li>
												<li>
													<h6>Payment</h6>
													<p><?= $t['payment']; ?></p>
												</li>
												<li>
													<h6>Total Produk</h6>
													<p><?= $t['jumlah'] ?></p>
												</li>
												<li>
													<h6>Total Harga</h6>
													<p>Rp<?= number_format($t['sub_total'], 0, ',', '.'); ?></p>
												</li>
												<li>
													<h6>Note/Pesan</h6>
													<p><?= $t['note']; ?></p>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-6 col-sm-12">
								<div class="card">
									<div class="card-body">

										<div class="productdetails">
											<h5 class="card-title">Data Pengiriman</h5>
											<br>
											<ul class="product-bar">
												<li>
													<h6>Penerima</h6>
													<p><?= $t['nama']; ?></p>
												</li>
												<li>
													<h6>No Hp Penerima</h6>
													<p><?= $t['no_hp']; ?></p>
												</li>
												<li>
													<h6>Alamat Penerima</h6>
													<p><?= $t['alamat']; ?>, <?= $t['kota']; ?>,
														<?= $t['provinsi']; ?>, <?= $t['kode_pos']; ?>
													</p>
												</li>
												<li>
													<h6>Jasa Ekspedisi</h6>
													<p><?= $t['kurir']; ?></p>
												</li>
												<li>
													<h6>Paket</h6>
													<p><?= $t['paket']; ?></p>
												</li>
												
												<li>
													<h6>No Resi</h6>
													<p><?= $t['no_resi']; ?></p>
												</li>
												<li>
													<h6>Status</h6>
													<p><span class="badges <?php 
                                                    switch ($t['status']) {
                                                        case 'Pesanan Masuk': echo 'bg-red'; break;
                                                        case 'Pesanan Dikonfirmasi': echo 'bg-blue'; break;
                                                        case 'Pesanan Dikemas': echo 'bg-yellow'; break;
                                                        case 'Pesanan Dikirim': echo 'bg-orange'; break;
                                                        case 'Pesanan Dalam Perjalanan': echo 'bg-purple'; break;
                                                        case 'Pesanan Selesai': echo 'bg-darkgreen'; break;
                                                        default: echo ''; 
                                                    }
                                                    ?>">
															<?= $t['status']; ?>
														</span></p>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-12 col-sm-12">
								<div class="card">
									<div class="card-body">
										<h5 class="card-title">Detail Produk</h5>
										<br>
										<div class="table-responsive">
											<table class="table">
												<thead>
													<tr>
														<th style="width: 15%;">Produk</th>
														<th>Harga</th>
														<th>Stock</th>
														<th>Qty</th>
														<th>Jumlah Stok</th>
														<th>Total</th>
														<th>Kategori</th>
													</tr>
												</thead>
												<tbody>
													<?php if (isset($product[$t['id_transaction']])): ?>
													<?php foreach ($product[$t['id_transaction']] as $p): ?>
													<tr>
														<td>
															<?= strlen($p['nama']) > 25 ? substr($p['nama'], 0, 25) . '...' : $p['nama']; ?>
														</td>
														<td>Rp<?= number_format($p['harga'], 0, ',', '.'); ?></td>
														<td><?= $p['stock']+$p['jumlah']; ?></td>
														<td><?= $p['jumlah']; ?></td>
														<td><?= $p['stock']; ?></td>
														<td>Rp<?= number_format($t['sub_total'], 0, ',', '.'); ?></td>
														<td><?= $p['kategori']; ?></td>
													</tr>
													<?php endforeach; ?>
													<?php else: ?>
													<tr>
														<td colspan="5">No products available for this transaction.</td>
													</tr>
													<?php endif; ?>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>

					<!-- Modal Footer -->
					<div class="modal-footer">
						<a data-bs-dismiss="modal" class="btn btn-outline-danger m-1">Cancel</a>
						<a class="btn btn-outline-success m-1" href="<?= base_url('admin/transaksi/order/ubah_selesai/' . $t['id_transaction']) ?>">
							Ubah ke Pesanan Selesai
						</a>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</body>
