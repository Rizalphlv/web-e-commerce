        <div class="content-wrapper">
          <div class="content">							
            <div class="row">
								<div class="col-lg-12">
									<div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2>Masked Input</h2>
										</div>
										<div class="card-body">

                  
                    <form action="<?= base_url().'c_barang/edit/'.$barang->kd_brg?>" method="post">

											<label class="text-dark font-weight-medium" for="">Kode Barang</label>
											<div class="input-group mb-2">
												<input type="text" class="form-control" name="kd_brg" value="<?= $barang->kd_brg?>" disabled>
											</div>
											
											<label class="text-dark mt-4 font-weight-medium" for="">Nama Barang</label>
                      <div class="input-group mb-2">
												<input type="text" class="form-control" name="nama_brg" value="<?= $barang->nama_brg?>">
											</div>
                      
											
                      
                      <label class="text-dark mt-4 font-weight-medium" for="">Warna</label>
                      <div class="input-group mb-2">
												<input type="text" class="form-control" name="warna" value="<?= $barang->warna?>">
                      </div>
                      
                      <label class="text-dark mt-4 font-weight-medium" for="">Harga</label>
                      <div class="input-group mb-2">
												<input type="text" class="form-control" name="harga" value="<?= $barang->harga?>">
                      </div>
                      
                      <label class="text-dark mt-4 font-weight-medium" for="">Kategori</label>
                      <div class="input-group mb-2">
												<select name="kategori" class="form-control">
                        <?php foreach($kategori as $a):?>
                          <option value="<?= $a->kd_kategori?>"><?= $a->nama_kategori?></option>
                        <?php endforeach; ?>
                        </select>
                      </div>

                      <label class="text-dark mt-4 font-weight-medium" for="">Keyword</label>
                      <div class="input-group mb-2">
												<input type="text" class="form-control" name="diskon" value="<?= $barang->keyword?>">
                      </div>

                        <label class="text-dark mt-4 font-weight-medium" for="">Diskon</label>
                      <div class="input-group mb-2">
												<input type="text" class="form-control" name="diskon" value="<?= $barang->diskon?>">
                      </div>

											</div>
                        <button class="btn btn-primary" name="button" type="submit">Ubah</button>
                      </form>
     
									</div>
								</div>
              </div>
      </div>
      
            
      

