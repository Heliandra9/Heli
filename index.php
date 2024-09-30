<?php
error_reporting(0);
session_start();
if (isset($_SESSION["ses_tipe"])) {
    if ($_SESSION['ses_tipe'] == 'admin') {
        header('location: db_admin/admin.php?konten=aktifitas_user');
    } elseif ($_SESSION['ses_tipe'] == 'kasir') {
        header('location: db_kasir/kasir.php?konten=transaksi');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="bg-dark">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card  position-absolute top-50 start-50 translate-middle">
                    <form method="post" action="proses/login.php">
                        <div class="card-head bg-secondary bg-opacity-50 d-flex justify-content-center">
                            <h3>LOGIN</h3>
                        </div>
                        <div class="card-body bg-secondary bg-opacity-75">
                            <div class="input-group form-floating">
                                <input type="text" class="form-control" name="name" id="name" required>
                                <label for="name">Nama</label>
                            </div>
                            <div class="input-group form-floating mt-3">
                                <input type="password" class="form-control" name="pw" id="pw" required>
                                <button type="button" onclick="cekpw()" id="cek" class="btn btn-outline-secondary"><i
                                id="eye" class="fa-solid fa-eye-slash"></i></button>
                                <label for="pw">Password</label>
                            </div>
                            <div class="row">
                                <?php
                                $_GET['konten'];
                                if ($_GET['konten'] == 'error') {
                                    echo '<p class="text-danger" align="center">Password atau nama salah</p>';
                                } else {

                                }
                                ?>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-center bg-secondary">
                            <button type="submit" name="login" value="login" class="btn btn-primary"><i
                                    class="fa-solid fa-right-to-bracket me-2"></i>Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    function cekpw() {
        if ($('#pw').attr('type') === ('password')) {
            $('#pw').removeAttr('type', 'password')
            $('#eye').removeClass('fa-eye-slash')
            $('#pw').attr('type', 'text')
            $('#eye').addClass('fa-eye')
        } else {
            $('#pw').removeAttr('type', 'text')
            $('#pw').attr('type', 'password')
            $('#eye').removeClass('fa-eye')
            $('#eye').addClass('fa-eye-slash')
        }
    }
</script>
<script src="config/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>