<body class="sidebar-fixed sidebar-dark header-fixed header-light right-sidebar-toggoler-out " style="overflow: auto;" id="body">
  <script>
    NProgress.configure({
      showSpinner: false
    });
    NProgress.start();
  </script>

  <div class="mobile-sticky-body-overlay"></div>

  <div class="wrapper">

    <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
    <aside class="left-sidebar bg-sidebar">
      <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
          <!-- width="30" height="33" viewBox="0 0 30 33 -->
          <a href="">

            <span class="brand-name"></span>
          </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">

          <!-- sidebar menu -->
          <ul class="nav sidebar-inner" id="sidebar-menu">



            <li class="has-sub">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                <i class="mdi mdi-archive"></i>
                <span class="nav-text">Status Barang</span> <b class="caret"></b>
              </a>
              <ul class="collapse" id="dashboard" data-parent="#sidebar-menu">
                <div class="sub-menu">

                  <li>
                    <a class="sidenav-item-link" href="<?= base_url('c_barang/index') ?>">
                      <span class="nav-text"> Barang</span>
                    </a>
                  </li>

                  <li>
                    <a class="sidenav-item-link" href="<?= base_url('c_kategori/index') ?>">
                      <span class="nav-text">Kategori</span>
                    </a>
                  </li>
                </div>
              </ul>
            </li>

            <li class="has-sub">
              <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#transaksi" aria-expanded="false" aria-controls="dashboard">
                <i class="mdi mdi-cart"></i>
                <span class="nav-text">transaksi</span> <b class="caret"></b>
              </a>
              <ul class="collapse" id="transaksi" data-parent="#sidebar-menu">
                <div class="sub-menu">

                  <li>
                    <a class="sidenav-item-link" href="<?= base_url('c_transaksi') ?>">
                      <span class="nav-text">Transaksi Masuk</span>
                    </a>
                  </li>


                </div>
              </ul>
            </li>
          </ul>

        </div>

        <hr class="separator">
    </aside>