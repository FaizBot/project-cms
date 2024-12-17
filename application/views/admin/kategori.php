<div class="container">
	<!-- Tambah -->
	<div class="modal fade" id="tambahkategori" tabindex="-1" aria-labelledby="tambahkategoriLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="<?= base_url('admin/kategori/simpan')?>" method="post">
				<div class="modal-header">
					<h5 class="modal-title">Tambah Kategori</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputtext1" class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control" name="nama_kategori">
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
			<p class="m-0">Kategori</p>
			<div class="col col-lg-2">
				<a class="btn btn-outline-link m-1" data-bs-toggle="modal" data-bs-target="#tambahkategori">Tambah Kategori</a>
			</div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table id="myTable" class="table table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Kategori</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach($kategori as $ktr) { ?>
						<tr>
							<th scope="row"><?= $no++ ?></th>
							<td><?= $ktr['nama_kategori']; ?></td>
							<td>
								<a data-bs-toggle="modal" data-bs-target="#editkategori<?=$ktr['id_kategori']?>" class="me-2">
									<iconify-icon icon="cil:color-border" width="25" height="25"></iconify-icon>
								</a>
								<a onClick="confirmDeleteKtr('<?= $ktr['id_kategori']; ?>')" class="me-2">
									<iconify-icon icon="cil:trash" width="25" height="25"></iconify-icon>
								</a>
								<!-- Edit -->
								<form action="<?= base_url('admin/kategori/update')?>" method="post">
								<div class="modal fade" id="editkategori<?= $ktr['id_kategori'] ?>" tabindex="-1" aria-labelledby="editkategoriLabel" aria-hidden="true">
									<div class="modal-dialog">
										<input type="hidden" name="id_kategori" value="<?= $ktr['id_kategori'] ?>">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title">Ubah Kategori</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
													<div class="mb-3">
														<label for="exampleInputtext1" class="form-label">Nama Kategori</label>
														<input type="text" class="form-control" name="nama_kategori" value="<?= $ktr['nama_kategori'] ?>">
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
													<button type="submit" class="btn btn-primary">Update</button>
												</div>
											</div>
										</div>
									</div>
								</form>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
