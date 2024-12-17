<div class="container">
	<!-- Tambah -->
	<div class="modal fade" id="tambahkonfigurasi" tabindex="-1" aria-labelledby="tambahkurirLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="<?= base_url('admin/kurir/simpan')?>" method="post">
				<div class="modal-header">
					<h5 class="modal-title">Tambah Konfigurasi</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputtext1" class="form-label">Judul Website</label>
                            <input type="text" class="form-control" name="judul_wbsite">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputtext1" class="form-label">Profile Website</label>
                            <input type="text" class="form-control" name="profil_website">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputtext1" class="form-label">Instagram</label>
                            <input type="text" class="form-control" name="instagram">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputtext1" class="form-label">Facebook</label>
                            <input type="text" class="form-control" name="facebook">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputtext1" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputtext1" class="form-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputtext1" class="form-label">No Whatsapp</label>
                            <input type="text" class="form-control" name="no_wa">
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
			<p class="m-0">Konfigurasi</p>
            <?php if (!isset($konfigurasi)) : ?>
			<div class="col col-lg-2">
				<a class="btn btn-outline-link m-1" data-bs-toggle="modal" data-bs-target="#tambahkonfigurasi">Tambah Konfigurasi</a>
			</div>
            <?php endif; ?>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Judul Website</th>
							<th>Profile Website</th>
							<th style="width: 200px;">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach($konfigurasi as $k) { ?>
						<tr>
							<th scope="row"><?= $no++ ?></th>
							<td><?= $k['judul_website']; ?></td>
							<td><?= $k['profil_website']; ?></td>
							<td>
								<a data-bs-toggle="modal" data-bs-target="#editkofig<?=$k['id_konfigurasi']?>" class="me-2">
									<iconify-icon icon="cil:color-border" width="25" height="25"></iconify-icon>
								</a>
								<a onClick="confirmDeleteKonfigurasi('<?= $k['id_konfigurasi']; ?>')" class="me-2">
									<iconify-icon icon="cil:trash" width="25" height="25"></iconify-icon>
								</a>
                                <a data-bs-toggle="modal" data-bs-target="#tampilkonfig<?= $k['id_konfigurasi'] ?>" class="me-2">
									<iconify-icon icon="et:search" width="25" height="25"></iconify-icon>
								</a>
								<!-- Edit -->
								<form action="<?= base_url('admin/konfigurasi/update')?>" method="post">
								<div class="modal fade" id="editkofig<?= $k['id_konfigurasi'] ?>" tabindex="-1" aria-labelledby="editkofigLabel" aria-hidden="true">
									<div class="modal-dialog">
										<input type="hidden" name="id_konfigurasi" value="<?= $k['id_konfigurasi'] ?>">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title">Ubah Konfigurasi</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
													<div class="mb-3">
														<label for="exampleInputtext1" class="form-label">Judul Website</label>
														<input type="text" class="form-control" value="<?= $k['judul_website'] ?>">
													</div>
													<div class="mb-3">
														<label for="exampleInputtext1" class="form-label">Profile Website</label>
														<input type="text" class="form-control" value="<?= $k['profil_website'] ?>">
													</div>
													<div class="mb-3">
														<label for="exampleInputtext1" class="form-label">Instagram</label>
														<input type="text" class="form-control" value="<?= $k['instagram'] ?>">
													</div>
													<div class="mb-3">
														<label for="exampleInputtext1" class="form-label">Facebook</label>
														<input type="text" class="form-control" value="<?= $k['facebook'] ?>">
													</div>
													<div class="mb-3">
														<label for="exampleInputtext1" class="form-label">Email</label>
														<input type="text" class="form-control" value="<?= $k['email'] ?>">
													</div>
													<div class="mb-3">
														<label for="exampleInputtext1" class="form-label">Alamat</label>
														<input type="text" class="form-control" value="<?= $k['alamat'] ?>">
													</div>
													<div class="mb-3">
														<label for="exampleInputtext1" class="form-label">No Whatsapp</label>
														<input type="text" class="form-control" value="<?= $k['no_wa'] ?>">
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
                                
                                <!-- Tampil -->
								<div class="modal fade" id="tampilkonfig<?= $k['id_konfigurasi'] ?>" tabindex="-1" aria-labelledby="tampilkofigLabel" aria-hidden="true">
									<div class="modal-dialog">
										<input type="hidden" name="id_konfigurasi" value="<?= $k['id_konfigurasi'] ?>">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title">Detail Konfigurasi</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
													<div class="mb-3">
														<label for="exampleInputtext1" class="form-label">Judul Website</label>
														<input type="text" class="form-control" value="<?= $k['judul_website'] ?>" readonly>
													</div>
													<div class="mb-3">
														<label for="exampleInputtext1" class="form-label">Profile Website</label>
                                                        <textarea class="form-control input" readonly><?= $k['profil_website'] ?></textarea>
													</div>
													<div class="mb-3">
														<label for="exampleInputtext1" class="form-label">Instagram</label>
														<input type="text" class="form-control" value="<?= $k['instagram'] ?>" readonly>
													</div>
													<div class="mb-3">
														<label for="exampleInputtext1" class="form-label">Facebook</label>
														<input type="text" class="form-control" value="<?= $k['facebook'] ?>" readonly>
													</div>
													<div class="mb-3">
														<label for="exampleInputtext1" class="form-label">Email</label>
														<input type="text" class="form-control" value="<?= $k['email'] ?>" readonly>
													</div>
													<div class="mb-3">
														<label for="exampleInputtext1" class="form-label">Alamat</label>
														<input type="text" class="form-control" value="<?= $k['alamat'] ?>" readonly>
													</div>
													<div class="mb-3">
														<label for="exampleInputtext1" class="form-label">No Whatsapp</label>
														<input type="text" class="form-control" value="<?= $k['no_wa'] ?>" readonly>
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												</div>
											</div>
                                        </div>
									</div>
								</div>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>