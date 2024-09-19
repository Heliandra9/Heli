<?php
require('../config/koneksi.php');

$id = $_POST['id'];
$type = $_POST['tipe'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$telepon = $_POST['telepon'];
$password = $_POST['password'];

$qEdit = $con->query("UPDATE `tbl_user` SET `type_user`='$type',`nama`='$nama',`alamat`='$alamat',`username`='$username',`telepon`='$telepon',`password`='$password' WHERE `tbl_user`.`id_user` = $id");