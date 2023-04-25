<?php $this->extend('layout/template'); ?>
<?php $this->section('content'); ?>
<h3>Data Users</h3>
  <table class="table">
      <thead>
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Nama User</th>
          <th scope="col">Kelamin</th>
          <th scope="col">Username</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $no = 1; 
          foreach ($users as $data) : ?>
          <tr>
            <th scope="row"><?= $no; ?></th>
            <td><?= $data['nama_users']; ?></td>
            <td><?= $data['kelamin_users']; ?></td>
            <td><?= $data['username']; ?></td>
            <td>
              <a href="<?= base_url('users/ubah/' . $data['id_users']); ?>" class="btn btn-sm btn-info">Ubah</a>
              <a href="<?= base_url('users/delete/') . $data['id_users']; ?>" class="btn btn-sm btn-danger">Hapus</a>


            </td>
          </tr>  
          <?php $no++; endforeach; ?>
      </tbody>
    </table>
    <a href="<?= base_url('users/add'); ?>" class="btn btn-sm btn-primary">ADD</a>
    <a href="<?= base_url('users/trash'); ?>" class="btn btn-sm  btn-warning">TRASH</a> 
<?php $this->endSection(); ?>