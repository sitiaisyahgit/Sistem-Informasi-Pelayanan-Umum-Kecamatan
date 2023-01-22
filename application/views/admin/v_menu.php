<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">Menu Utama</li>
      <li class="<?php if ($this->uri->segment(2) == "dashboard") {echo "active";}?>">
        <a href="<?php echo base_url() . 'admin/dashboard' ?>">
          <i class="fa fa-home"></i> <span>Dashboard</span>
          <span class="pull-right-container">
            <small class="label pull-right"></small>
          </span>
        </a>
      </li>

      <li class="<?php if ($this->uri->segment(2) == "infouser") {echo "active";}?>">
        <a href="<?php echo base_url() . 'admin/infouser' ?>">
          <i class="fa fa-fort-awesome"></i> <span>Info Pengguna</span>
          <span class="pull-right-container">
            <small class="label pull-right"></small>
          </span>
        </a>
      </li>
      <li class="<?php if ($this->uri->segment(2) == "pengguna") {echo "active";}?>">
        <a href="<?php echo base_url() . 'admin/pengguna' ?>">
          <i class="fa fa-users"></i> <span>Pengguna</span>
          <span class="pull-right-container">
            <small class="label pull-right"></small>
          </span>
        </a>
      </li>
      <li class="treeview <?php if ($this->uri->segment(2) == "denahlayanan" || $this->uri->segment(2) == "alurlayanan" || $this->uri->segment(2) == "jenispelayanan") {echo "active";}?>">
        <a href="#">
          <i class="fa fa-server"></i>
          <span> Jenis Pelayanan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
           <li class="<?php if ($this->uri->segment(2) == "ektp") {echo "active";}?>"><a href="<?php echo base_url() . 'admin/ektp' ?>"><i class="fa fa-list"></i>Perekaman E-KTP</a></li>
           <li class="<?php if ($this->uri->segment(2) == "kk") {echo "active";}?>"><a href="<?php echo base_url() . 'admin/kk' ?>"><i class="fa fa-list"></i>Kartu Keluarga</a></li>
           <li class="<?php if ($this->uri->segment(2) == "pinkab") {echo "active";}?>"><a href="<?php echo base_url() . 'admin/pinkab' ?>"><i class="fa fa-list"></i>Pindah Kabupaten</a></li>
           <li class="<?php if ($this->uri->segment(2) == "pinkec") {echo "active";}?>"><a href="<?php echo base_url() . 'admin/pinkec' ?>"><i class="fa fa-list"></i>Pindah Kecamatan</a></li>
           <li class="<?php if ($this->uri->segment(2) == "pindes") {echo "active";}?>"><a href="<?php echo base_url() . 'admin/pindes' ?>"><i class="fa fa-list"></i>Pindah Desa</a></li>
           <li class="<?php if ($this->uri->segment(2) == "sktm") {echo "active";}?>"><a href="<?php echo base_url() . 'admin/sktm' ?>"><i class="fa fa-list"></i>Keterangan Tidak Mampu</a></li>
           <li class="<?php if ($this->uri->segment(2) == "desnikah") {echo "active";}?>"><a href="<?php echo base_url() . 'admin/desnikah' ?>"><i class="fa fa-list"></i>Dispensasi Nikah</a></li>
           <li class="<?php if ($this->uri->segment(2) == "ahliwaris") {echo "active";}?>"><a href="<?php echo base_url() . 'admin/ahliwaris' ?>"><i class="fa fa-list"></i>Ahli Waris</a></li>
           <li class="<?php if ($this->uri->segment(2) == "ketusaha") {echo "active";}?>"><a href="<?php echo base_url() . 'admin/ketusaha' ?>"><i class="fa fa-list"></i>Rekomendasi Kredit Perbankan</a></li>
           <li class="<?php if ($this->uri->segment(2) == "legalisasi") {echo "active";}?>"><a href="<?php echo base_url() . 'admin/legalisasi' ?>"><i class="fa fa-list"></i>Legalisasi</a></li>

          
        </ul>
      </li>
     <li class="treeview <?php if ($this->uri->segment(2) == "denahlayanan" || $this->uri->segment(2) == "alurlayanan" || $this->uri->segment(2) == "jenispelayanan") {echo "active";}?>">
        <a href="#">
          <i class="fa fa-server"></i>
          <span> Jenis Transaksi</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
           <li class="<?php if ($this->uri->segment(2) == "transaksi") {echo "active";}?>"><a href="<?php echo base_url() . 'admin/transaksi' ?>"><i class="fa fa-list"></i>Transaksi</a></li>
           <li class="<?php if ($this->uri->segment(2) == "saldo") {echo "active";}?>"><a href="<?php echo base_url() . 'admin/saldo' ?>"><i class="fa fa-list"></i>Saldo</a></li>
        </ul>
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