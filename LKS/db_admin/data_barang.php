<?php
require('../config/koneksi.php');

$search = $_POST['key'];

$qbarang = $con->query("SELECT * FROM tbl_obat WHERE nama_obat LIKE '%$search%'");
$no = 1;
while ($data = $qbarang->fetch_array()) {
    $par = "'" . $data['id_obat'] . "','" . $data['kode_obat'] . "','" . $data['nama_obat'] . "','" . $data['expired_date'] . "','" . $data['jumlah'] . "','" . $data['harga'] . "'";
    $par2 = "'" . $data['id_obat'] . "','" . $data['nama_obat'] ."'";
    echo'
        <tr>
            <td class="border border-dark">'.$no.'</td>
            <td class="border border-dark">'.$data['kode_obat'].'</td>
            <td class="border border-dark">'.$data['nama_obat'].'</td>
            <td class="border border-dark">'.$data['expired_date'].'</td>
            <td class="border border-dark">'.$data['jumlah'].'</td>
            <td class="border border-dark">'.$data['harga'].'</td>
            <td><div class="input-group"><button class="btn btn-primary" onclick="editbrg('.$par.')"><i class="fa-solid fa-pen me-1"></i>edit</button>
            <button class="btn btn-danger ms-2" onclick="hpsbrg('.$par2.')"><i class="fa-solid fa-trash me-1"></i>Hapus</button></div></td>
        </tr>
    ';
    $no++;
}
