
<div class="content-wrapper">
    <div class="content">							
        <div class="row">
			<div class="col-lg-12">
			<div class="card card-default">
			<div class="card-header card-header-border-bottom">
			<h2>Masked Input</h2>
			</div>
			
			<div class="card-body">
            <form action="<?= base_url('c_kategori/edit_kategori/'.$kategori->kd_kategori)?>" method="post">

				<label class="text-dark font-weight-medium" for="">Kode Barang</label>
				<div class="input-group mb-2">
					<input type="text" class="form-control" name="kd_kategori" value="<?= $kategori->kd_kategori?>" disabled>
				</div>

				<label class="text-dark mt-4 font-weight-medium" for="">Nama Barang</label>
        		<div class="input-group mb-2">
					<input type="text" class="form-control" name="nama_kategori" value="<?= $kategori->nama_kategori?>">
				</div>
				</div>
                <button class="btn btn-primary" name="button_kategori" type="submit">Ubah</button>
            </form>
    		</div>
			</div>
        </div>
    </div>
      
            
      

