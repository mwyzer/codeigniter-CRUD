<?php $this->extend('layout/template'); ?>
<?php $this->section('content'); ?>
<h5>Tambah Data Users</h5>
<form action="<?= base_url('users/save'); ?>" method="POST">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama">
  </div>
  <div class="mb-3">
    <label for="kelamin" class="form-label">Kelamin</label>
    <select name="kelamin" class="form-select mb-3" id="kelamin" name="kelamin" >
        <option value="Laki-laki" class="mb-3">Laki-laki</option>
        <option value="Perempuan" class="mb-3">Perempuan</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="username" class="form-control" id="username" name="username"></input>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password"></input>
  </div>
 
  <button type="submit" class="btn btn-primary">Save</button>
</form>
<?php $this->endSection();