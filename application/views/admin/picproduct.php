<div class="container">
	<!-- Tambah -->
	<div class="modal fade" id="tambahpic" tabindex="-1" aria-labelledby="tambahpicLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<?= form_open_multipart('admin/picproduct/simpan_img') ?>
					<?= validation_errors(); ?>
					<div class="modal-header">
						<h5 class="modal-title">Menambahkan product</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="mb-3">
							<label for="picture">Picture Produk:</label>
							<input type="file" class="form-control" id="picture" name="picture[]" value="<?= set_value('picture'); ?>" multiple="">
						</div>
						<div class="mb-3">
							<label for="exampleInputtext1" class="form-label">Pilih Product</label>
							<select name="id_product" class="form-select form-control" id="defaultSelect">
								<option value="" disabled selected>Pilih Product</option>
                                <?php foreach($prdct as $prd){ ?>
								<option value="<?= $prd['id_product'] ?>" ><?= $prd['nama'] ?></option>
                                <?php } ?>
							</select>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Tambah</button>
					</div>
				<?= form_close() ?>
			</div>
		</div>
	</div>
	
	<div class="card">
		<div class="d-flex justify-content-between pt-3 px-4 align-items-center">
			<p class="m-0">Picture Product</p>
			<div class="col col-lg-2">
				<a class="btn btn-outline-link m-1" data-bs-toggle="modal" data-bs-target="#tambahpic">Tambah Picture</a>
			</div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table id="myTable" class="table table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Product</th>
							<th>Kategori</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
                        $no = 1;
						foreach ($product as $prd) { ?>
						<tr>
							<th scope="row"><?= $no++ ?></th>
							<td><?= $prd['nama']; ?></td>
							<td><?= $prd['kategori']; ?></td>
							<td>
								<a data-bs-toggle="modal" data-bs-target="#lihatpic<?= $prd['id_product'] ?>" class="me-2">
									<iconify-icon icon="bx:images" width="25" height="25"></iconify-icon>
								</a>
								<a onClick="confirmDeletePic('<?= $prd['id_product']; ?>')" class="me-2">
									<iconify-icon icon="cil:trash" width="25" height="25"></iconify-icon>
								</a>
							</td>

							<!-- Lihat -->
							<div class="modal fade" id="lihatpic<?= $prd['id_product'] ?>" tabindex="-1"
								aria-labelledby="lihatpicLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Picture Product</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal"
												aria-label="Close"></button>
										</div>
											<div class="modal-body">
												<div class="mb-3">
												<div id="carouselExample" class="carousel slide">
													<div class="carousel-inner">
													<?php 
													$first = true; // Variabel untuk memastikan hanya item pertama mendapat kelas 'active'
													foreach ($picproduct as $pic): 
													if ($pic['id_product'] == $prd['id_product']): ?>
														<div class="carousel-item <?= $first ? 'active' : '' ?>">
															<img src="<?= base_url('assets/upload/' . $pic['picture']) ?>" class="d-block w-100" alt="...">
														</div>
													<?php 
													$first = false; // Set variabel ke false setelah item pertama
													endif; 
													endforeach; ?>
													</div>
													<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
														<span class="carousel-control-prev-icon" aria-hidden="true"></span>
														<span class="visually-hidden">Previous</span>
													</button>
													<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
														<span class="carousel-control-next-icon" aria-hidden="true"></span>
														<span class="visually-hidden">Next</span>
													</button>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary"
													data-bs-dismiss="modal">Close</button>
											</div>
										</form>
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
