<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <i class="fas fa-hospital"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Dr Ramdan Hospital Sevice</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('index.php/dashboard/home') ?>">
        <i class="fas fa-home"></i>
          <span>HOME</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-briefcase-medical"></i>
          <span>Apotek Online</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Kategori:</h6>
            <a class="collapse-item" href="<?php echo base_url('index.php/dashboard/semua') ?>">Semua</a>
            <a class="collapse-item" href="<?php echo base_url('index.php/kategori/alatkesehatan') ?>"><i class="fab fa-accessible-icon mr-2"></i>Alat Kesehatan</a>
            <a class="collapse-item" href="<?php echo base_url('index.php/kategori/obat') ?>"> <i class="fas fa-pills mr-2"></i>Obat</a>
            <a class="collapse-item" href="<?php echo base_url('index.php/kategori/minuman') ?>"><i class="fas fa-wine-bottle mr-2"></i>Minuman</a>
            <a class="collapse-item" href="<?php echo base_url('index.php/kategori/vitamin') ?>"><i class="fas fa-tablets mr-2"></i>Vitamin</a>
          </div>
        </div>
      </li>

      
      <!-- Divider -->
      <hr class="sidebar-divider">

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('index.php/admin/daftar/tampil_praktik') ?>">
          <i class="fas fa-list"></i>
          <span>Jadwal Praktik</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <div class="navbar">
              <ul class="nav navbar-nav navbar-right">
                <li>
                <div class="btn btn-sm btn-outline-primary ml-2">
                  <i class="fas fa-cart-plus"></i>
                  <?php $keranjang = 'keranjang Belanja: ' .$this->cart->total_items 
                  (). ' items' ?>

                  <?php echo anchor('dashboard/detail_keranjang',$keranjang )  ?>
                </div>
                </li>
              </ul>
              
              <div class="topbar-divider d-none d-sm-block"></div>
              
              <ul class="na navbar-nav navbar-right">
                
                  <?php if($this->session->userdata('username')) { ?>
                    <div class="btn btn-sm btn-outline-primary ml-2"><li><div class="text-uppercase"><i class="fas fa-user mr-2"></i><?php echo $this->session->userdata(
                      'username') ?></div></li></div>
                    <div class="btn btn-sm btn-outline-primary ml-2"><li class="ml-2"><?php echo anchor('auth/logout','Logout') ?></li></div>
                  <?php } else { ?>
                    <li><?php echo anchor('auth/login','Login'); ?></li>
                  <?php } ?>
                
              </ul>

           </div>

           


          </ul>

        </nav>