<?php
require('../config/koneksi.php');

$search = $_POST['cari'];
$ket = $_POST['ket'];
$no = $_POST['no'];

if ($ket == 'resep') {
    $qbarang = $con->query("SELECT * FROM `tbl_resep` INNER JOIN tbl_obat ON tbl_resep.id_obat_dibeli = tbl_obat.id_obat WHERE tbl_resep.no_resep LIKE '%$no%' AND tbl_obat.nama_obat LIKE '%$search%'");
    $no = 1;
    echo '<thead>
                <tr>
                    <th class="border border-dark">NO</th>
                    <th class="border border-dark">Kode Obat</th>
                    <th class="border border-dark">Nama Obat</th>
                    <th class="border border-dark">No Resep</th>
                    <th class="border border-dark">Harga</th>
                    <th class="border border-dark">Aksi</th>
                </tr>
            </thead>';

    while ($data = $qbarang->fetch_array()) {
        $par = "'" . $data['id_obat'] . "','" . $data['kode_obat'] . "','" . $data['nama_obat'] . "','" . $data['expired_date'] . "','" . $data['jumlah'] . "','" . $data['harga'] . "'";
        $par2 = "'" . $data['id_obat'] . "','" . $data['jumlah'] . "'";
        echo '
            <tbody>
                <tr>
                    <td class="border border-dark">' . $no . '</td>
                    <td class="border border-dark">' . $data['kode_obat'] . '</td>
                    <td class="border border-dark">' . $data['nama_obat'] . '</td>
                    <td class="border border-dark">' . $data['no_resep'] . '</td>
                    <td class="border border-dark">' . number_format($data['harga']) . '</td>
                    <td class="border border-dark"><button class="btn btn-success"><i class="fa-solid fa-cart-plus"></i></button></td>
                    </tr>
                    </tbody>
                    ';
                    $no++;
                }
            } else {
                $no = 1;
    $qobat = $con->query("SELECT * FROM tbl_obat WHERE nama_obat LIKE '%$search%'");
    echo '<thead>
    <tr>
    <th class="border border-dark">NO</th>
                    <th class="border border-dark">Kode Obat</th>
                    <th class="border border-dark">Nama Obat</th>
                    <th class="border border-dark">Harga</th>
                    <th class="border border-dark">Aksi</th>
                </tr>
            </thead>';
            while ($data = $qobat->fetch_array()) {
                $par = "'" . $data['id_obat'] . "','" . $data['kode_obat'] . "','" . $data['nama_obat'] . "','" . $data['expired_date'] . "','".$data['jumlah']."','" . $data['harga'] . "'";
                $par2 = "'" . $data['id_obat'] . "'";
                echo '
                <tbody>
                <tr>
                <td class="border border-dark">' . $no . '</td>
                <td class="border border-dark">' . $data['kode_obat'] . '</td>
                <td class="border border-dark">' . $data['nama_obat'] . '</td>
                <td class="border border-dark">' . number_format($data['harga']) . '</td>
                <td class="border border-dark"><button class="btn btn-success" onclick="tbh('.$par2.')"><i class="fa-solid fa-cart-plus"></i></button></td>
            </tr>
            </tbody>
        ';
        $no++;
    }
}