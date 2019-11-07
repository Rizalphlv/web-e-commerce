<div class="page-wrapper">
  <!-- Header -->
  <header class="main-header " id="header">
    <nav class="navbar navbar-static-top navbar-expand-lg">
      <!-- Sidebar toggle button -->
      <button id="sidebar-toggler" class="sidebar-toggle">
        <span class="sr-only">Toggle navigation</span>
      </button>
      <!-- search form -->
      <div class="search-form d-none d-lg-inline-block">


      </div>

      <div class="navbar-right ">
        <ul class="nav navbar-nav">

          <!-- User Account -->
          <li class="dropdown user-menu">
            <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <small><?= $user['username'] ?></small>
              <span class="d-none d-lg-inline-block"></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right">
              <!-- User image -->
              <li class="dropdown-header">
                <div class="d-inline-block">
                  <h6 class="pt-1"><?= $user['email'] ?></h6>
                </div>
              </li>

              <li class="dropdown-footer">
                <a href="<?= base_url('auth/logout') ?>"> <i class="mdi mdi-logout"></i> Log Out </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>


  </header>