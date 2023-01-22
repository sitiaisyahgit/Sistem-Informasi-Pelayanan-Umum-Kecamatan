<!DOCTYPE html>
<html>
<head>
 <?php $this->load->view('kepsek/v_meta')?>

 <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="<?php echo base_url() . 'assets/bootstrap/css/bootstrap.min.css' ?>">
 <!-- Font Awesome -->
 <link rel="stylesheet" href="<?php echo base_url() . 'assets/font-awesome/css/font-awesome.min.css' ?>">
 <!-- DataTables -->
 <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datatables/dataTables.bootstrap.css' ?>">
 <!-- Theme style -->
 <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/AdminLTE.min.css' ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/skins/_all-skins.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.css' ?>"/>

  </head>
  <body class="hold-transition skin-red sidebar-mini fixed skin-red-light">
    <div class="wrapper">

     <?php
$this->load->view('kepsek/v_header');
$this->load->view('kepsek/v_menu');

?>
     <!-- Left side column. contains the logo and sidebar -->
     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Info Pegawai
          <small></small>
        </h1>
        <?php $this->load->view('kepsek/v_bread')?>

      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">

                <!-- /.box-header -->
                <div class="box-body">
                  <table  class="table table-striped" style="font-size:13px;" align='center'>
                    <center>
                    <thead>
                      <tr>
                        <?php
                        $id_admin = $this->session->userdata('idadmin');
                        $q = $this->db->query("SELECT * FROM tb_user WHERE id='$id_admin'");
                        $c = $q->row_array();
                        ?>
                       <th>
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo base_url() . 'assets/images/' . $c['photo']; ?>" class="user-image" alt="" width="50" height="50"> 
                          </a>
                       </th>
                     </tr>

                     <tr>
                      <th>Nama : 
                      <span class="hidden-xs"><?php echo $c['nama']; ?></span></th>
                     </tr>
                     <tr>
                      <th>Email : 
                      <span class="hidden-xs"><?php echo $c['email']; ?></span></th>
                     </tr>
                     <tr>
                      <th>Jenis Kelamin : 
                      <span class="hidden-xs"><?php echo $c['jenkel']; ?></span></th>
                     </tr>
                     <tr>
                      <th>No HP : 
                      <span class="hidden-xs"><?php echo $c['nohp']; ?></span></th>
                     </tr>
                     <tr>
                      <th>Status : 
                      <span class="hidden-xs"><?php echo $c['status']; ?></span></th>
                     </tr>
                     <tr>
                      <th>Level : 
                      <span class="hidden-xs"><?php echo $c['level']; ?></span></th>
                     </tr>
                    
                     </center>
                   </thead>
                   <tbody>
                   </div>
              </table>


            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('admin/v_footer');?>

  <?php 
  foreach ($data->result_array() as $i):
  $pengguna_id = $i['id'];
  $pengguna_nama = $i['nama'];
  $pengguna_jenkel = $i['jenkel'];
  $pengguna_email = $i['email'];
  $pengguna_username = $i['username'];
  $pengguna_password = $i['password'];
  $pengguna_nohp = $i['nohp'];
  $pengguna_level = $i['level'];
  $pengguna_photo = $i['photo'];
  ?>
                    <!--Modal Edit Pengguna-->
                    <div class="modal fade" id="ModalEdit<?php echo $pengguna_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                            <h4 class="modal-title" id="myModalLabel">Edit Pengguna</h4>
                          </div>
                          <form class="form-horizontal" action="<?php echo base_url() . 'admin/pengguna/update_pengguna' ?>" method="post" enctype="multipart/form-data">
                            <div class="modal-body">

                              <div class="form-group">
                                <label for="inputUserName" class="col-sm-4 control-label">Nama</label>
                                <div class="col-sm-7">
                                 <input type="hidden" name="kode" value="<?php echo $pengguna_id; ?>"/>
                                 <input type="text" name="xnama" class="form-control" id="inputUserName" value="<?php echo $pengguna_nama; ?>" placeholder="Nama Lengkap" required>
                               </div>
                             </div>
                             <div class="form-group">
                              <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
                              <div class="col-sm-7">
                                <input type="email" name="xemail" rm-control" value="<?php echo $pengguna_email; ?>" id="inputEmail3" placeholder="Email" required>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputUserName" class="col-sm-4 control-label">Jenis Kelamin</label>
                              <div class="col-sm-7">
                                <?php if ($pengguna_jenkel == 'Laki-Laki'): ?>
                                 <div class="radio radio-info radio-inline">
                                  <input type="radio" id="inlineRadio1" value="L" name="xjenkel" checked>
                                  <label for="inlineRadio1"> Laki-Laki </label>
                                </div>
                                <div class="radio radio-info radio-inline">
                                  <input type="radio" id="inlineRadio1" value="P" name="xjenkel">
                                  <label for="inlineRadio2"> Perempuan </label>
                                </div>
                                <?php else: ?>
               <div class="radio radio-info radio-inline">
                <input type="radio" id="inlineRadio1" value="L" name="xjenkel">
                <label for="inlineRadio1"> Laki-Laki </label>
              </div>
              <div class="radio radio-info radio-inline">
                <input type="radio" id="inlineRadio1" value="P" name="xjenkel" checked>
                <label for="inlineRadio2"> Perempuan </label>
              </div>
            <?php endif;?>
          </div>
        </div>
        <div class="form-group">
          <label for="inputUserName" class="col-sm-4 control-label">Username</label>
          <div class="col-sm-7">
            <input type="text" name="xusername" class="form-control" value="<?php echo $pengguna_username; ?>" id="inputUserName" placeholder="Username" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
          <div class="col-sm-7">
            <input type="password" name="xpassword" class="form-control" id="inputPassword3" placeholder="Password">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword4" class="col-sm-4 control-label">Ulangi Password</label>
          <div class="col-sm-7">
            <input type="password" name="xpassword2" class="form-control" id="inputPassword4" placeholder="Ulangi Password">
          </div>
        </div>
        <div class="form-group">
          <label for="inputUserName" class="col-sm-4 control-label">Kontak Person</label>
          <div class="col-sm-7">
            <input type="text" name="xkontak" class="form-control" value="<?php echo $pengguna_nohp; ?>" id="inputUserName" placeholder="Kontak Person" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputUserName" class="col-sm-4 control-label">Level</label>
          <div class="col-sm-7">
            <select class="form-control" name="xlevel" required>
             <?php if ($pengguna_level == '1'): ?>
              <option value="1" selected>Administrator</option>
              <option value="2">Author</option>
              <?php else: ?>
                <option value="1">Administrator</option>
                <option value="2" selected>Author</option>
              <?php endif;?>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="inputUserName" class="col-sm-4 control-label">Photo</label>
          <div class="col-sm-7">
            <input type="file" name="filefoto"/>
             <input type="hidden" value="<?php echo $pengguna_photo; ?>" name="gambar">
          </div>
        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Update</button>
      </div>
    </form>
  </div>
</div>
</div>
<?php endforeach;?>








<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url() . 'assets/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url() . 'assets/bootstrap/js/bootstrap.min.js' ?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url() . 'assets/plugins/datatables/jquery.dataTables.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/plugins/datatables/dataTables.bootstrap.min.js' ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url() . 'assets/plugins/slimScroll/jquery.slimscroll.min.js' ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url() . 'assets/plugins/fastclick/fastclick.js' ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() . 'assets/dist/js/app.min.js' ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() . 'assets/dist/js/demo.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.js' ?>"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<?php if ($this->session->flashdata('msg') == 'error'): ?>
  <script type="text/javascript">
    $.toast({
      heading: 'Error',
      text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
      showHideTransition: 'slide',
      icon: 'error',
      hideAfter: false,
      position: 'bottom-right',
      bgColor: '#FF4859'
    });
  </script>

  <?php elseif ($this->session->flashdata('msg') == 'success'): ?>
    <script type="text/javascript">
      $.toast({
        heading: 'Success',
        text: "Jenis Pelayanan Perekaman E-KTP Berhasil disimpan ke database.",
        showHideTransition: 'slide',
        icon: 'success',
        hideAfter: false,
        position: 'bottom-right',
        bgColor: '#7EC857'
      });
    </script>
    <?php elseif ($this->session->flashdata('msg') == 'info'): ?>
      <script type="text/javascript">
        $.toast({
          heading: 'Info',
          text: "Jenis Pelayanan Perekaman E-KTP berhasil di update",
          showHideTransition: 'slide',
          icon: 'info',
          hideAfter: false,
          position: 'bottom-right',
          bgColor: '#00C9E6'
        });
      </script>
      <?php elseif ($this->session->flashdata('msg') == 'success-hapus'): ?>
        <script type="text/javascript">
          $.toast({
            heading: 'Success',
            text: "Jenis Pelayanan Perekaman E-KTP Berhasil dihapus.",
            showHideTransition: 'slide',
            icon: 'success',
            hideAfter: false,
            position: 'bottom-right',
            bgColor: '#7EC857'
          });
        </script>
        <?php else: ?>

        <?php endif;?>
      </body>
      </html>
