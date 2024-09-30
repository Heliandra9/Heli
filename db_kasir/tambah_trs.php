<?php
require('../config/koneksi.php');
date_default_timezone_set("Asia/Jakarta");

$no_transaksi = $_POST['no_transaksi'];
$id_user = $_POST['id_user'];
$id_obat = $_POST['id_obat'];
$jml_beli = $_POST['jml_beli'];
$tgl = date('Y-m-d');

$query = $con->query("SELECT * FROM tbl_transaksi JOIN tbl_obat ON tbl_transaksi.id_obat = tbl_obat.id_obat
  WHERE id_obat = '$id_obat' AND no_transaksi = '$no_transaksi'");
if($query->num_rows > 0){
    $data = $query->fetch_array();
    $jml = $data['jumlah_beli'] + $jml_beli;
    $njml = $data['jumlah'] - $jml_beli;
    $con->query("UPDATE tbl_transaksi SET jumlah_beli = '$jml'
    WHERE id_obat = '$id_obat' AND no_transaksi = '$no_transaksi'");
    $con->query("UPDATE tbl_obat SET jumlah = '$njml'
    WHERE id_obat = '$id_obat'");
}else{
    $con->query("INSERT INTO `tbl_transaksi`(`id_transaksi`, `no_transaksi`, `tgl_transaksi`, `jumlah_beli`, `id_user`, `id_obat`, `id_resep`) 
    VALUES ('','$no_transaksi','$tgl','$jml_beli','$id_user','$id_obat','$id_resep'");
}