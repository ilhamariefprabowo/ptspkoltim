<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url()?>home">
        <div class="sidebar-brand-icon ">
          <i class="fa fa-globe"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><?php echo $settings_app[0]->setting_short_appname?></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()?>home">
          <i class="fa fa-fw fa-home"></i>
          <span>Beranda</span></a>
      </li>
      <hr class="sidebar-divider d-none d-md-block">
      <?php if($this->session->userdata('group_id')==3){?>
      <div class="sidebar-heading">
        Data Seniman Proper
      </div>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('proper/validasi_dokling')?>">
          <i class="fa fa-fw fa-calendar-check"></i>
          <span>Pendaftaran DokLing</span></a>
      </li>
      <?php }?>

      <?php if($this->session->userdata('group_id')==1 OR $this->session->userdata('group_id')==2){?>
      <div class="sidebar-heading">
        Data Sistem
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#dataArsip" aria-expanded="true" aria-controls="dataArsip">
          <i class="fa fa-fw fa-list"></i>
          <span>Berita</span>
        </a>
        <div id="dataArsip" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">List Data:</h6>
            <a class="collapse-item" href="<?php echo site_url('news')?>">Berita</a>
            <a class="collapse-item" href="<?php echo site_url('news_category')?>">Kategori</a>
            
          </div>
        </div>
      </li>
      <?php } ?>

      <?php if($this->session->userdata('group_id')==1){?>
      <!-- <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('aduan')?>">
          <i class="fa fa-fw fa-bullhorn"></i>
          <span>Aduan</span></a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#dataperaturan" aria-expanded="true" aria-controls="dataperaturan">
          <i class="fa fa-fw fa-bullhorn"></i>
          <span>Data Peraturan</span>
        </a>
        <div id="dataperaturan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">List Data Peraturan:</h6>
            <a class="collapse-item" href="<?php echo site_url('rules')?>">Peraturan</a>
            <a class="collapse-item" href="<?php echo site_url('rules_category')?>">Kategori Peraturan</a>
            
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#datapelayanan" aria-expanded="true" aria-controls="datapelayanan">
          <i class="fa fa-fw fa-bullhorn"></i>
          <span>Data Pelayanan</span>
        </a>
        <div id="datapelayanan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">List Data Pelayanan:</h6>
            <a class="collapse-item" href="<?php echo site_url('service')?>">Pelayanan</a>
            <a class="collapse-item" href="<?php echo site_url('service_category')?>">Kategori Pelayanan</a>
            
          </div>
        </div>
      </li>
      

      <!-- <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('proper')?>">
          <i class="fa fa-fw fa-building"></i>
          <span>Seniman Proper</span></a>
      </li> -->
      

     

      
     
      <hr class="sidebar-divider d-none d-md-block">
      <div class="sidebar-heading">
        Setting
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#dataUmum" aria-expanded="true" aria-controls="dataUmum">
          <i class="fa fa-fw fa-map-pin"></i>
          <span>Data Umum</span>
        </a>
        <div id="dataUmum" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">List Data Umum:</h6>
            <a class="collapse-item" href="<?php echo site_url('employee')?>">Pegawai</a>
            <a class="collapse-item" href="<?php echo site_url('gallery')?>">Galeri</a>
            <a class="collapse-item" href="<?php echo site_url('plot')?>">Alur</a>
            <!-- <a class="collapse-item" href="<?php echo site_url('slider')?>">Slider</a> -->
            <hr>
            <a class="collapse-item" href="<?php echo site_url('group')?>">Group</a>
            <a class="collapse-item" href="<?php echo site_url('user')?>">User</a>
          </div>
        </div>
      </li>
      <?php } ?>
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <img src="<?php echo base_url()?>upload/setting/<?php echo $settings_app[0]->setting_logo?>" height="40">&nbsp;&nbsp;<b>SELAMAT DATANG DI <?php echo strtoupper($settings_app[0]->setting_appname)?></b><br>

          
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo strtoupper($this->session->userdata('user_name'))?></span>
                <?php if($this->session->userdata('user_photo')!=""){?>
                <img class="img-profile rounded-circle" src="<?php echo base_url()?>upload/user/<?php echo $this->session->userdata('user_photo');?>" style="border-radius: 50%" alt="User profile picture" height="200">
                <?php }else{ ?>
                <img class="img-profile rounded-circle" src="<?php echo base_url()?>upload/user/default_image.png" style="border-radius: 50%" alt="User profile picture" height="200">
                <?php } ?>
                
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo site_url('user/profile')?>">
                  <i class="fa fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <?php if($this->session->userdata('group_id')==1){?>
                <a class="dropdown-item" href="<?php echo site_url('setting')?>">
                  <i class="fa fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="<?php echo site_url('setting/log')?>">
                  <i class="fa fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <?php } ?>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo site_url('home/logout');?>" data-toggle="modal" data-target="#logoutModal">
                  <i class="fa fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->