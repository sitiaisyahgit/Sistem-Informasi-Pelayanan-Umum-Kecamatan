<!DOCTYPE html>
<html>
<head>
 <?php $this->load->view('admin/v_meta')?>

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
$this->load->view('admin/v_header');
$this->load->view('admin/v_menu');

?>
     <!-- Left side column. contains the logo and sidebar -->
     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Jenis Pelayanan
          <small></small>
        </h1>
        <?php $this->load->view('admin/v_bread')?>

      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">

              <div class="box">
                <div class="box-header">
                  <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Add Jenis Pelayanan SKTM</a>
                  <a class="btn btn-success btn-flat" href="<?php echo base_url() . 'pegawai/Laporansktm' ?>"><span class="fa fa-print"></span> Cetak</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-striped" style="font-size:13px;">
                    <thead>
                      <tr>
                       <th>Nomor</th>
                       <th>Tanggal</th>
                       <th>Nama</th>
                       <th>Jenis Kelamin</th>
                       <th>NIK</th>
                       <th colspan="2">Tempat Tanggal Lahir</th>
                       <th>Warga Negara</th>
                       <th>Agama</th>
                       <th>Pekerjaan</th>
                       <th>Status </th>
                       <th>Alamat</th>
 


                       <th style="text-align:right;">Aksi</th>
                     </tr>
                   </thead>
                   <tbody>
                    <?php
$no = 0;
foreach ($data->result_array() as $i):
  $nomor_sktm = $i['nomor_sktm'];
  $tanggal_buat = $i['tanggal_buat'];
  $nama = $i['nama'];
  $jenis_kelamin = $i['jenis_kelamin'];
  $nik = $i['nik'];
  $tempat_tl = $i['tempat_tl'];
  $tanggal_lahir = $i['tanggal_lahir'];
  $warganegara = $i['warganegara'];
  $agama = $i['agama'];
  $pekerjaan = $i['pekerjaan'];
  $status_perkawinan = $i['status_perkawinan'];
  $alamat = $i['alamat'];
 
  ?>
                                 <tr>
                                   
                                   <td><?php echo $nomor_sktm; ?></td>
                                   <td><?php echo $tanggal_buat; ?></td>
                                   <td><?php echo $nama; ?></td>
                                   <td><?php echo $jenis_kelamin; ?></td>
                                   <td><?php echo $nik; ?></td>
                                   <td><?php echo $tempat_tl; ?></td>
                                   <td><?php echo $tanggal_lahir; ?></td>
                                   <td><?php echo $warganegara; ?></td>
                                   <td><?php echo $agama; ?></td>
                                   <td><?php echo $pekerjaan; ?></td>
                                   <td><?php echo $status_perkawinan; ?></td>
                                   <td><?php echo $alamat; ?></td>
                           
                                   <td style="text-align:right;">
                                    <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $nomor_sktm; ?>"><span class="fa fa-pencil"></span></a>
                            
                                  </td>
                                </tr>
                              <?php endforeach;?>
                </tbody>
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



  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->

    <!-- ./wrapper -->

    <!--Modal Add Pengguna-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
            <h4 class="modal-title" id="myModalLabel">Add Jenis Pelayanan SKTM</h4>
          </div>
          <form class="form-horizontal" action="<?php echo base_url() . 'admin/sktm/simpan_sktm' ?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">

              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Nomor</label>
                <div class="col-sm-7">
                  <input type="text" name="xnomor_sktm" class="form-control" id="inputUserName" placeholder="Nomor" required>
                </div>
              </div>

              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Tanggal Buat</label>
                <div class="col-sm-7">
                  <input type="date" name="xtanggal_buat" class="form-control" id="inputUserName" placeholder="XX-XX-XXX" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Nama</label>
                <div class="col-sm-7">
                  <input type="text" name="xnama" class="form-control" id="inputUserName" placeholder="Nama" required>
                </div>
              </div>
               <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Jenis Kelamin</label>
                <div class="col-sm-7">
                  <input type='radio' name='xjenis_kelamin' value="Perempuan" required>Perempuan<br>
                  <input type="radio" name="xjenis_kelamin" value="Laki-laik" required> Laki-laki<br>
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">NIK</label>
                <div class="col-sm-7">
                  <input type="text" name="xnik" class="form-control" id="inputUserName" placeholder="XXXXXXXXXXXXXXXX" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Tempat Lahir</label>
                <div class="col-sm-7">
                  <input type="text" name="xtempat_tl" class="form-control" id="inputUserName" placeholder="Cimahi" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label"> Tanggal Lahir</label>
                <div class="col-sm-7">
                  <input type="date" name="xtanggal_lahir" class="form-control" id="inputUserName" placeholder="XX-XX-XXX" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Warga Negara</label>
                <div class="col-sm-7">
                  <input type='radio' name='xwarganegara' value="WNI" required>WNI<br>
                  <input type="radio" name="xwarganegara" value="WNA" required>WNA<br>
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Agama</label>
                <div class="col-sm-7">
                  <input type="text" name="xagama" class="form-control" id="inputUserName" placeholder="Islam" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Pekerjaan</label>
                <div class="col-sm-7">
                  <input type="text" name="xpekerjaan" class="form-control" id="inputUserName" placeholder="Dosen" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Status</label>
                <div class="col-sm-7">
                  <input type='radio' name='xstatus_perkawinan' value="Belum Kawin" required>Belum Kawin<br>
                  <input type="radio" name="xstatus_perkawinan" value="Kawin" required> Kawin<br>
                  <input type='radio' name='xstatus_perkawinan' value="Cerai Hidup" required> Cerai Hidup<br>
                  <input type="radio" name="xstatus_perkawinan" value="Cerai Mati" required> Cerai Mati<br>
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Alamat</label>
                <div class="col-sm-7">
                  <input type="text" name="xalamat" class="form-control" id="inputUserName" placeholder="Cimahi" required>
                </div>
              </div>
 
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>


    <?php foreach ($data->result_array() as $i):
  $nomor_sktm = $i['nomor_sktm'];
  $tanggal_buat = $i['tanggal_buat'];
  $nama = $i['nama'];
  $jenis_kelamin = $i['jenis_kelamin'];
  $nik = $i['nik'];
  $tempat_tl = $i['tempat_tl'];
  $tanggal_lahir = $i['tanggal_lahir'];
  $warganegara = $i['warganegara'];
  $agama = $i['agama'];
  $pekerjaan = $i['pekerjaan'];
  $status_perkawinan = $i['status_perkawinan'];
  $alamat = $i['alamat'];
  
  ?>
                 <!--Modal Edit Pengguna-->
                 <div class="modal fade" id="ModalEdit<?php echo $nomor_sktm; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                   <div class="modal-dialog" role="document">
                     <div class="modal-content">
                       <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                         <h4 class="modal-title" id="myModalLabel">Edit Jenis Pelayanan</h4>
                       </div>
                       <form class="form-horizontal" action="<?php echo base_url() . 'admin/sktm/update_sktm' ?>" method="post" enctype="multipart/form-data">
                         <div class="modal-body">

                           <div class="form-group">
                             <label for="inputUserName" class="col-sm-4 control-label">Nomor</label>
                             <div class="col-sm-7">
                              <input type="hidden" name="nomor_sktm" value="<?php echo $nomor_sktm; ?>"/>
                              <input type="text" name="xnomor_sktm" class="form-control" id="inputUserName" value="<?php echo $nomor_sktm; ?>" placeholder="Nomor" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Tanggal</label>
                            <div class="col-sm-7">
                             <input type="date" name="xtanggal_buat" class="form-control" id="inputUserName" value="<?php echo $tanggal_buat; ?>" placeholder="XX-XX-XXX" required>
                           </div>
                         </div>
                         <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Nama</label>
                            <div class="col-sm-7">
                             <input type="text" name="xnama" class="form-control" id="inputUserName" value="<?php echo $nama; ?>" placeholder="Agus" required>
                           </div>
                         </div>
                          <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Jenis Kelamin</label>
                            <div class="col-sm-7">
                             <input type='radio' name='xjenis_kelamin' value="Perempuan" required>Perempuan<br>
                              <input type="radio" name="xjenis_kelamin" value="Laki-laki" required> Laki-laki<br>
                           </div>
                         </div>
                         <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">NIK</label>
                            <div class="col-sm-7">
                             <input type="text" name="xnik" class="form-control" id="inputUserName" value="<?php echo $nik; ?>" placeholder="XXXXXXXXXXXXXXXX" required>
                           </div>
                         </div>
                         <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Tempat Lahir</label>
                            <div class="col-sm-7">
                             <input type="text" name="xtempat_tl" class="form-control" id="inputUserName" value="<?php echo $tempat_tl; ?>" placeholder="Cimahi" required>
                           </div>
                         </div>
                         <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Tanggal Lahir</label>
                            <div class="col-sm-7">
                             <input type="date" name="xtanggal_lahir" class="form-control" id="inputUserName" value="<?php echo $tanggal_lahir; ?>" placeholder="XX-XX-XXX" required>
                           </div>
                         </div>
                           <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Warga Negara</label>
                            <div class="col-sm-7">
                             <input type='radio' name='xwarganegara' value="WNI" required>WNI<br>
                              <input type="radio" name="xwarganegara" value="WNA" required> WNA<br>
                           </div>
                         </div>
                         <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Agama</label>
                            <div class="col-sm-7">
                             <input type="text" name="xagama" class="form-control" id="inputUserName" value="<?php echo $agama; ?>" placeholder="Islam" required>
                           </div>
                         </div>
                         <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Pekerjaan</label>
                            <div class="col-sm-7">
                             <input type="text" name="xpekerjaan" class="form-control" id="inputUserName" value="<?php echo $pekerjaan; ?>" placeholder="Dosen" required>
                           </div>
                         </div>
                         <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Status</label>
                            <div class="col-sm-7">
                             <input type='radio' name='xstatus_perkawinan' value="Belum Kawin" required>Belum Kawin<br>
                              <input type="radio" name="xstatus_perkawinan" value="Kawin" required> Kawin<br>
                              <input type='radio' name='xstatus_perkawinan' value="Cerai Hidup" required> Cerai Hidup<br>
                              <input type="radio" name="xstatus_perkawinan" value="Cerai Mati" required> Cerai Mati<br>
                           </div>
                         </div>
                         <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Alamat</label>
                            <div class="col-sm-7">
                             <input type="text" name="xalamat" class="form-control" id="inputUserName" value="<?php echo $alamat; ?>" placeholder="Cimahi" required>
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

 <?php foreach ($data->result_array() as $i):
  $nomor_sktm = $i['nomor_sktm'];
  $tanggal_buat = $i['tanggal_buat'];
  $nama = $i['nama'];
  $jenis_kelamin = $i['jenis_kelamin'];
  $nik = $i['nik'];
  $tempat_tl = $i['tempat_tl'];
  $tanggal_lahir = $i['tanggal_lahir'];
  $warganegara = $i['warganegara'];
  $agama = $i['agama'];
  $pekerjaan = $i['pekerjaan'];
  $status_perkawinan = $i['status_perkawinan'];
  $alamat = $i['alamat'];
   
  ?>
               <!--Modal Hapus Pengguna-->
               <div class="modal fade" id="ModalHapus<?php echo $nomor_sktm; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                 <div class="modal-dialog" role="document">
                   <div class="modal-content">
                     <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                       <h4 class="modal-title" id="myModalLabel">Hapus jenis Pelayanan</h4>
                     </div>
                     <form class="form-horizontal" action="<?php echo base_url() . 'admin/sktm/hapus_sktm' ?>" method="post" enctype="multipart/form-data">
                       <div class="modal-body">
                        <input type="hidden" name="nomor_sktm" value="<?php echo $nomor_sktm; ?>"/>
                        <p>Apakah Anda yakin mau menghapus Jenis Pelayanan SKTM<b><?php echo $nama; ?></b> ?</p>

                      </div>
                      <div class="modal-footer">
                       <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                       <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
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
        text: "Jenis Pelayanan SKTM Berhasil disimpan ke database.",
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
          text: "Jenis Pelayanan SKTM berhasil di update",
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
            text: "Jenis Pelayanan SKTM Berhasil dihapus.",
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
