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
            <!-- <td><?= $data['id_users']; ?></td> -->
            <td><?= $data['nama_users']; ?></td>
            <td><?= $data['kelamin_users']; ?></td>
            <td><?= $data['username']; ?></td>
            <td><a href="<?= base_url('users/ubah/' . $data['id_users']); ?>" class="btn btn-sm btn-info">Ubah</a></td>
          </tr>  
          <?php $no++; endforeach; ?>
      </tbody>
    </table>
    <a href="<?= base_url('users/add'); ?>" class="btn btn-sm btn-primary">ADD</a>
<?php $this->endSection(); ?>