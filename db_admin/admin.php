<?php
// error_reporting(0);
session_start();
if (!isset($_SESSION["ses_nama"])){
    header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row bg-secondary bg-opacity-75">
            <div class="navbar">
                <h2><b><i class="fa-solid fa-gear me-2"></i>Admin</b></h2>
                <button type="button" data-bs-target="#nav" data-bs-toggle="collapse" class="navbar-toggler"><span
                        class="navbar-toggler-icon"></span></button>
            </div>

            <div class="collapse" id="nav">
                <nav class="navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="admin.php?konten=aktifitas_user" class="nav-link ms-2 text-dark"><i
                                    class="fa-solid fa-person me-1"></i>Aktifitas User</a></li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="admin.php?konten=kelola_user" class="nav-link text-dark"><i
                                    class="fa-solid fa-user me-1"></i>Kelola User</a></li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="admin.php?konten=kelola_barang" class="nav-link text-dark"><i
                                    class="fa-solid fa-box me-1"></i>Kelola Barang</a></li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="../proses/logout.php" class="nav-link text-dark"><i
                                    class="fa-solid fa-right-from-bracket me-1"></i>Log Out</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <?php
                error_reporting(0);
                include($_GET['konten'] . '.php');
                ?>
            </div>
        </div>
    </div>
    <div id="aksi" class=""></div>
    <div id="updt"></div>
</body>
<script>
    function hps(id, nama) {
        $('#mdlhps').modal('show');
        $('#mdlhps #id_userHapus').val(id);
        $('#mdlhps .modal-body').html('yakin mau melanjutkan hapus user dengan nama <b>' + nama + '</b>. ?');
    }
    function hpsbrg(id, nama) {
        $('#mdlhps').modal('show');
        $('#mdlhps #id_userHapus').val(id);
        $('#mdlhps .modal-body').html('yakin mau melanjutkan hapus user dengan nama <b>' + nama + '</b>. ?');
    }
    function hapus() {
        $('#aksi').load('../proses/hapusUser.php', {
            id: $('#id_userHapus').val()
        }, function () {
            $('mdlhps').modal('hide')
            location.reload()
        })
    }
    function hapusbrg() {
        $('#aksi').load('../proses/hapusBarang.php', {
            id: $('#id_userHapus').val()
        }, function () {
            $('mdlhps').modal('hide')
            location.reload()
        })
    }
    function tbh() {
        $('#mdltbh').modal('show')
    }
    function tambah() {
        $('#aksi').load('../proses/tambah_user.php', {
            tipe: $('#typeUsr').val(),
            nama: $('#nama').val(),
            username: $('#usr').val(),
            alamat: $('#alamat').val(),
            telepon: $('#notel').val(),
            password: $('#password').val()
        }, function () {
            $('#mdltbh').modal('hide')
            location.reload()
        })
    }
    function tambahbrg() {
        $('#aksi').load('../proses/tambah_barang.php', {
            kode: $('#kode').val(),
            nama: $('#nama').val(),
            exp: $('#expDate').val(),
            jumlah: $('#jumlah').val(),
            harga: $('#harga').val()
        }, function () {
            $('#mdltbh').modal('hide')
            location.reload()
        })
    }
    function cekpw() {
        if ($('#password').attr('type') === ('password')) {
            $('#password').removeAttr('type', 'password')
            $('#eye').removeClass('fa-eye-slash')
            $('#password').attr('type', 'text')
            $('#eye').addClass('fa-eye')
        } else {
            $('#password').removeAttr('type', 'text')
            $('#password').attr('type', 'password')
            $('#eye').removeClass('fa-eye')
            $('#eye').addClass('fa-eye-slash')
        }
    }
    function cekpw1() {
        if ($('#ePassword').attr('type') === ('password')) {
            $('#ePassword').removeAttr('type', 'password')
            $('#eye').removeClass('fa-eye-slash')
            $('#ePassword').attr('type', 'text')
            $('#eye').addClass('fa-eye')
        } else {
            $('#ePassword').removeAttr('type', 'text')
            $('#ePassword').attr('type', 'password')
            $('#eye').removeClass('fa-eye')
            $('#eye').addClass('fa-eye-slash')
        }
    }
    function edit(id, tipe, nama, username, telepon, alamat, password) {
        $('#mdledit').modal('show');
        $('#eId').val(id);
        $('#eTipe').val(tipe);
        $('#eNama').val(nama);
        $('#eUsr').val(username);
        $('#eAlamat').val(alamat);
        $('#eNotel').val(telepon);
        $('#ePassword').val(password);
    }
    function editbrg(id, kode, nama, kadaluarsa, jumlah, harga) {
        $('#mdledit').modal('show');
        $('#Eid').val(id);
        $('#Ekode').val(kode);
        $('#Enama').val(nama);
        $('#EexpDate').val(kadaluarsa);
        $('#Ejumlah').val(jumlah);
        $('#Eharga').val(harga);
    }
    function editobat() {
        $('#aksi').load('../proses/editBarang.php', {
            id: $('#Eid').val(),
            kode: $('#Ekode').val(),
            nama: $('#Enama').val(),
            exp: $('#EexpDate').val(),
            jumlah: $('#Ejumlah').val(),
            harga: $('#Eharga').val()
        }, function () {
            $('#mdledit').modal('hide')
            location.reload()
        })
    }
    function lanjut_edit() {
        $('#aksi').load('../proses/editUser.php', {
            id: $('#eId').val(),
            tipe: $('#eTipe').val(),
            nama: $('#eNama').val(),
            username: $('#eUsr').val(),
            alamat: $('#eAlamat').val(),
            telepon: $('#eNotel').val(),
            password: $('#ePassword').val()
        }, function () {
            $('#mdledit').modal('hide')
            location.reload()
        })
    }
</script>
<script src="../config/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>