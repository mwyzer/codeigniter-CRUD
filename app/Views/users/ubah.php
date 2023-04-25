<?php $this->extend('layout/template'); ?>
<?php $this->section('content'); ?>
<h5>Update Data Users</h5>
<form action="<?= base_url('users/update'); ?>" method="POST">
    <input type="hidden" name="kode" value="<?= $users['id_users']; ?>">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama_users" name="nama" value="<?= $users['nama_users'] ?>">
  </div>
  <div class="mb-3">
    <label for="kelamin" class="form-label">Kelamin</label>
    <select name="kelamin" class="form-select mb-3" id="kelamin_users" name="kelamin" >
        <option value="<?= $users['kelamin_users']; ?>"><?= $users['kelamin_users']; ?></option>
        <option value="Laki-laki" class="mb-3">Laki-laki</option>
        <option value="Perempuan" class="mb-3">Perempuan</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="username" class="form-control" id="username" name="username" value="<?= $users['username']; ?>"></input>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" value="<?= $users['password']; ?>"></input>
  </div>
 
  <button type="submit" class="btn btn-primary">Save</button>
</form>
<?php $this->endSection();