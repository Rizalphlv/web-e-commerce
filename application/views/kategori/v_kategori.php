        <div class="content-wrapper">
          <div class="col-lg-12">
            <h2 style="padding:5px">Kategori</h2>
            <div class="card card-default">
              <div class="card-header card-header-border-bottom">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah_kategori">Tambah</button>

              </div>
              <div class="card-body text-center">
                <table class="table card-table table-responsive table-responsive-large" width="100%" cellspacing="0">

                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode Kategori</th>
                      <th>Kategori</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <?php $b = 1;
                      foreach ($kategori as $kategori) : ?>
                        <td><?= $b; ?></td>
                        <td><?= $kategori->kd_kategori; ?></td>
                        <td><?= $kategori->nama_kategori; ?></td>
                        <td><?= anchor('c_kategori/edit_kategori/' . $kategori->kd_kategori, '<button type="button" class="mb-1 btn btn-sm btn-success">Edit</button>'); ?> | <?= anchor('c_kategori/hapus_kategori/' . $kategori->kd_kategori, '<button type="button" class="mb-1 btn btn-sm btn-danger">Hapus</button>'); ?></td>
                      <?php $b++;
                      endforeach; ?>
                    </tr>
                  </tbody>

                </table>

              </div>

            </div>
            <h6>*For update or delete, Click number of kategori</h6>

          </div>

        </div>
        </div>


        <!-- Modal -->
        <div class="modal fade " id="tambah_kategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">


                <?php echo form_open_multipart(base_url() . 'c_kategori/'); ?>
                <?php if (isset($kategori->kd_kategori)) {
                  $kd = $kategori->kd_kategori + 1;
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
                  <input type="text" class="form-control" name="nama_brg" value="<?= set_value('kd_kategori') ?>">
                </div>


                <label class="text-dark mt-4 font-weight-medium" for="">Warna</label>
                <div class="input-group mb-2">
                  <input type="text" class="form-control" name="warna" value="<?= set_value('nama_kategori') ?>">
                </div>

              </div>
              <button class="btn btn-success" name="button" type="submit">Tambah</button>
              <?php form_close(); ?>
            </div>

          </div>
        </div>