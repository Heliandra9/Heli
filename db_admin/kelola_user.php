<?php
require('../config/koneksi.php');
$qUser = $con->query('SELECT * FROM tbl_user');
?>
<div class="row">
    <div class="col position-relative">
        <h1 align="center"><b>Data User</b></h1>
        <button onclick="tbh()" type="submit"
            class="position-absolute top-0 start-1 mt-4 ms-5 translate-middle mt-1 btn btn-primary"><i
                class="fa-solid fa-plus"></i> tambah</button>
    </div>

</div>
<div class="row" id="data">
    
</div>
</div>
<div class="modal fade" id="mdlhps" tabindex="-1" aria-labelledby="modallabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modallabel">Form hapus akun</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>
            <input type="hidden" id="id_userHapus">
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="$('#mdlhps').modal('hide')">Close</button>
                <button type="button" onclick="hapus()" class="btn btn-danger">Hapus</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="mdltbh" tabindex="-1" aria-labelledby="modallabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modallabel">Form Tambah akun</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>
            <div class="modal-body">
                <div class="row mt-2">
                    <label class="label-control" for="typeUsr">Tipe User:</label>
                    <select class="form-control" id="typeUsr" type="text">
                        <option value="">-</option>
                        <option value="admin">admin</option>
                        <option value="apoteker">apoteker</option>
                        <option value="gudang">gudang</option>
                    </select>
                </div>
                <div class="row mt-2">
                    <label class="label-control" for="nama">Nama Lengkap:</label>
                    <input class="form-control" id="nama" type="text">
                </div>
                <div class="row mt-2">
                    <label class="label-control" for="usr">Username</label>
                    <input class="form-control" id="usr" type="text">
                </div>
                <div class="row mt-2">
                    <label class="label-control" for="alamat">Alamat:</label>
                    <textarea id="alamat" class="form-control"></textarea>
                </div>
                <div class="row mt-2">
                    <label class="label-control" for="notel">NO. Telepon</label>
                    <input class="form-control mt-2" id="notel" type="text">
                </div>
                <div class="row mt-2">
                    <label class="label-control" for="password">Password</label>
                    <div class="input-group"><input class="form-control" id="password" type="password"><button
                            class="btn border" onclick="cekpw()"><i id="eye" class="fa-solid fa-eye-slash"></i></button></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="$('#mdltbh').modal('hide')">Close</button>
                <button type="button" onclick="tambah()" class="btn btn-primary"><i
                        class="fa-solid fa-plus me-2"></i>Tambah</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="mdledit" tabindex="-1" aria-labelledby="modallabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modallabel">Form Tambah akun</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" id="eId">
                <div class="row mt-2">
                    <label class="label-control" for="typeUsr">Tipe User:</label>
                    <select class="form-control" id="eTipe" type="text">
                        <option value="">-</option>
                        <option value="admin">admin</option>
                        <option value="apoteker">apoteker</option>
                        <option value="gudang">gudang</option>
                    </select>
                </div>
                <div class="row mt-2">
                    <label class="label-control" for="nama">Nama Lengkap:</label>
                    <input class="form-control" id="eNama" type="text">
                </div>
                <div class="row mt-2">
                    <label class="label-control" for="usr">Username</label>
                    <input class="form-control" id="eUsr" type="text">
                </div>
                <div class="row mt-2">
                    <label class="label-control" for="alamat">Alamat:</label>
                    <textarea id="eAlamat" class="form-control"></textarea>
                </div>
                <div class="row mt-2">
                    <label class="label-control" for="notel">NO. Telepon</label>
                    <input class="form-control mt-2" id="eNotel" type="text">
                </div>
                <div class="row mt-2">
                    <label class="label-control" for="password">Password</label>
                    <div class="input-group"><input class="form-control" id="ePassword" type="password"><button
                            class="btn border" onclick="cekpw1()"><i id="eye" class="fa-solid fa-eye-slash"></i></button></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="$('#mdledit').modal('hide')">Close</button>
                <button type="button" onclick="lanjut_edit()" class="btn btn-primary"><i
                        class="fa-solid fa-plus me-2"></i>Tambah</button>
            </div>
        </div>
    </div>
</div>
<script>
    window.onload = () =>{
        user()
    }
    function user() {
        $('#data').load('data_user.php')
    }
</script>