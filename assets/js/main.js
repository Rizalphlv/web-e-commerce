const _url = 'http://localhost/toko_online/'

$(document).ready(function () {
    panggil()
    $("#main_transaksi").on('click', 'button.btnPesan', function () {
        var id = $(this).data('id')
        var status = 'diproses'
        update_status(id, status, 'btnProses', 'diProses', '.btnPesan')
    })
    $("#main_transaksi").on('click', 'button.btnProses', function () {
        var id = $(this).data('id')
        var status = 'dikirim'
        update_status(id, status, '', 'Selesai', '.btnProses')
    })
})

function panggil() {
    $('#main_transaksi').load(_url + 'c_transaksi/main')
}

function update_status(id, status, addbtn, htmlbtn, removebtn) {
    $.ajax({
        url: _url + "c_transaksi/update_status/" + id + "/" + status,
        method: "post",
        success: function () {
            panggil()
            $(this).addClass(addbtn)
                .html(htmlbtn)
                .removeClass(removebtn)
        }
    })
}

