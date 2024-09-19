<div class="col col-lg-8 col-md-6 col-sm-4">
    <div class="row mt-2 ">
        <div class="col-lg-2">
            <button onclick="tbh_trs()" class="btn btn-primary"><i class="fa-solid fa-cart-plus"></i> Transaksi baru</button>
        </div>
        <div class="col-lg-2">
            <input type="text" id="trs" readonly>
        </div>
        <div class="col-lg-4">
            <label for="">Keterangan Resep:</label>
                <select class="form-control" onclick="cari()" name="ket" id="ket">
                    <option class="form-control" value="non resep">Non Resep</option>
                    <option class="form-control" value="resep">Resep</option>
                </select>
        </div>
        <div class="col-lg-4">
            <label for="">No Resep</label>
            <input type="text" name="no" onkeyup="cari()" id="no" class="form-control">
        </div>
    </div>
    <div class="row mt-2 border-bottom border-dark pb-5 mt-5">
        <div class="input-group col-lg-12">
            <input type="text" class="form-control" id="cari" onkeyup="cari()" placeholder="cari nama obat">
            <button onclick="cari()" class="btn border"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
    </div>
    <div class="row mt-5">
        <table id="data" class="table">
            
        </table>
    </div>
</div>
<div id="data_transaksi" class="col col-lg-4 col-md-6 col-sm-8 border-start border-dark">
</div>
<script>
    window.onload = () => {
        cari()
    }
    function cari() {
        $('#data').load('data_obat.php', {
            ket: $('#ket').val(),
            no: $('#no').val(),
            cari: $('#cari').val(),
        }, function () { })
    }
</script>