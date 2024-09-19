
<div class="row ">
    <h1 class="d-flex justify-content-center"><b>Aktifitas User</b></h1><br>
    <div class="input-group">
        <input type="date" name="date" id="date" class="form-control ms-5"><button onclick="data()" class="btn btn-primary me-5">Cari</button>
        <input type="text" name="cari" id="cari" onkeyup="data()" class="form-control ms-5 me-5" placeholder="Cari Nama User">
    </div>
</div><br>
<table class="table border">
    <thead class="table-head">
        <tr>
            <th class="border border-dark" scope="col">No</th>
            <th class="border border-dark" scope="col">Id Login</th>
            <th class="border border-dark" scope="col">waktu</th>
            <th class="border border-dark" scope="col">aktifitas</th>
            <th class="border border-dark" scope="col">nama user</th>
        </tr>
    </thead>
    <tbody id="data">
        
    </tbody>
</table>
<script>
    window.onload = () => {
        data()
    }
    function data(){
        $('#data').load('data_login.php',{
            key:$('#cari').val(),
            tgl:$('#date').val()
        },function(){}
        )
    }
</script>