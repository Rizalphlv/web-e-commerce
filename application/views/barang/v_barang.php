<div class="content-wrapper">
  <div class="content">
    <?= validation_errors(); ?>
    <?= isset($error) ? $error : "" ?>
    <div class="row">
      <div class="col-lg-12">
        <h2 style="padding:5px">Barang</h2>
        <div class="card card-default">
          <div class="card-header card-header-border-bottom">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalLong">Tambah</button>

          </div>
          <div class="card-body text-center">
            <span class="fa fa-pen"></span>

            <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0" offerflow="auto">
              <thead>
                <tr>
                  <th width="5%">No</th>
                  <th width="5%">Kode Barang</th>
                  <th class="d-none d-md-table-cell">Nama Barang</th>
                  <th width="5%" class="d-none d-md-table-cell">Kategori</th>

                  <th width="5%">Stok</th>
                  <th width="10%">Gambar</th>
                  <th width="5%">Status</th>
                </tr>
              </thead>
              <tbody>
                <!-- table -->

                <?php
                $a = 1;
                foreach ($barang as $barang) : ?>
                  <tr>
                    <td><?= $a++ ?></td>
                    <td>
                      <a class="text-dark" href=""> <?= $barang->kd_brg; ?></a>
                    </td>
                    <td><?= $barang->nama_brg; ?></td>
                    <td><?= $barang->nama_kategori; ?></td>
                    <td><?= $barang->stok; ?></td>

                    <td><img width="100%" src="<?= base_url('uploads/' . $barang->gambar) ?>"></td>
                    <td>
                      <?= anchor('c_barang/edit/' . $barang->kd_brg, '<button type="button" class="mb-1 btn btn-sm btn-success" style="padding-left:15px; padding-right:15px;">Edit</button>'); ?> <br>
                      <?= anchor('c_barang/hapus/' . $barang->kd_brg, '<button type="button" class="mb-1 btn btn-sm btn-danger">Hapus</button>'); ?><br>
                      <?= anchor('c_barang/info/' . $barang->kd_brg, '<button type="button" class="mb-1 btn btn-sm btn-info " style="padding-left:16px; padding-right:16px;">Info</button>'); ?>
                    </td>

                  </tr>
                <?php endforeach; ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>




  <!-- Modal -->
  <div class="modal fade " id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


          <?php echo form_open_multipart(base_url() . 'c_barang/'); ?>
          <?php if (isset($barang->kd_brg)) {
            $kd = $barang->kd_brg + 1;
          } else {
            $kd = 1;
          }
          ?>

          <label class="text-dark font-weight-medium" for="">Kode Barang</label>
          <div class="input-group mb-2">
            <input type="text" class="form-control" value="<?= $kd ?>" disabled>
            <input type="hidden" name="kd_brg" value="<?= $kd ?>">
          </div>


          <label class="text-dark mt-4 font-weight-medium" for="">Nama Barang</label>
          <div class="input-group mb-2">
            <input type="text" class="form-control" name="nama_brg" value="<?= set_value('nama_brg') ?>">
          </div>


          <label class="text-dark mt-4 font-weight-medium" for="">Warna</label>
          <div class="input-group mb-2">
            <input type="text" class="form-control" name="warna" value="<?= set_value('warna') ?>">
          </div>

          <label class="text-dark mt-4 font-weight-medium" for="">Harga</label>
          <div class="input-group mb-2">
            <input type="text" class="form-control" name="harga" value="<?= set_value('harga') ?>">
          </div>

          <label class="text-dark mt-4 font-weight-medium" for="">Kategori</label>
          <div class="input-group mb-2">
            <select name="kategori" class="form-control">
              <?php foreach ($kategori as $a) : ?>
                <option value="<?= $a->kd_kategori ?>"><?= $a->nama_kategori ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <label class="text-dark mt-4 font-weight-medium" for="">Keyword</label>
          <div class="input-group mb-2">
            <input type="text" class="form-control" name="keyword" value="<?= set_value('keyword') ?>">
          </div>

          <label class="text-dark mt-4 font-weight-medium" for="">Ukuran</label>
          <div class="input-group mb-2">
            <input type="text" class="form-control" name="ukuran" value="<?= set_value('ukuran') ?>">
          </div>

          <label class="text-dark mt-4 font-weight-medium" for="">Berat</label>
          <div class="input-group mb-2">
            <input type="text" class="form-control" name="berat" value="<?= set_value('berat') ?>">
          </div>

          <label class="text-dark mt-4 font-weight-medium" for="">Stok</label>
          <div class="input-group mb-2">
            <input type="text" class="form-control" name="stok" value="<?= set_value('stok') ?>">
          </div>

          <label class="text-dark mt-4 font-weight-medium" for="">Diskon</label>
          <div class="input-group mb-2">
            <input type="text" class="form-control" name="diskon" value="<?= set_value('diskon') ?>">
          </div>

          <label class="text-dark mt-4 font-weight-medium" for="">Gambar</label>
          <div class="input-group mb-2">
            <input type="file" name="gambar" id="">
            <?= isset($error) ? $error : "" ?>
          </div>



          <button class="btn btn-success" name="button" type="submit">Tambah</button>
          <?php form_close(); ?>
        </div>

      </div>
    </div>
  </div>