<?= var_dump($detail->gambar);

?>
<section style="margin-top:100px;">
  <!-- Product -->
  <div class="container">
    <div class="card mb-4" style="border-radius:10px;">
      <div class="card-body">
        <div class="product">
          <div class="container">
            <div class="row">

              <!-- Product Image -->
              <div class="col-lg-6">
                <div class="product_image_slider_container">
                  <div id="slider" class="flexslider">
                    <ul class="slides">
                      <li>
                        <img src="<?= base_url('uploads/' . $detail->gambar) ?>" style="width:504px; height:504px;" />
                      </li>

                    </ul>
                  </div>
                </div>
              </div>

              <!-- Product Info -->
              <div class="col-lg-6 product_col">
                <div class="product_info">
                  <h1>
                    <div class="product_name"><?= $detail->nama_brg ?></div>

                  </h1>

                  <div class="product_category">In <a href="category.html"><?= $detail->nama_kategori ?></a></div>
                  <h6>Price :</h6>
                  <div class="product_price">RP<span><?= $detail->harga ?></span></div>
                  <h6>Quantity :</h6>

                  <input class="form-control" type="number" name="" id="" style="width:40%;">

                  <div class="product_buttons">
                    <div class="text-right d-flex flex-row align-items-start justify-content-start">
                      <div class="product_button product_fav text-center d-flex flex-column align-items-center justify-content-center">
                        <div>
                          <div><img src="<?= base_url('images/heart_2.svg') ?>" class="svg" alt="">

                            <div>+</div>
                          </div>
                        </div>
                      </div>
                      <div class="product_button product_cart text-center d-flex flex-column align-items-center justify-content-center" id="add_to_cart">
                        <div>
                          <div><img src="<?= base_url('images/cart.svg') ?>" class="svg" alt="">
                            <div>+</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

