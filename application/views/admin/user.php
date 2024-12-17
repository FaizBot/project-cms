<div class="container">
	<!-- Tambah -->
	<div class="modal fade" id="tambahuser" tabindex="-1" aria-labelledby="tambahuserLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="<?= base_url('admin/user/simpan') ?>" method="post">
					<div class="modal-header">
						<h5 class="modal-title">Menambahkan user</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<div class="mb-3">
							<label for="exampleInputtext1" class="form-label">Nama User</label>
							<input type="text" class="form-control" name="nama">
						</div>
						<div class="mb-3">
							<label for="exampleInputtext1" class="form-label">Username</label>
							<input type="text" class="form-control" name="username">
						</div>
						<div class="mb-3">
							<label for="exampleInputtext1" class="form-label">No Handphone</label>
							<input type="text" class="form-control" name="no_hp">
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
							<label for="exampleInputtext1" class="form-label">Kota</label>
							<input type="text" class="form-control" name="kota">
						</div>
						<div class="mb-3">
							<label for="exampleInputtext1" class="form-label">Provinsi</label>
							<input type="text" class="form-control" name="provinsi">
						</div>
						<div class="mb-3">
							<label for="exampleInputtext1" class="form-label">Kode Pos</label>
							<input type="number" class="form-control" name="kode_pos">
						</div>
						<div class="mb-4">	
							<label for="exampleInputPassword1" class="form-label">Password</label>
							<input type="password" class="form-control" name="password">
						</div>
						<div class="mb-3">
							<label for="exampleInputPassword1" class="form-label">Sebagai :</label>
							<select name="level" class="form-select form-control" id="defaultSelect">
								<option value="user" selected>User</option>
								<option value="admin">Admin</option>
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
			<p class="m-0">Data User</p>
			<div class="col col-lg-2">
				<a class="btn btn-outline-link m-1" data-bs-toggle="modal" data-bs-target="#tambahuser">Tambah User</a>
			</div>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table id="myTable" class="table table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Username</th>
							<th>Level</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($user as $usr) { ?>
						<tr>
							<th scope="row"><?= $no++ ?></th>
							<td><?= $usr['nama']; ?></td>
							<td><?= $usr['username']; ?></td>
							<td><?= $usr['level']; ?></td>
							<td>
								<a data-bs-toggle="modal" data-bs-target="#edituser<?= $usr['id_user'] ?>" class="me-2">
									<iconify-icon icon="cil:color-border" width="25" height="25"></iconify-icon>
								</a>
								<a onClick="confirmDeleteUsr('<?= $usr['id_user']; ?>')" class="me-2">
									<iconify-icon icon="cil:trash" width="25" height="25"></iconify-icon>
								</a>
								<a data-bs-toggle="modal" data-bs-target="#tampiluser<?= $usr['id_user'] ?>" class="me-2">
									<iconify-icon icon="et:search" width="25" height="25"></iconify-icon>
								</a>
							</td>

							<!-- Edit -->
							<div class="modal fade" id="edituser<?= $usr['id_user'] ?>" tabindex="-1"
								aria-labelledby="edituserLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Ubah User</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal"
												aria-label="Close"></button>
										</div>
										<form action="<?= base_url('admin/user/update') ?>" method="post">
											<div class="modal-body">
												<input type="hidden" name="id_user" value="<?= $usr['id_user'] ?>">
												<div class="mb-3">
													<label for="exampleInputtext1" class="form-label">Nama User</label>
													<input type="text" class="form-control" name="nama"
														value="<?= $usr['nama'] ?>" readonly>
												</div>
												<div class="mb-3">
													<label for="exampleInputtext1" class="form-label">Username</label>
													<input type="text" class="form-control" name="username"
														value="<?= $usr['username'] ?>">
												</div>
												<div class="mb-3">
													<label for="exampleInputtext1" class="form-label">Email</label>
													<input type="text" class="form-control" name="email"
														value="<?= $usr['email'] ?>">
												</div>
												<div class="mb-3">
													<label for="exampleInputtext1" class="form-label">No Handphone</label>
													<input type="text" class="form-control" name="no_hp"
														value="<?= $usr['no_hp'] ?>">
												</div>
												<div class="mb-3">
													<label for="exampleInputtext1" class="form-label">Alamat</label>
													<input type="text" class="form-control" name="alamat"
														value="<?= $usr['alamat'] ?>">
												</div>
												<div class="mb-3">
													<label for="exampleInputtext1" class="form-label">Kota</label>
													<input type="text" class="form-control" name="kota"
														value="<?= $usr['kota'] ?>">
												</div>
												<div class="mb-3">
													<label for="exampleInputtext1" class="form-label">Provinsi</label>
													<input type="text" class="form-control" name="provinsi"
														value="<?= $usr['provinsi'] ?>">
												</div>
												<div class="mb-3">
													<label for="exampleInputtext1" class="form-label">Kode Pos</label>
													<input type="number" class="form-control" name="kode_pos"
														value="<?= $usr['kode_pos'] ?>">
												</div>
												<div class="mb-3">
													<select name="level" class="form-select form-control"
														id="defaultSelect">
														<option value="user"
														<?php if ($usr['level'] == 'user') {
															echo "selected";
														} ?>>User</option>
														<?php if ($this->session->userdata('level') == 'admin') { ?>
														<option value="admin"
														<?php if ($usr['level'] == 'admin') {
															echo "selected";
														} ?>>Admin</option>
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

							<!-- Detail -->
							<div class="modal fade" id="tampiluser<?= $usr['id_user'] ?>" tabindex="-1"
								aria-labelledby="tampiluserLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title">Detail User</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal"
												aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<input type="hidden" name="id_user" value="<?= $usr['id_user'] ?>">
											<div class="mb-3">
												<label for="exampleInputtext1" class="form-label">Nama User</label>
												<input type="text" class="form-control" name="nama"
													value="<?= $usr['nama'] ?>" readonly>
											</div>
											<div class="mb-3">
												<label for="exampleInputtext1" class="form-label">Username</label>
												<input type="text" class="form-control" name="username"
													value="<?= $usr['username'] ?>" readonly>
											</div>
											<div class="mb-3">
												<label for="exampleInputtext1" class="form-label">Email</label>
												<input type="text" class="form-control" name="email"
													value="<?= $usr['email'] ?>" readonly>
											</div>
											<div class="mb-3">
												<label for="exampleInputtext1" class="form-label">No Handphone</label>
												<input type="text" class="form-control" name="no_hp"
													value="<?= $usr['no_hp'] ?>" readonly>
											</div>
											<div class="mb-3">
												<label for="exampleInputtext1" class="form-label">Alamat</label>
												<input type="text" class="form-control" name="alamat"
													value="<?= $usr['alamat'] ?>" readonly>
											</div>
											<div class="mb-3">
												<label for="exampleInputtext1" class="form-label">Kota</label>
												<input type="text" class="form-control" name="kota"
													value="<?= $usr['kota'] ?>" readonly>
											</div>
											<div class="mb-3">
												<label for="exampleInputtext1" class="form-label">Provinsi</label>
												<input type="text" class="form-control" name="provinsi"
													value="<?= $usr['provinsi'] ?>" readonly>
											</div>
											<div class="mb-3">
												<label for="exampleInputtext1" class="form-label">Kode Pos</label>
												<input type="number" class="form-control" name="kode_pos"
													value="<?= $usr['kode_pos'] ?>" readonly>
											</div>
											<div class="mb-3">
												<label for="exampleInputtext1" class="form-label">Sebagai</label>
												<input type="text" class="form-control" name="level"
													value="<?= $usr['level']; ?>" readonly>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary"
												data-bs-dismiss="modal">Close</button>
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
