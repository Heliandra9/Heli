<?php
require('../config/koneksi.php');
$query = $con->query("SELECT * FROM tbl_transaksi
    LEFT JOIN  tbl_obat ON tbl_transaksi.id_obat = tbl_obat.id_obat
    WHERE no_transaksi='".$_POST['id']."'");

    $total = 0;
    while($data = $query->fetch_array()){
        echo '
            <tr>
            <td>'.$data['nama_obat'].'<br>'.$data['jumlah_beli'].'X'.number_format($data['harga']).'</td>
            <td>'.number_format($data['jumlah_beli'] * $data['harga']).'</td>
            </tr>
            ';
            $total += $data['jumlah_beli'] * $data['harga'];
    }
    echo '<td><b>GRAND TOTAL </b></td>
    <td class="d-flex justify-content-center">'.number_format($total).'</td>';