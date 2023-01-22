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

  <style type="text/css">
    table {
      border-style: double;
      border-width: 3px;
      border-color: white;
    }
    table tr .text2 {
      text-align: right;
      font-size: 13px;
    }
    table tr .text {
      text-align: center;
      font-size: 13px;
    }
    table tr td {
      font-size: 13px;
    }

  </style>
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
                  <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Add Jenis Pelayanan e-KTP</a>

                
                                                      
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-striped" style="font-size:13px;">
                    <thead>
                      <tr>
                       <th>No</th>
                       <th>Tanggal</th>
                       <th>Nama</th>
                       <th>NIK</th>
                       <th colspan="2">TTL</th>
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
	$nomor_ktp = $i['nomor_ktp'];
	$tanggal_buat = $i['tanggal_buat'];
	$nama = $i['nama'];
  $nik = $i['nik'];
  $tempat_tl = $i['tempat_tl'];
  $tanggal_lahir = $i['tanggal_lahir'];
  $agama = $i['agama'];
  $pekerjaan = $i['pekerjaan'];
  $status_perkawinan = $i['status_perkawinan'];
  $alamat = $i['alamat'];
 	?>
						                     <tr>
						                       
						                       <td><?php echo $nomor_ktp; ?></td>
						                       <td><?php echo $tanggal_buat; ?></td>
                                   <td><?php echo $nama; ?></td>
                                   <td><?php echo $nik; ?></td>
                                   <td><?php echo $tempat_tl; ?></td>
                                   <td><?php echo $tanggal_lahir; ?></td>
                                   <td><?php echo $agama; ?></td>
                                   <td><?php echo $pekerjaan; ?></td>
                                   <td><?php echo $status_perkawinan; ?></td>
                                   <td><?php echo $alamat; ?></td>
						                       <td style="text-align:right;">
						                        <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $nomor_ktp; ?>"><span class="fa fa-pencil"></span></a>
                                    <a class="btn" data-toggle="modal" data-target="#ModalTampil<?php echo $nomor_ktp; ?>"><span class="fa fa-print"></span></a>
						                       
                                    
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
            <h4 class="modal-title" id="myModalLabel">Add Jenis Pelayanan</h4>
          </div>
          <form class="form-horizontal" action="<?php echo base_url() . 'pegawai/ektp/simpan_ektp' ?>" method="post" enctype="multipart/form-data">
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
                  <input type="text" name="xnomor_ktp" class="form-control" id="inputUserName" placeholder="Nomor" required>
                </div>
              </div>

              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Tanggal Buat</label>
                <div class="col-sm-7">
                  <input type="date" name="xtanggal_buat" class="form-control" id="inputUserName" placeholder="Tanggal Buat" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Nama</label>
                <div class="col-sm-7">
                  <input type="text" name="xnama" class="form-control" id="inputUserName" placeholder="Nama" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">NIK</label>
                <div class="col-sm-7">
                  <input type="text" name="xnik" class="form-control" id="inputUserName" placeholder="NIK" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Tempat Lahir</label>
                <div class="col-sm-7">
                  <input type="text" name="xtempat_tl" class="form-control" id="inputUserName" placeholder="Tempat Lahir" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label"> Tanggal Lahir</label>
                <div class="col-sm-7">
                  <input type="date" name="xtanggal_lahir" class="form-control" id="inputUserName" placeholder="Tanggal Lahir" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Agama</label>
                <div class="col-sm-7">
                  <input type="text" name="xagama" class="form-control" id="inputUserName" placeholder="Agama" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Pekerjaan</label>
                <div class="col-sm-7">
                  <input type="text" name="xpekerjaan" class="form-control" id="inputUserName" placeholder="Pekerjaan" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Status</label>
                <div class="col-sm-7">
                  <input type='radio' name='xstatus_perkawinan' value="Belum Kawin" required> Belum Kawin<br>
                  <input type="radio" name="xstatus_perkawinan" value="Kawin" required> Kawin<br>
                  <input type='radio' name='xstatus_perkawinan' value="Cerai Hidup" required> Cerai Hidup<br>
                  <input type="radio" name="xstatus_perkawinan" value="Cerai Mati" required> Cerai Mati<br>
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Alamat</label>
                <div class="col-sm-7">
                  <input type="text" name="xalamat" class="form-control" id="inputUserName" placeholder="Alamat" required>
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
  $nomor_ktp = $i['nomor_ktp'];
  $tanggal_buat = $i['tanggal_buat'];
  $nama = $i['nama'];
  $nik = $i['nik'];
  $tempat_tl = $i['tempat_tl'];
  $tanggal_lahir = $i['tanggal_lahir'];
  $agama = $i['agama'];
  $pekerjaan = $i['pekerjaan'];
  $status_perkawinan = $i['status_perkawinan'];
  $alamat = $i['alamat'];
	?>
						     <!--Modal Edit Pengguna-->
						     <div class="modal fade" id="ModalEdit<?php echo $nomor_ktp; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						       <div class="modal-dialog" role="document">
						         <div class="modal-content">
						           <div class="modal-header">
						             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
						             <h4 class="modal-title" id="myModalLabel">Edit Jenis Pelayanan</h4>
						           </div>
						           <form class="form-horizontal" action="<?php echo base_url() . 'pegawai/ektp/update_ektp' ?>" method="post" enctype="multipart/form-data">
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
						                  <input type="hidden" name="nomor_ktp" value="<?php echo $nomor_ktp; ?>"/>
						                  <input type="text" name="xnomor_ktp" class="form-control" id="inputUserName" value="<?php echo $nomor_ktp; ?>" placeholder="Nomor" required>
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
                            <label for="inputUserName" class="col-sm-4 control-label">Agama</label>
                            <div class="col-sm-7">
                             <input type="text" name="xagama" class="form-control" id="inputUserName" value="<?php echo $agama; ?>" placeholder="Islam" required>
                           </div>
                         </div>
                         <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Pekerjaan</label>
                            <div class="col-sm-7">
                             <input type="text" name="xpekerjaan" class="form-control" id="inputUserName" value="<?php echo $pekerjaan; ?>" placeholder="Bekerja" required>
                           </div>
                         </div>
                         <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Status</label>
                            <div class="col-sm-7">
                             <input type='radio' name='xstatus_perkawinan' value="Belum Kawin" required> Belum Kawin<br>
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
  $nomor_ktp = $i['nomor_ktp'];
  $tanggal_buat = $i['tanggal_buat'];
  $nama = $i['nama'];
  $nik = $i['nik'];
  $tempat_tl = $i['tempat_tl'];
  $tanggal_lahir = $i['tanggal_lahir'];
  $agama = $i['agama'];
  $pekerjaan = $i['pekerjaan'];
  $status_perkawinan = $i['status_perkawinan'];
  $alamat = $i['alamat'];
  ?>
                <div class="modal fade" id="ModalTampil<?php echo $nomor_ktp; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                 <div class="modal-dialog" role="document">
                   <div class="modal-content">
                     <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                       <h4 class="modal-title" id="myModalLabel"></h4>
                     </div>
                     <form class="form-horizontal" action="<?php echo base_url() . 'pegawai/ektp/get_ektp_byid' ?>" method="post" enctype="multipart/form-data">
                       <div class="modal-body">
                        <input type="hidden" name="nomor_ktp" value="<?php echo $nomor_ktp; ?>"/>
                        
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
                                 <p>Nomor : <?php echo $nomor_ktp; ?></p>
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
                                              <td>Tempat Lahir</td>
                                              <td>:</td>
                                              <td><?php echo $tempat_tl; ?></td>
                                          </tr>
                                           <tr>
                                              <td>Tanggal Lahir </td>
                                              <td>:</td>
                                              <td><?php echo $tanggal_lahir; ?></td>
                                          </tr>
                                          <tr>
                                              <td>Agama</td>
                                              <td>:</td>
                                              <td><?php echo $agama; ?></td>
                                          </tr>
                                          <tr>
                                              <td>Pekerjaan</td>
                                              <td>:</td>
                                              <td><?php echo $pekerjaan; ?></td>
                                          </tr>
                                        
                                          <tr>
                                              <td>Status Perkawinan</td>
                                              <td>:</td>
                                              <td><?php echo $status_perkawinan; ?></td>
                                          </tr>
                                           <tr>
                                              <td>Alamat</td>
                                              <td>:</td>
                                              <td><?php echo $alamat; ?></td>
                                          </tr>
                                           
                                          <tr>
                                            <td colspan="3"><p align="justify">Akan melaksanakan perekaman Kartu Tanda Penduduk Elektronik (KTP-El) di Kecamatan Cimanggung Kabupaten/Kota Sumedang Provinsi Jawa Barat Menindak Lanjuti Surat Menteri Dalam Negeri Republik Indonesia Nomor 471.3/5184/SJ Tanggal 13 Desember 2012 Perihal Pelaksanaan Perekaan e-KTP Secara Reguler, bahwa Kepada Penduduk yang telah melaksanakan pengajuan perekaman Kartu Tanda Penduduk Ekonomi diserahkan Surat Keterangan yang berfungsi sebagai pengajuan Perekaman Kartu Tanda Penduduk (KTP EL) sampai dengan proses perekman selesai.</p><br>
                                              <p> Demikian Surat Keterangan ini untuk dibuat untuk digunakan sebagaimana mestinya.</p></td>
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
