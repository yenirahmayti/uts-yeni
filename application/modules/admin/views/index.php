<h1 class="text-center">Data Pengguna</h1>
<div class="form-group row">
	<div class="col-md-3">
		<a href="<?= site_url('admin/tambah_pengguna') ?>" class="btn btn-primary mt-3 mb-3">Tambah Data</a>
		<a href="<?= site_url('admin/action') ?>" class="btn btn-success mt-3 mb-3">Export Excel</a>
	</div>
</div>
<div class="table-responsive">
	<table class="table table-bordered table-sm table-hover" id="dataTable" width="100%" cellspacing="0">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Depan</th>
				<th>Nama Belakang</th>
				<th>Email</th>
				<th>Username</th>
				<th>Password</th>
				<th>Level</th>
				<th>Photo</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1;
			foreach ($pengguna as $row) { ?>
				<tr>
					<td><?= $i++ ?></td>
					<td><?= $row->nama_depan ?></td>
					<td><?= $row->nama_belakang ?></td>
					<td><?= $row->email ?></td>
					<td><?= $row->username ?></td>
					<td><?= $row->password ?></td>
					<td><?= $row->level ?></td>
					<td><img src="<?= base_url('assets/img/') . $row->gambar ?>" alt="gambar" width="50px"></td>
					<td>
						<a href="<?= site_url('admin/edit_pengguna/') . $row->id_pengguna ?>" class="btn btn-warning"><i class="fas fa-fw fa-pen"></i></a>
						<a href="<?= site_url('admin/hapus_pengguna/') . $row->id_pengguna ?>" class="btn btn-danger"><i class="fas fa-fw fa-trash"></i></a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>