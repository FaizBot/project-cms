<div class="container">
	<!-- Tambah -->
	<div class="modal fade" id="tambahuser" tabindex="-1" aria-labelledby="tambahuserLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="<?= base_url('admin/product/simpan') ?>" method="post">
					<div class="modal-header">
						<h5 class="modal-title">Menambahkan product</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="mb-3">
							<label for="exampleInputtext1" class="form-label">Nama Product</label>
							<input type="text" class="form-control" name="nama">
						</div>
						<div class="mb-3">
							<label for="exampleInputtext1" class="form-label">Spesifikasi Product</label>
							<textarea name="spesifikasi" class="form-control input"></textarea>
						</div>
						<div class="mb-3">
							<label for="exampleInputtext1" class="form-label">Berat Product</label>
							<input type="number" class="form-control" name="berat" placeholder="Berat Product dalam bentuk Gram">
						</div>
						<div class="mb-3">
							<label for="exampleInputtext1" class="form-label">Deskripsi Product</label>
							<textarea name="deskripsi" class="form-control input"></textarea>
						</div>
						<div class="mb-3">
							<label for="exampleInputtext1" class="form-label">Detail Product</label>
							<textarea name="detail_product" class="form-control input"></textarea>
						</div>
						<div class="mb-3">
							<label for="exampleInputtext1" class="form-label">Keterangan Product</label>
							<textarea name="keterangan" class="form-control input"></textarea>
						</div>
						<div class="mb-3">
							<label for="exampleInputtext1" class="form-label">Harga Product</label>
							<input type="text" class="form-control" name="harga">
						</div>
						<div class="mb-3">
							<label for="exampleInputtext1" class="form-label">Stock Product</label>
							<input type="number" class="form-control" name="stock">
						</div>
						<div class="mb-3">
							<label for="exampleInputtext1" class="form-label">Kategori Product</label>
							<select name="kategori" class="form-select form-control" id="defaultSelect">
                                <?php foreach($kategori as $ktr){ ?>
								<option value="<?= $ktr['nama_kategori'] ?>" ><?= $ktr['nama_kategori'] ?></option>
                                <?php } ?>
							</select>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Tambah</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="card">
		<div class="d-flex justify-content-between pt-3 px-4 align-items-center">
			<p class="m-0">Data Product</p>
			<div class="col col-lg-2">
				<a class="btn btn-outline-link m-1" data-bs-toggle="modal" data-bs-target="#tambahuser">Tambah Product</a>
			</div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table id="myTable" class="table table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Spesifikasi</th>
							<th>Kategori</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($product as $prd) { ?>
						<tr>
							<th scope="row"><?= $no++ ?></th>
							<td><?= $prd['nama']; ?></td>
							<td style="width: 15%;"><?= nl2br(htmlspecialchars($prd['spesifikasi'])) ?></td>
							<td><?= $prd['kategori']; ?></td>
							<td style="width: 15%;">
								<a data-bs-toggle="modal" data-bs-target="#editproduct<?= $prd['id_product'] ?>" class="me-2">
									<iconify-icon icon="cil:color-border" width="25" height="25"></iconify-icon>
								</a>
								<a onClick="confirmDeletePrd('<?= $prd['id_product']; ?>')" class="me-2">
									<iconify-icon icon="cil:trash" width="25" height="25"></iconify-icon>
								</a>
								<a data-bs-toggle="modal" data-bs-target="#tampilproduct<?= $prd['id_product'] ?>" class="me-2">
									<iconify-icon icon="et:search" width="25" height="25"></iconify-icon>
								</a>
							</td>

							<!-- Edit -->
							<div class="modal fade" id="editproduct<?= $prd['id_product'] ?>" tabindex="-1"
								aria-labelledby="editproductLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Ubah Product</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal"
												aria-label="Close"></button>
										</div>
										<form action="<?= base_url('admin/product/update') ?>" method="post">
											<div class="modal-body">
												<input type="hidden" name="id_product" value="<?= $prd['id_product'] ?>">
												<div class="mb-3">
													<label for="exampleInputtext1" class="form-label">Nama Product</label>
													<input type="text" class="form-control" name="nama" value="<?= $prd['nama'] ?>">
												</div>
												<div class="mb-3">
													<label for="exampleInputtext1" class="form-label">Spesifikasi Product</label>
													<textarea name="spesifikasi" class="form-control input"><?= $prd['spesifikasi'] ?></textarea>
												</div>
												<div class="mb-3">
													<label for="exampleInputtext1" class="form-label">Berat Product</label>
													<input type="number" class="form-control" name="berat" value="<?= $prd['berat'] ?>">
												</div>
												<div class="mb-3">
													<label for="exampleInputtext1" class="form-label">Deskripsi Product</label>
													<textarea name="deskripsi" class="form-control input"><?= $prd['deskripsi'] ?></textarea>
												</div>
												<div class="mb-3">
													<label for="exampleInputtext1" class="form-label">Detail Product</label>
													<textarea name="product_detail" class="form-control input"><?= $prd['product_detail'] ?></textarea>
												</div>
												<div class="mb-3">
													<label for="exampleInputtext1" class="form-label">Keterangan Product</label>
													<textarea name="keterangan" class="form-control input"><?= $prd['keterangan'] ?></textarea>
												</div>
												<div class="mb-3">
													<label for="exampleInputtext1" class="form-label">Stock Product</label>
													<input type="number" class="form-control" name="stock" value="<?= $prd['stock'] ?>">
												</div>
												<div class="mb-3">
													<label for="exampleInputtext1" class="form-label">Harga Product</label>
													<input type="text" class="form-control" name="harga" value="<?= $prd['harga'] ?>">
												</div>
												<div class="mb-3">
													<label for="exampleInputtext1" class="form-label">Kategori Product</label>
													<select name="kategori" class="form-select form-control" id="defaultSelect">
														<option value="<?= $prd['kategori'] ?>" selected><?= $prd['kategori'] ?></option>
														<?php foreach($kategori as $ktr){ ?>
														<option value="<?= $ktr['nama_kategori'] ?>"><?= $ktr['nama_kategori'] ?></option>
														<?php } ?>
													</select>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary"
													data-bs-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary">Update</button>
											</div>
										</form>
									</div>
								</div>
							</div>

							<!-- tampil -->
							<div class="modal fade" id="tampilproduct<?= $prd['id_product'] ?>" tabindex="-1"
								aria-labelledby="editproductLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Detail Product</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal"
												aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<div class="mb-3">
												<label for="exampleInputtext1" class="form-label">Nama Product</label>
												<input type="text" class="form-control" name="nama" value="<?= $prd['nama'] ?>" readonly>
											</div>
											<div class="mb-3">
												<label for="exampleInputtext1" class="form-label">Stock Product</label>
												<input type="number" class="form-control" name="stock" value="<?= $prd['stock'] ?>" readonly>
											</div>
											<div class="mb-3">
												<label for="exampleInputtext1" class="form-label">Harga Product</label>
												<input type="text" class="form-control" name="harga" value="<?= $prd['harga'] ?>" readonly>
											</div>
											<div class="mb-3">
												<label for="exampleInputtext1" class="form-label">Kategori Product</label>
												<input type="text" class="form-control" name="kategori" value="<?= $prd['kategori'] ?>" readonly>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary"
												data-bs-dismiss="modal">Close</button>
											<a href="<?= base_url('admin/product/detail/'. $prd['id_product']) ?>" class="btn btn-primary">Detail</a>
										</div>
									</div>
								</div>
							</div>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
