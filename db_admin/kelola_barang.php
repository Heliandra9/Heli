<div class="row">
    <div class="col position-relative">
        <h1 align="center"><b>Data obat</b></h1>
        <button onclick="tbh()" type="submit"
            class="position-absolute top-0 start-1 mt-4 ms-5 translate-middle mt-1 btn btn-primary"><i
                class="fa-solid fa-plus"></i> tambah</button>
    </div>
</div>
<div class="row m-3">
    <input class="form-control" type="text" onkeyup="obat()" id="cari">
</div>
<table class="table">
    <thead class="border border-dark">
        <th class="border border-dark">No</th>
        <th class="border border-dark">Kode obat</th>
        <th class="border border-dark">Nama obat</th>
        <th class="border border-dark">Tanggal Kadaluarsa</th>
        <th class="border border-dark">Jumlah obat</th>
        <th class="border border-dark">Harga obat</th>
        <th>Aksi</th>
    </thead>
    <tBody class="border border-dark" id="data">

    </tBody>
</table>
<div class="modal fade" id="mdltbh" tabindex="-1" aria-labelledby="modallabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modallabel">Form Tambah obat</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>
            <div class="modal-body">
                <div class="row mt-2">
                    <label class="label-control" for="kode">Kode obat:</label>
                    <input class="form-control" id="kode" type="text">
                </div>
                <div class="row mt-2">
                    <label class="label-control" for="nama">Nama obat:</label>
                    <input class="form-control" id="nama" type="text">
                </div>
                <div class="row mt-2">
                    <label class="label-control" for="expDate">Tanggal Kadaluarsa:</label>
                    <input type="date" id="expDate" class="form-control">
                </div>
                <div class="row mt-2">
                    <label class="label-control" for="jumlah">Jumlah obat:</label>
                    <input class="form-control mt-2" id="jumlah" type="number">
                </div>
                <div class="row mt-2">
                    <label class="label-control" for="harga">Harga obat:</label>
                    <input class="form-control mt-2" id="harga" type="number">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="$('#mdltbh').modal('hide')">Close</button>
                <button type="button" onclick="tambahbrg()" class="btn btn-primary"><i
                        class="fa-solid fa-plus me-2"></i>Tambah</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="mdlhps" tabindex="-1" aria-labelledby="modallabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modallabel">Form hapus obat</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>
            <input type="hidden" id="id_userHapus">
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="$('#mdlhps').modal('hide')">Close</button>
                <button type="button" onclick="hapusbrg()" class="btn btn-danger">Hapus</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="mdledit" tabindex="-1" aria-labelledby="modallabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modallabel">Form Tambah obat</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>
            <div class="modal-body">
                <div class="row mt-2">
                    <label class="label-control" for="kode">Kode obat:</label>
                    <input class="" id="Eid" type="hidden">
                    <input class="form-control" id="Ekode" type="text">
                </div>
                <div class="row mt-2">
                    <label class="label-control" for="nama">Nama obat:</label>
                    <input class="form-control" id="Enama" type="text">
                </div>
                <div class="row mt-2">
                    <label class="label-control" for="expDate">Tanggal Kadaluarsa:</label>
                    <input type="date" id="EexpDate" class="form-control">
                </div>
                <div class="row mt-2">
                    <label class="label-control" for="jumlah">Jumlah obat:</label>
                    <input class="form-control mt-2" id="Ejumlah" type="number">
                </div>
                <div class="row mt-2">
                    <label class="label-control" for="harga">Harga obat:</label>
                    <input class="form-control mt-2" id="Eharga" type="number">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="$('#mdledit').modal('hide')">Close</button>
                <button type="button" onclick="editobat()" class="btn btn-primary"><i
                        class="fa-solid fa-pen me-2"></i>Edit</button>
            </div>
        </div>
    </div>
</div>
<script>
    window.onload = () => {
        obat()
    }
    function obat() {
        $('#data').load('data_barang.php', {key:$('#cari').val()}, function(){})
    }
</script>