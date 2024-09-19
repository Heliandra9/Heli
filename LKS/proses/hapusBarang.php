<?php
require('../config/koneksi.php');

$id= $_POST['id'];

$query = $con->query("DELETE FROM tbl_obat WHERE id_obat = $id");