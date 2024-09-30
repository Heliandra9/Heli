<?php
date_default_timezone_set('Asia/Jakarta');
require('../config/koneksi.php');

$name = $_POST['name'];
$password = $_POST['pw'];

$qLogin = $con->query("SELECT * FROM `tbl_user` 
WHERE username = '$name' AND password = '$password'");



$jml_data = $qLogin->num_rows;
if ($jml_data > 0) {
    $data = $qLogin->fetch_array();
    
    session_start();

    $_SESSION['ses_id'] = $data['id_user'];
    $_SESSION['ses_nama'] = $data['nama'];
    $_SESSION['ses_tipe'] = $data['type_user'];

    $con->query("INSERT INTO `tbl_log`(`id_log`, `waktu`, `aktivitas`, `id_user`) 
    VALUES ('','".date('Y-m-d h:i:sa')."','login','".$data['id_user']."')");
    switch ($data['type_user']) {
        case 'admin':
            header('location:../db_admin/admin.php?konten=aktifitas_user');
        break;
        case 'kasir':
            header('location:../db_kasir/kasir.php?konten=transaksi');
        break;
        case 'gudang':
            header('location:../kasir/index.php');
        break;
        }
} else {
        header('location: ../index.php?konten=error');
            }
