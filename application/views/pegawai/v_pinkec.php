<!DOCTYPE html>
<html>
<head>
 <?php $this->load->view('pegawai/v_meta')?>

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
$this->load->view('pegawai/v_header');
$this->load->view('pegawai/v_menu');

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
        <?php $this->load->view('pegawai/v_bread')?>

      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">

              <div class="box">
                <div class="box-header">
                  <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Add Jenis Pelayanan Pindah Kecamatan</a>
                  <a class="btn btn-success btn-flat" href="<?php echo base_url() . 'pegawai/Laporankec' ?>"><span class="fa fa-print"></span> Cetak</a>
                   
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-striped" style="font-size:13px;">
                    <thead>
                      <tr>
                       <th>Nomor</th>
                       <th>Tanggal</th>
                       <th>Nama</th>
                       <th>Nomor Kartu Keluarga</th>
                       <th>NIK</th>
                       <th>Nama Kepala Keluarga</th>
                       <th>Alamat Sekarang</th>
                       <th>Alamat tujuan</th>
                       <th>Jumlah Pindah</th>


                       <th style="text-align:right;">Aksi</th>
                     </tr>
                   </thead>
                   <tbody>
                    <?php
$no = 0;
foreach ($data->result_array() as $i):
  $nomor_pindah = $i['nomor_pindah'];
  $tanggal_buat = $i['tanggal_buat'];
  $nama = $i['nama'];
  $no_kk = $i['no_kk'];
  $nik = $i['nik'];
  $nama_kepala_kk = $i['nama_kepala_kk'];
  $alamat_sekarang = $i['alamat_sekarang'];
  $alamat_tujuan = $i['alamat_tujuan'];
  $jumlah_pindah = $i['jumlah_pindah'];
  ?>
                                 <tr>
                                   
                                   <td><?php echo $nomor_pindah; ?></td>
                                   <td><?php echo $tanggal_buat; ?></td>
                                   <td><?php echo $nama; ?></td>
                                   <td><?php echo $no_kk; ?></td>
                                   <td><?php echo $nik; ?></td>
                                   <td><?php echo $nama_kepala_kk; ?></td>
                                   <td><?php echo $alamat_sekarang; ?></td>
                                   <td><?php echo $alamat_tujuan; ?></td>
                                   <td><?php echo $jumlah_pindah; ?></td>
                                   <td style="text-align:right;">
                                    <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $nomor_pindah; ?>"><span class="fa fa-pencil"></span></a>
                                    <a class="btn" data-toggle="modal" data-target="#ModalTampil<?php echo $nomor_pindah; ?>"><span class="fa fa-print"></span></a>
                                    
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
  <?php $this->load->view('pegawai/v_footer');?>



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
            <h4 class="modal-title" id="myModalLabel">Add Jenis Pelayanan Pindah Kecamatan</h4>
          </div>
          <form class="form-horizontal" action="<?php echo base_url() . 'pegawai/pinkec/simpan_pinkec' ?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">

               <?php
                        $id_admin = $this->session->userdata('idadmin');
                        $q = $this->db->query("SELECT * FROM tb_user WHERE id='$id_admin'");
                        $c = $q->row_array();
                        ?>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">ID User</label>
                <div class="col-sm-7">
                  <input type="text" name="xid" class="form-control" id="inputUserName" placeholder="ID User" value="<?php echo $c['id']; ?> <?php echo $c['nama']; ?>"  readonly="readonly">
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Nomor</label>
                <div class="col-sm-7">
                  <input type="text" name="xnomor_pindah" class="form-control" id="inputUserName" placeholder="Nomor" required>
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
                <label for="inputUserName" class="col-sm-4 control-label">Nomor Kartu Keluarga</label>
                <div class="col-sm-7">
                  <input type="text" name="xno_kk" class="form-control" id="inputUserName" placeholder="XXXXXXXXXXXXXXXX" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">NIK</label>
                <div class="col-sm-7">
                  <input type="text" name="xnik" class="form-control" id="inputUserName" placeholder="XXXXXXXXXXXXXXXX" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Nama Kepala Keluarga</label>
                <div class="col-sm-7">
                  <input type="text" name="xnama_kepala_kk" class="form-control" id="inputUserName" placeholder="Saepullah" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label"> Alamat Sekarang</label>
                <div class="col-sm-7">
                  <input type="text" name="xalamat_sekarang" class="form-control" id="inputUserName" placeholder="Bandung" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Alamat Tujuan</label>
                <div class="col-sm-7">
                  <input type="text" name="xalamat_tujuan" class="form-control" id="inputUserName" placeholder="Bandung Barat" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Jumlah Pindah</label>
                <div class="col-sm-7">
                  <input type="text" name="xjumlah_pindah" class="form-control" id="inputUserName" placeholder="1" required>
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
  $nomor_pindah = $i['nomor_pindah'];
  $tanggal_buat = $i['tanggal_buat'];
  $nama = $i['nama'];
  $no_kk = $i['no_kk'];
  $nik = $i['nik'];
  $nama_kepala_kk = $i['nama_kepala_kk'];
  $alamat_sekarang = $i['alamat_sekarang'];
  $alamat_tujuan = $i['alamat_tujuan'];
  $jumlah_pindah = $i['jumlah_pindah'];
  ?>
                 <!--Modal Edit Pengguna-->
                 <div class="modal fade" id="ModalEdit<?php echo $nomor_pindah; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                   <div class="modal-dialog" role="document">
                     <div class="modal-content">
                       <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                         <h4 class="modal-title" id="myModalLabel">Edit Jenis Pelayanan Pindah Kecamatan</h4>
                       </div>
                       <form class="form-horizontal" action="<?php echo base_url() . 'pegawai/pinkec/update_pinkec' ?>" method="post" enctype="multipart/form-data">
                         <div class="modal-body">

                             <?php
                        $id_admin = $this->session->userdata('idadmin');
                        $q = $this->db->query("SELECT * FROM tb_user WHERE id='$id_admin'");
                        $c = $q->row_array();
                        ?>
                        <div class="form-group">
                          <label for="inputUserName" class="col-sm-4 control-label">ID User</label>
                          <div class="col-sm-7">
                            <input type="text" name="xid" class="form-control" id="inputUserName" placeholder="ID User" value="<?php echo $c['id']; ?> <?php echo $c['nama']; ?>"  readonly="readonly">
                          </div>
                        </div>
                           <div class="form-group">
                             <label for="inputUserName" class="col-sm-4 control-label">Nomor</label>
                             <div class="col-sm-7">
                              <input type="hidden" name="nomor_pindah" value="<?php echo $nomor_pindah; ?>"/>
                              <input type="text" name="xnomor_pindah" class="form-control" id="inputUserName" value="<?php echo $nomor_pindah; ?>" placeholder="Nomor" required>
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
                            <label for="inputUserName" class="col-sm-4 control-label">Nomor Kartu Keluarga</label>
                            <div class="col-sm-7">
                             <input type="text" name="xno_kk" class="form-control" id="inputUserName" value="<?php echo $no_kk; ?>" placeholder="XXXXXXXXXXXXXXXX" required>
                           </div>
                         </div>
                         <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">NIK</label>
                            <div class="col-sm-7">
                             <input type="text" name="xnik" class="form-control" id="inputUserName" value="<?php echo $nik; ?>" placeholder="XXXXXXXXXXXXXXXX" required>
                           </div>
                         </div>
                         <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Nama Kepala Keluarga</label>
                            <div class="col-sm-7">
                             <input type="text" name="xnama_kepala_kk" class="form-control" id="inputUserName" value="<?php echo $nama_kepala_kk; ?>" placeholder="Saepudin" required>
                           </div>
                         </div>
                         <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Alamat Sekarang</label>
                            <div class="col-sm-7">
                             <input type="text" name="xalamat_sekarang" class="form-control" id="inputUserName" value="<?php echo $alamat_sekarang; ?>" placeholder="Bandung" required>
                           </div>
                         </div>
                         <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Alamat Tujuan</label>
                            <div class="col-sm-7">
                             <input type="text" name="xalamat_tujuan" class="form-control" id="inputUserName" value="<?php echo $alamat_tujuan; ?>" placeholder="Bandung Barat" required>
                           </div>
                         </div>
                         <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Jumlah Pindah</label>
                            <div class="col-sm-7">
                             <input type="text" name="xjumlah_pindah" class="form-control" id="inputUserName" value="<?php echo $jumlah_pindah; ?>" placeholder="2" required>
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
  $nomor_pindah = $i['nomor_pindah'];
  $tanggal_buat = $i['tanggal_buat'];
  $nama = $i['nama'];
  $no_kk = $i['no_kk'];
  $nik = $i['nik'];
  $nama_kepala_kk = $i['nama_kepala_kk'];
  $alamat_sekarang = $i['alamat_sekarang'];
  $alamat_tujuan = $i['alamat_tujuan'];
  $jumlah_pindah = $i['jumlah_pindah'];
  ?>
              <div class="modal fade" id="ModalTampil<?php echo $nomor_pindah; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                 <div class="modal-dialog" role="document">
                   <div class="modal-content">
                     <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                       <h4 class="modal-title" id="myModalLabel"></h4>
                     </div>
                     <form class="form-horizontal" action="<?php echo base_url() . 'pegawai/pinkec/get_pinkec_byid' ?>" method="post" enctype="multipart/form-data">
                       <div class="modal-body">
                        <input type="hidden" name="nomor_pindah" value="<?php echo $nomor_pindah; ?>"/>
                        
                        <!DOCTYPE html>
                          <html lang="">
                          <head>
                              <meta charset="utf-8">
                              <meta name="viewport" content="width=device-width, initial-scale=1.0">
                              <title>Cetak Surat</title>
                              <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
                              <style>
                                  #wrapper {
                                      width:600px;
                                      margin:auto;
                                  }
                              </style>
                          </head>

                          <body>
                            <div id="wrapper">
                             <center>
                                 <h3><u>SURAT KETERANGAN</u></h3>
                                 <p>Nomor : <?php echo $nomor_pindah; ?></p>
                             </center> 
                             <table border="0" class="table table-sm">
                                          <tr>
                                            <td colspan="3"> 
                                              <p>Yangbertanda tangan dibawah ini, merangkan bahwa penduduk : </p></td>
                                              
                                            </tr>
                                            <tr>
                                              <td>Nama </td>
                                              <td>:</td>
                                              <td><?php echo $nama; ?></td>
                                          </tr>
                                           <tr>
                                              <td>NIK</td>
                                              <td>:</td>
                                              <td><?php echo $nik; ?></td>
                                          </tr>
                                           <tr>
                                              <td>Nama Kepala KK</td>
                                              <td>:</td>
                                              <td><?php echo $nama_kepala_kk; ?></td>
                                          </tr>
                                           <tr>
                                              <td>Alamat Sekarang </td>
                                              <td>:</td>
                                              <td><?php echo $alamat_sekarang; ?></td>
                                          </tr>
                                          <tr>
                                              <td>Alamat Tujuan</td>
                                              <td>:</td>
                                              <td><?php echo $alamat_tujuan; ?></td>
                                          </tr>
                                          <tr>
                                              <td>Jumlah Pindah</td>
                                              <td>:</td>
                                              <td><?php echo $jumlah_pindah; ?></td>
                                          </tr>
                                        
                                           
                                          <tr>
                                            <td colspan="3">
                                              <p>Demikian Surat Keterangan Pindah Kecamatan dibuat dan diberikan kepada pemohon untuk digunakan sebagaimana mestinya</p></td>
                                          </tr>
                                         <tr align="right">
                                            <td colspan="3"> Sumedang, <?php echo $tanggal_buat; ?></td>
                                           <tr align="right">
                                              <td colspan="3">Camat Cimanggung</td>
                                           </tr>
                                          </tr>
                                          <tr>
                                            <td colspan="3"></td>
                                          </tr>
                                         
                                      </table>
                                      <p align="right"><u>PULUNG RESBANA, S.IP</u></p>
                                         <p align="right">NIP. 19661109 1998021 001</p>



                          </div>
                          </body>
                          </html>

                      </div>
                      <div class="modal-footer">
                       
                       <button type="submit" class="btn btn-primary btn-flat" id="simpan"> Cetak </button>
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
        text: "Jenis Pelayanan Pindah Kecamatan Berhasil disimpan ke database.",
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
          text: "Jenis Pelayanan Pindah Kecamatan berhasil di update",
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
            text: "Jenis Pelayanan Pindah Kecamatan Berhasil dihapus.",
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
