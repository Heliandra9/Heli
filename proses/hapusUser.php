<?php
require('../config/koneksi.php');

$id = $_POST['id'];

$qHapus = $con->query("DELETE FROM `tbl_user` WHERE id_user = $id");