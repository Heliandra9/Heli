<?php
require('../config/koneksi.php');

$kode = $_POST['kode'];
$nama = $_POST['nama'];
$expDate = $_POST['exp'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

$qbrg = $con->query("INSERT INTO `tbl_obat`(`id_obat`, `kode_obat`, `nama_obat`, `expired_date`, `jumlah`, `harga`) 
VALUES ('','$kode','$nama','$expDate','$jumlah','$harga')");