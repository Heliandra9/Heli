<?php
require('../config/koneksi.php');

$type = $_POST['tipe'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$telepon = $_POST['telepon'];
$password = $_POST['password'];

$qTbh = $con->query("INSERT INTO `tbl_user`(`id_user`, `type_user`, `nama`, `alamat`, `username`, `telepon`, `password`) 
VALUES ('','$type','$nama','$alamat','$username','$telepon','$password')");