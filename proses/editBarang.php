<?php
require('../config/koneksi.php');

$id= $_POST['id'];
$kode= $_POST['kode'];
$nama= $_POST['nama'];
$exp= $_POST['exp'];
$jumlah= $_POST['jumlah'];
$harga= $_POST['harga'];


$query = $con->query("UPDATE `tbl_obat` 
SET `id_obat`='$id',`kode_obat`='$kode',`nama_obat`='$nama',`expired_date`='$exp',`jumlah`='$jumlah',`harga`='$harga' 
WHERE tbl_obat.id_obat = $id");