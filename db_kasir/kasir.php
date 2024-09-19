<?php
session_start();
if (!isset($_SESSION['ses_nama'])) {
    header('location:../index.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="row bg-secondary">
            <div class="navbar">
                <h2><i class="fa-solid fa-cash-register ms-2 me-2"></i>Kasir</h2>
                <button class="navbar-toggler" data-bs-target="#nav" data-bs-toggle="collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse" id="nav">
                <div class="row">
                    <div class="d-flex justify-content-center">
                        <ul class="navbar-nav">
                            <li class="nav-item "><a href="../proses/logout.php" class="nav-link"><i
                                        class="fa-solid fa-right-from-bracket me-1"></i>Log out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            include($_GET['konten'] . '.php');
            ?>
        </div>
    </div>
    <div id="aksi"></div>
</body>
<script>
    function tbh_trs(){
        $('#aksi').load('jmlh_trs.php', {}, function(res){
            $('#trs').val(res)
        })
    }
    function tbh(id){
        var data = {
            no_transaksi: $('#trs').val(),
            id_user: '<?php echo $_SESSION['ses_nama'];?>',
            id_obat: id,
            jml_beli: 1
        }
        if($('#trs').val() == ''){
            alert('Transaksi belum dibuat')
        }else{
            $('#aksi').load('../proses/tbhitm.php', data, function(){
                tampil_itm()
            })
        }
    }
    function tampil_itm(){
        $('#data_transaksi').load('tampil_item.php', {id:$('#trs').val()}, function(){})
    }
</script>
<script src="../config/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

</html>