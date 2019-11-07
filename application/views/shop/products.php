<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section_title text-center">Products</div>
                <hr class="section_title text-center">
            </div>
        </div>

        <div class="row products_row">

            <?php foreach ($barang as $barang) : ?>
                <!-- Product card-->
                <a href="<?= base_url('about_product/product_desc/') . $barang->kd_brg ?>">
                    <div class="col-xl-4 col-md-6">
                        <div class="product">
                            <div class="product_image"><img src="<?= base_url('uploads/' . $barang->gambar)  ?>" alt=""></div>
                            <div class="product_content">
                                <div class="product_info d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div>
                                            <div class="product_name"><a href="product.html"><?= $barang->nama_brg; ?></a></div>
                                            <div class="product_category">In <a href="category.html"><?= $barang->nama_kategori; ?></a></div>
                                        </div>
                                    </div>
                                    <div class="ml-auto text-right">
                                        <div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
                                        <div class="product_price text-right">Rp<span><?= $barang->harga; ?></span></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>

        </div>

    </div>
</div>