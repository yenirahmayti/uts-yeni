<h1 class="text-center">Edit Pengguna</h1>
<?= $this->session->flashdata('message'); ?>
<?php echo form_open_multipart('admin/update'); ?>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="nd">Nama Depan</label>
            <input type="hidden" name="id" value="<?= $user->id_pengguna ?>">
            <input type="hidden" name="gambar_lama" value="<?= $user->gambar ?>">
            <input type="text" name="nd" id="nd" class="form-control" placeholder="Nama Depan" value="<?= $user->nama_depan ?>" required>
        </div>
        <div class="form-group">
            <label for="nb">Nama Belakang</label>
            <input type="text" name="nb" id="nb" class="form-control" placeholder="Nama Belakang" value="<?= $user->nama_belakang ?>" required>
        </div>
        <div class="form-group">
            <label for="nama">Username</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Username" value="<?= $user->username ?>" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" value="<?= $user->password ?>" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Example@email.com" value="<?= $user->email ?>" required>
        </div>
        <div class="form-group">
            <label for="level">Level</label>
            <select name="level" id="level" class="form-control" required>
                <option value="<?= $user->level ?>">Pilih level</option>
                <option value="Administrator">Administrator</option>
                <option value="Staff">Staff</option>
            </select>
        </div>
        <div class="col-md-12">
            <div class="form-row">
                <div class="form-group">
                    <img src="<?= base_url('assets/img/') . $user->gambar ?>" width="160px" id="output" class="img-thumbnail rounded">
                </div>
                <div class="form-group">
                    <div class="custom-file" class="col-sm-12">
                        <input type="file" accept="image/*" onchange="loadFile(event)" id="preview_gambar" name="gambar">
                        <label class="custom-file-label" for="preview_gambar" id="preview">Pilih Gambar</label>
                    </div>
                    <script>
                        var loadFile = function(event) {
                            var output = document.getElementById('output');
                            output.src = URL.createObjectURL(event.target.files[0]);
                        };
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary btn-block mb-3">Simpan</button>
<a href="<?= site_url('admin') ?>" class="btn btn-danger btn-block mb-3">Kembali</a>
<br>
</form>