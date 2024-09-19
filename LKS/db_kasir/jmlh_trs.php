<?php
require('../config/koneksi.php');
$tgl = date('dmy');
$query = $con->query("SELECT * FROM tbl_transaksi");

if($query->num_rows < 1){
    echo "1";
}else{
    $que = $con->query("SELECT MAX(no_transaksi) AS trs FROM tbl_transaksi");
    $data = $que->fetch_array();
    echo $data['trs'];
}