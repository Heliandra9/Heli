<?php
require('../config/koneksi.php');
$qUser = $con->query('SELECT * FROM tbl_user');
    while ($data = $qUser->fetch_array()) {
        $par = "'" . $data['id_user'] . "','" . $data['nama'] . "'";
        $par2 = "'" . $data['id_user'] . "','" . $data['type_user'] . "','" . $data['nama'] . "','" . $data['username'] . "','" . $data['telepon'] . "','" . $data['alamat'] . "','" . $data['password'] . "'";
        echo '
            <div class="col col-lg-3 col-md-4 col-sm-12 mt-5">
                <div class="card">
                    <div class="card-header bg-dark bg-opacity-50">
                        <p class="text-light">Nama: ' . $data['nama'] . '</p>
                    </div>
                    <div class="card-body">
                        ' . $data['username'] . ' <br>
                        ' . $data['type_user'] . ' <br>
                        ' . $data['telepon'] . ' <br>
                        ' . $data['alamat'] . '
                    </div>
                    <div class="card-footer">
                        <button onclick="hps(' . $par . ')" class="float-end btn btn-outline-danger">Delete</button>
                        <button onclick="edit(' . $par2 . ')" class="float-end btn btn-outline-primary me-2">Edit</button>
                    </div>
                </div>
            </div>
            ';
    }
