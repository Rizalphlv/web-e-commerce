<div class="content-wrapper">
    <div class="content">
        <div class="col-lg-12">
            <h2 style="padding:5px">Transaksi Masuk</h2>
            <div class="row" id="main_transaksi">

            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade " id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Detai Pesanan No.<?= $transaksi->username ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <h2><?= $transaksi->kd_trans ?></h2>

                </div>
            </div>
        </div>
    </div>