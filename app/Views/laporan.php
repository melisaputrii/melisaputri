<?=$this->extend('layouts/admin')?>
<?=$this->section('content')?>
<?php
if (session()->getFlashdata('success')){
    ?>
    <div class="alert alert-success alert-dismissible-fade-show" role="alert">
        <?=session()->getFlashdata('success')?>
        <button type="button" class="close" data-dismiss="alert" aria-label="close"></button>
    </div>
<?php
}
?>
<div class="container">
    <h3>Laporan</h4>

      <table class="table table-bordered">
          <thead>
          <th>NO</th>
          <th>User_id</th>
          <th>Tanggal</th>
          <th>Total Harga</th>
          <th>No Meja</th>
          <th>Nama Pemesan</th>
    </thead>
    <tbody>
        <?php
        $no=1;
        foreach ($data as $row):
        ?>
        <tr>
            <td><?=$no?></td>
            <td><?=$row['id_user']?></td>
            <td><?=$row['tgl']?></td>
            <td><?=$row['total_harga']?></td>
            <td><?=$row['no_meja']?></td>
            <td><?=$row['nama_pemesan']?></td>

        </tr>
        <?php
        $no++;
        endforeach?>
        </tbody>
        </table>
        </div>
        <?= $this->endSection()?>
