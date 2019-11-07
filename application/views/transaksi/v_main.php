<?php $a = 1; ?>
<?php foreach ($transaksi as $transaksi) : ?>
    <?php if ($transaksi->status == 'dikirim') : ?>

    <?php else : ?>
        <div class="col-lg-4">
            <div class="card card-default " style="border-radius:10px">
                <div class="card-header card-header-border-bottom " style="border-top-left-radius:10px; border-top-right-radius:10px;">
                    <h4 style="margin:auto;">Pesanan No-<?= $a++ ?></h4>
                </div>
                <div class="card-body ">
                    <h5 class="text-center mb-3">Pesanan </h5>
                    <h6 class="mb-3">Nama : <?= $transaksi->username ?></h6>
                    <h6 class="mb-3">Harga : <?= $transaksi->biaya_kirim + $transaksi->biaya_pemesanan + $transaksi->biaya_pembayaran ?></h6>
                    <div class="rows text-center">
                        <?= anchor('c_transaksi/info/' . $transaksi->kd_trans, '<button type="button" class="mb-1 btn btn-sm btn-info" style="padding-left:15px; padding-right:15px; margin-right:10px;">Detail<button>'); ?>

                        <?php if ($transaksi->status == 'dipesan') : ?>
                            <button class="mb-1 btn btn-sm btn-warning btnPesan" data-id="<?= $transaksi->kd_trans ?>"> Dipesan</button>
                        <?php else : ?>
                            <button class="mb-1 btn btn-sm btn-success btnProses" data-id="<?= $transaksi->kd_trans ?>"> Diproses</button>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>

<?php endif;
    $a + 1;

endforeach; ?>