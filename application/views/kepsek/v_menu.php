<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">Menu Utama</li>
      <li class="<?php if ($this->uri->segment(2) == "dashboard") {echo "active";}?>">
        <a href="<?php echo base_url() . 'kepsek/dashboard' ?>">
          <i class="fa fa-home"></i> <span>Dashboard</span>
          <span class="pull-right-container">
            <small class="label pull-right"></small>
          </span>
        </a>
      </li>

      <li class="<?php if ($this->uri->segment(2) == "infouser") {echo "active";}?>">
        <a href="<?php echo base_url() . 'kepsek/infouser' ?>">
          <i class="fa fa-fort-awesome"></i> <span>Info Pengguna</span>
          <span class="pull-right-container">
            <small class="label pull-right"></small>
          </span>
        </a>
      </li>
      <li class="<?php if ($this->uri->segment(2) == "pengguna") {echo "active";}?>">
        <a href="<?php echo base_url() . 'kepsek/pengguna' ?>">
          <i class="fa fa-users"></i> <span>Pengguna</span>
          <span class="pull-right-container">
            <small class="label pull-right"></small>
          </span>
        </a>
      </li>
       <li class="header">Log Out</li>
      <li>
        <a href="<?php echo base_url() . 'admin/login/logout' ?>">
          <i class="fa fa-sign-out"></i> <span>Sign Out</span>
          <span class="pull-right-container">
            <small class="label pull-right"></small>
          </span>
        </a>
      </li>


    </ul>
  </section>
  <!-- /.sidebar -->
</aside>