<?php
include('../config/koneksi.php');
$key = $_POST['key'];
$tgl = $_POST['tgl'];

$qLog = $con->query("SELECT * FROM tbl_log JOIN tbl_user ON tbl_log.id_user = tbl_user.id_user WHERE tbl_user.nama LIKE '%$key%' AND tbl_log.waktu LIKE '%$tgl%'");
$no = 1;
while ($data = $qLog->fetch_array()) {
    if ($data['id_log'] < 100) {
        echo '
                    <tr>
                        <td class="border border-dark">'.$no.'</td>
                        <td class="border border-dark">' . $data['id_log'] . '</td>
                            <td class="border border-dark">' . $data['waktu'] . '</td>
                            <td class="border border-dark">' . $data['aktivitas'] . '</td>
                        <td class="border border-dark">' . $data['nama'] . '</td>
                    </tr>
                ';
                $no++;
    }
}
