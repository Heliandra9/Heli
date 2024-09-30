<?php
require('../config/koneksi.php');
session_start();
$tipe= $_POST['tipe'];
$no= $_POST['no'];
$tgl= $_POST['tgl'];
$npasien= $_POST['npasien'];
$ndokter= $_POST['ndokter'];
$nobat= $_POST['nobat'];
$harga= $_POST['harga'];
$qty= $_POST['qty'];
$nama= $_SESSION['ses_nama'];
$total_bayar = $harga * $qty;

$query= $con->query("INSERT INTO tbl_transaksi (id_transaksi, no_transaksi, tgl_transaksi, total_bayar, id_user, id_obat, id_resep) 
    VALUES ('', '$no', '$tgl', '$total_bayar', 
    (SELECT id_user FROM tbl_user WHERE nama = '$nama'), 
    (SELECT id_obat FROM tbl_obat WHERE nama_obat = '$nobat'), 
    '1')");