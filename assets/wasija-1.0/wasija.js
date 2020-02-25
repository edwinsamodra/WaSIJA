// let baseurl = "http://localhost/WASIJA";
let baseurl = "http://192.168.168.188/WASIJA";
let loading_lama = baseurl + '/assets/img/eyeglass_loader.gif';

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
            if (one.length >= 6) {
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
            if (one.length >= 6) {
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

$('.mdlDetailStudent').on('click', function () {
    let id = $(this).val()
    $.ajax({
        type: 'post',
        data: {
            id: id
        },
        dataType: 'json',
        url: baseurl+'/Teacher/show-akun',
        success: function (data) {
            $('#TC_id').val(data[2])
            $('#TC_name').val(data[0]['nama'])
            $('#TC_username').val(data[0]['username']).addClass('disabled', true)
            $('#TC_pwd').val(data[1])
            $('#TC_status').val(function () {
                if (data[0]['kode'] == '1') {
                    return 'Admin'
                }else if (data[0]['kode'] == '2') {
                    return 'Guru'
                }else {
                    return 'Siswa'
                }
            })
            $('#TC_Kelas').val(data[0]['kelas'])
            $('#TC_email').val(data[0]['email'])
            $('#TC_Create').val(data[0]['created_date']).addClass('disabled', true)
            $('#TC_LastDate').val(function () {
                return (data[0]['last_update'] == '0000-00-00 00:00:00') ? '-': data[0]['last_update']
            }).addClass('disabled', true)
            $(`#modal_account`).modal('show')
        }
    })
});

$('#TC_UpdateAkun').on('click', function () {
    let id      = $('#TC_id').val()
    let nama    = $('#TC_name').val()
    let user    = $('#TC_username').val()
    let pwd     = $('#TC_pwd').val()
    let sts     = $('#TC_status').val()
    let kls     = $('#TC_Kelas').val()
    let email   = $('#TC_email').val()

    swal.fire({
        title: 'Peringatan',
        text: 'Apakah Anda yakin ingin mengupdate Akun ?',
        type: 'warning',
        allowOutsideClick: false,
        showCancelButton: true
    }).then(result =>{
        if(result.value){
            $.ajax({
                type: 'post',
                data: {
                    id: id,
                    nama: nama,
                    password: pwd,
                    status: sts,
                    kelas: kls,
                    email: email
                },
                beforeSend: function () {
                    swal.fire({
                        html: `<img style="margin-left: -40px" src=`+loading_lama+`>`,
                        showCancelButton: false,
                        showConfirmButton: false,
                        allowOutsideClick: false
                    })
                },
                url: baseurl + '/Teacher/update',
                // dataType: 'json',
                success: function (data) {
                    swal.close()
                    if (data == 'sama') {
                        swal.fire({
                            title: 'Peringatan',
                            text: 'Tidak ada data yang diupdate !',
                            type: 'warning',
                            allowOutsideClick: false
                        })
                    }else {
                        swal.fire({
                            title: 'Success',
                            text: 'Data ID '+data+' berhasil di update !',
                            type: 'success',
                            allowOutsideClick: false
                        }).then(result=>{
                            window.location.reload()
                        })
                    }
                }
            })
        }
    })
})

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
