<!-- untuk meng extends navbar layout dll -->
<?= $this->extend('layout') ?>
<!-- memanggil contentnya untuk menampilkan sesuatu yang mau di tampilkan di dalam content -->
<?= $this->section('content') ?>
<h1>Halo Guys</h1>
<!-- $data menampilkan data dari controller -->
<?= $data ?>
<?= $this->endSection() ?>