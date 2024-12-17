<div class="container">
	<!-- Tambah -->
	<div class="modal fade" id="tambahkurir" tabindex="-1" aria-labelledby="tambahkurirLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="<?= base_url('admin/kurir/simpan')?>" method="post">
				<div class="modal-header">
					<h5 class="modal-title">Tambah Kurir</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputtext1" class="form-label">Nama Kurir</label>
                            <input type="text" class="form-control" name="nama">
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
			<p class="m-0">Kurir</p>
			<div class="col col-lg-2">
				<a class="btn btn-outline-link m-1" data-bs-toggle="modal" data-bs-target="#tambahkurir">Tambah Kurir</a>
			</div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table id="myTable" class="table table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Kurir</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach($kurir as $k) { ?>
						<tr>
							<th scope="row"><?= $no++ ?></th>
							<td><?= $k['nama']; ?></td>
							<td>
								<a data-bs-toggle="modal" data-bs-target="#editkurir<?=$k['id_kurir']?>" class="me-2">
									<iconify-icon icon="cil:color-border" width="25" height="25"></iconify-icon>
								</a>
								<a onClick="confirmDeleteKurir('<?= $k['id_kurir']; ?>')" class="me-2">
									<iconify-icon icon="cil:trash" width="25" height="25"></iconify-icon>
								</a>
								<!-- Edit -->
								<form action="<?= base_url('admin/kurir/update')?>" method="post">
								<div class="modal fade" id="editkurir<?= $k['id_kurir'] ?>" tabindex="-1" aria-labelledby="editkurirLabel" aria-hidden="true">
									<div class="modal-dialog">
										<input type="hidden" name="id_kurir" value="<?= $k['id_kurir'] ?>">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title">Ubah Kurir</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
													<div class="mb-3">
														<label for="exampleInputtext1" class="form-label">Nama Kurir</label>
														<input type="text" class="form-control" name="nama" value="<?= $k['nama'] ?>">
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
