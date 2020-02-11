let baseurl = "http://localhost/WASIJA";

//Depan

$('#btnMdlAbout').click(function() {
    $(`<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="Help" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">WASIJA</h5>
                    </div>
                    <div class="modal-body">
                        <div class="text-center"><img class="view zoom" style="width: 130px" src="assets/img/logo2.png" alt="Logo WASIJA"></div>
                        <b>WASIJA</b> adalah aplikasi yang digunakan untuk blah blah blah. (Information of WASIJA )
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>&nbsp;Close</button>
                    </div>
                </div>
            </div>
        </div>`).modal('show');
});

$(function(){

    $('#password_confirm').on('input', function () {
        let one = $('#password_register').val()
        let two = $(this).val()

        if (one == two) {
            if (one.length >= 8) {
                $('#addicon').removeClass('fas fa-times prefix');
                $('#addicon').addClass('fas fa-check prefix');
                $('#addicon').css('color' , 'green')
                $('#btn_submit_register').prop('disabled', false);
            }
        } else {
            $('#addicon').removeClass('fas fa-check prefix');
            $('#addicon').addClass('fas fa-times prefix');
            $('#addicon').css('color' , 'red')
            $('#btn_submit_register').prop('disabled', true);
        }
    })

    $('#password_register').on('input', function () {
        let one = $('#password_confirm').val()
        let two = $(this).val()

        if (one == two) {
            if (one.length >= 8) {
                $('#addicon').removeClass('fas fa-times prefix');
                $('#addicon').addClass('fas fa-check prefix');
                $('#addicon').css('color' , 'green')
                $('#btn_submit_register').prop('disabled', false);
            }
        } else {
            $('#addicon').removeClass('fas fa-check prefix');
            $('#addicon').addClass('fas fa-times prefix');
            $('#addicon').css('color' , 'red')
            $('#btn_submit_register').prop('disabled', true);
        }
    })

})

function showPassword() {
    let key = document.getElementById("password_register")
    if (key.type == "password") {
        key.type = "text";
    } else {
        key.type = "password";
    }
}

// Siswa
var angka = 1;
$('#createDup').click(function() {
    $('.upestAlat').append(`
        <div class="allOfAlat`+ angka++ +`">
            <hr>
            <label for="nama_alat">Nama Alat `+ angka +`</label>
            <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-font"></i></span>
            </div>
            <input type="text" required class="form-control" id="nama_alat" name="nama_alat`+ angka +`" placeholder="Masukkan Nama Alat">
            </div>
            <label for="nama_alat">Deskripsi Alat</label>
            <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-font"></i></span>
            </div>
            <input type="text" required class="form-control" id="desc_alat" name="desc_alat`+ angka +`" placeholder="Masukkan Deskripsi Alat">
            </div>
            <label for="jumlah_alat">Jumlah</label>
            <div class="input-group mb-2">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-font"></i></span>
            </div>
            <input type="number" min="1" oninput="this.value = Math.abs(this.value); if (this.value == 0) { alert('Minimal Meminjam 1'); }" required class="form-control" id="jumlah_alat" name="jumlah`+ angka +`" placeholder="Masukkan Jumlah Alat">
            </div>
        </div>
    `);
    if (angka == 2) {
        $('#deleteDup').css('display', '');
    }
})

$('#deleteDup').click(function() {
    $('.allOfAlat' + --angka).html('');
    if (angka == 1) {
        $('#deleteDup').css('display', 'none');
    }
})


$(function () {
    $('#datepickerAfter').datepicker({
        dateFormat: 'dd-mm-yy',
        minDate: 0
    });
    $('#datepicker').datepicker({
        dateFormat: 'dd-mm-yy'
    });
    $('#tablePeminjaman').DataTable({
        buttons: 'Bfrtip'
    });
    $('#tableToolsCome').DataTable({
        buttons: 'Bfrtip',
        "scrollX": true
    });
    $('#tableToolsCanEmpty').DataTable({
        buttons: 'Bfrtip',
        "scrollX": true
    });
    $('#tableToolsInventarization').DataTable({
        buttons: 'Bfrtip',
        "scrollX": true
    });
    $('#alat-rj1').DataTable({
        buttons: 'Bfrtip'
    });
    $('#alat-rj2').DataTable({
        buttons: 'Bfrtip'
    });
    $('#alat-rja1').DataTable({
        buttons: 'Bfrtip'
    });
    $('#alat-rja2').DataTable({
        buttons: 'Bfrtip'
    });
    $('#tableStudent').DataTable({
        buttons: 'Bfrtip'
    });
})



// Guru
$('#expandAlat').click(function () {
    $(`<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="Help" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-dark">
                        <h5 class="modal-title">Data Barang</h5>
                    </div>
                    <div class="modal-body">
                        <center>
                            <a href="`+ baseurl + "/Teacher/InsertAlat" +`"> Insert Data Barang </a> <hr>
                            <a href="`+ baseurl + "/Teacher/BarangDatang" +`"> Barang Datang </a> <hr>
                            <a href="`+ baseurl + "/Teacher/BarangHabisPakai" +`"> Barang Habis Pakai </a> <hr>
                            <a href="`+ baseurl + "/Teacher/InventarisBarang" +`"> Inventaris Barang </a> <hr>
                            <a href="`+ baseurl + "/Teacher/InventarisRuangan" +`"> Inventaris Ruangan </a>
                        </center>
                    </div>
                </div>
            </div>
        </div>`).modal('show');
});

$('#btnUpdateTools').click(function () {
    $(`<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="Help" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-dark">
                        <h5 class="modal-title">Update Data</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                                <input class="form-control" type="text" value="Name"/><br />
                                <input class="form-control" type="text" value="Spesifikasi"/><br />
                                <input class="form-control" type="text" value="Harga"/><br />
                                <input class="form-control" type="text" value="Dari"/><br />
                                <center>
                                    <button class="btn-primary btn-sm"><i class="fa fa-paper-plane"></i>&nbsp;Update</button>
                                    <button class="btn-danger btn-sm"><i class="fa fa-trash"></i>&nbsp;Delete</button>
                                </center>
                            </div>
                            <div class="col-lg-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>`).modal('show');
});

$('#mdlDetailStudent').click(function () {
    $(`<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="Help" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-dark">
                        <h5 class="modal-title">Update Data Siswa</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                                <input class="form-control" type="text" value="2020"/><br />
                                <center>
                                    <button class="btn-primary btn-sm"><i class="fa fa-paper-plane"></i>&nbsp;Update</button>
                                    <button class="btn-danger btn-sm"><i class="fa fa-trash"></i>&nbsp;Delete</button>
                                </center>
                            </div>
                            <div class="col-lg-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>`).modal('show');
});

$('#btnABStudent').click(function () {
    $(`<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="Help" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-dark">
                        <h5 class="modal-title">Update Data Siswa</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                                <input class="form-control" type="text" placeholder="Approval"/><br />
                                <center>
                                    <button class="btn-primary btn-sm"><i class="fa fa-minus"></i>&nbsp;Kembalikan</button>
                                    <button class="btn-danger btn-sm"><i class="fa fa-plus"></i>&nbsp;Perpanjang</button>
                                </center>
                            </div>
                            <div class="col-lg-1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>`).modal('show');
});