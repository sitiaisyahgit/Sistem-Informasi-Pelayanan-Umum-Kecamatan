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
                  <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Add Jenis Pelayanan Ahli Waris </a>
                  <a class="btn btn-success btn-flat" href="<?php echo base_url() . 'pegawai/Laporanahliwaris' ?>"><span class="fa fa-print"></span> Cetak</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-striped" style="font-size:13px;">
                    <thead>
                      <tr>
                      
                       <th>Nomor</th>
                       <th>Tanggal</th>
                       <th>Nama AH</th> 
                       <th colspan="2">TTL</th>
                       <th>Agama</th>
                       <th>Alamat</th>
                       <th>Nama Pw</th> 
                       <th colspan="2">TTL</th>
                       <th>Agama</th>
                       <th>Alamat</th>
                       <th style="text-align:right;">Aksi</th>
                     </tr>
                   </thead>
                   <tbody>
                    <?php
$no = 0;
foreach ($data->result_array() as $i):
	$nomor_ahliwaris = $i['nomor_ahliwaris'];
	$tanggal_buat = $i['tanggal_buat'];
	$nama_ahli_waris = $i['nama_ahli_waris']; 
  $tempat_tl_ah = $i['tempat_tl_ah'];
  $tanggal_lahir_ah = $i['tanggal_lahir_ah'];
  $jenis_kelamin_ah = $i['jenis_kelamin_ah'];
  $agama_ah = $i['agama_ah'];
 	$alamat_ah = $i['alamat_ah'];
  $nama_pewaris = $i['nama_pewaris']; 
  $tempat_tl_pw = $i['tempat_tl_pw'];
  $tanggal_lahir_pw = $i['tanggal_lahir_pw']; 
  $jenis_kelamin_pw= $i['jenis_kelamin_pw'];
  $agama_pw = $i['agama_pw'];
  $alamat_pw = $i['alamat_pw'];
  ?>
						                     <tr>
						                      
						                       <td><?php echo $nomor_ahliwaris; ?></td>
						                       <td><?php echo $tanggal_buat; ?></td>
                                   <td><?php echo $nama_ahli_waris; ?></td> 
                                   <td><?php echo $tempat_tl_ah; ?></td>
                                   <td><?php echo $tanggal_lahir_ah; ?></td> 
                                   <td><?php echo $agama_ah; ?></td>
                                   <td><?php echo $alamat_ah; ?></td>
                                   <td><?php echo $nama_pewaris; ?></td> 
                                   <td><?php echo $tempat_tl_pw; ?></td>
                                   <td><?php echo $tanggal_lahir_pw; ?></td>
                                   <td><?php echo $agama_pw; ?></td>
                                   <td><?php echo $alamat_pw; ?></td>
						                       <td style="text-align:right;">
						                        <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $nomor_ahliwaris; ?>"><span class="fa fa-pencil"></span></a>
                                     <a class="btn" data-toggle="modal" data-target="#ModalTampil<?php echo $nomor_ahliwaris; ?>"><span class="fa fa-print"></span></a>
                                    
						                        
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
            <h4 class="modal-title" id="myModalLabel">Add Jenis Pelayanan Ahli Waris</h4>
          </div>
          <form class="form-horizontal" action="<?php echo base_url() . 'pegawai/ahliwaris/simpan_ahliwaris' ?>" method="post" enctype="multipart/form-data">
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
                  <input type="text" name="xnomor_ahliwaris" class="form-control" id="inputUserName" placeholder="Nomor" required>
                </div>
              </div>

              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Tanggal Buat</label>
                <div class="col-sm-7">
                  <input type="date" name="xtanggal_buat" class="form-control" id="inputUserName" placeholder="Tanggal Buat" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Nama Ahli Waris</label>
                <div class="col-sm-7">
                  <input type="text" name="xnama_ahli_waris" class="form-control" id="inputUserName" placeholder="Nama Ahli Waris" required>
                </div>
              </div> 
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Tempat Lahir</label>
                <div class="col-sm-7">
                  <input type="text" name="xtempat_tl_ah" class="form-control" id="inputUserName" placeholder="Tempat Lahir" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label"> Tanggal Lahir</label>
                <div class="col-sm-7">
                  <input type="date" name="xtanggal_lahir_ah" class="form-control" id="inputUserName" placeholder="Tangga Lahir" required>
                </div>
              </div>
             <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Jenis Kelamin</label>
                <div class="col-sm-7">
                  <input type='radio' name='xjenis_kelamin_ah' value="P" required>Perempuan<br>
                  <input type="radio" name="xjenis_kelamin_ah" value="L" required> Laki-laki<br>
                </div>
              </div> 
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Agama</label>
                <div class="col-sm-7">
                  <input type="text" name="xagama_ah" class="form-control" id="inputUserName" placeholder="Agama" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Alamat</label>
                <div class="col-sm-7">
                  <input type="text" name="xalamat_ah" class="form-control" id="inputUserName" placeholder="Alamat" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Nama Pewaris</label>
                <div class="col-sm-7">
                  <input type="text" name="xnama_pewaris" class="form-control" id="inputUserName" placeholder="Nama Pewaris" required>
                </div>
              </div> 
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Tempat Lahir</label>
                <div class="col-sm-7">
                  <input type="text" name="xtempat_tl_pw" class="form-control" id="inputUserName" placeholder="Tempat Lahir" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label"> Tanggal Lahir</label>
                <div class="col-sm-7">
                  <input type="date" name="xtanggal_lahir_pw" class="form-control" id="inputUserName" placeholder="Tanggal Lahir" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Jenis Kelamin</label>
                <div class="col-sm-7">
                  <input type='radio' name='xjenis_kelamin_pw' value="P" required>Perempuan<br>
                  <input type="radio" name="xjenis_kelamin_pw" value="L" required> Laki-laki<br>
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Agama</label>
                <div class="col-sm-7">
                  <input type="text" name="xagama_pw" class="form-control" id="inputUserName" placeholder="Islam" required>
                </div>
              </div>
              <div class="form-group">
                <label for="inputUserName" class="col-sm-4 control-label">Alamat</label>
                <div class="col-sm-7">
                  <input type="text" name="xalamat_pw" class="form-control" id="inputUserName" placeholder="Alamat" required>
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
  $nomor_ahliwaris = $i['nomor_ahliwaris'];
  $tanggal_buat = $i['tanggal_buat'];
  $nama_ahli_waris = $i['nama_ahli_waris']; 
  $tempat_tl_ah = $i['tempat_tl_ah'];
  $tanggal_lahir_ah = $i['tanggal_lahir_ah']; 
  $jenis_kelamin_ah = $i['jenis_kelamin_ah'];
  $agama_ah = $i['agama_ah'];
  $alamat_ah = $i['alamat_ah'];
  $nama_pewaris = $i['nama_pewaris']; 
  $tempat_tl_pw = $i['tempat_tl_pw'];
  $tanggal_lahir_pw = $i['tanggal_lahir_pw']; 
  $jenis_kelamin_pw = $i['jenis_kelamin_pw'];
  $agama_pw = $i['agama_pw'];
  $alamat_pw = $i['alamat_pw'];
	?>
						     <!--Modal Edit Pengguna-->
						     <div class="modal fade" id="ModalEdit<?php echo $nomor_ahliwaris; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						       <div class="modal-dialog" role="document">
						         <div class="modal-content">
						           <div class="modal-header">
						             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
						             <h4 class="modal-title" id="myModalLabel">Edit Jenis Pelayanan Ahli Waris</h4>
						           </div>
						           <form class="form-horizontal" action="<?php echo base_url() . 'pegawai/ahliwaris/update_ahliwaris' ?>" method="post" enctype="multipart/form-data">
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
						                  <input type="hidden" name="nomor_ahliwaris" value="<?php echo $nomor_ahliwaris; ?>"/>
						                  <input type="text" name="xnomor_ahliwaris" class="form-control" id="inputUserName" value="<?php echo $nomor_ahliwaris; ?>" placeholder="Nomor" required>
						                </div>
						              </div>
						              <div class="form-group">
						                <label for="inputUserName" class="col-sm-4 control-label">Tanggal Buat</label>
						                <div class="col-sm-7">
						                 <input type="date" name="xtanggal_buat" class="form-control" id="inputUserName" value="<?php echo $tanggal_buat; ?>" placeholder="Tanggal Buat" required>
						               </div>
						             </div>
                         <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Nama Ahli Waris</label>
                            <div class="col-sm-7">
                             <input type="text" name="xnama_ahli_waris" class="form-control" id="inputUserName" value="<?php echo $nama_ahli_waris; ?>" placeholder="Nama Ahli Waris" required>
                           </div>
                         </div>
                         <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Tempat Lahir</label>
                            <div class="col-sm-7">
                             <input type="text" name="xtempat_tl_ah" class="form-control" id="inputUserName" value="<?php echo $tempat_tl_ah; ?>" placeholder="Tempat Lahir" required>
                           </div>
                         </div>
                         <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Tanggal Lahir</label>
                            <div class="col-sm-7">
                             <input type="date" name="xtanggal_lahir_ah" class="form-control" id="inputUserName" value="<?php echo $tanggal_lahir_ah; ?>" placeholder="Tanggal Lahir" required>
                           </div>
                         </div>
                         <div class="form-group">
                          <label for="inputUserName" class="col-sm-4 control-label">Jenis Kelamin</label>
                          <div class="col-sm-7">
                            <input type='radio' name='xjenis_kelamin_ah' value="P" required>Perempuan<br>
                            <input type="radio" name="xjenis_kelamin_ah" value="L" required> Laki-laki<br>
                          </div>
                        </div>
                         <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Agama</label>
                            <div class="col-sm-7">
                             <input type="text" name="xagama_ah" class="form-control" id="inputUserName" value="<?php echo $agama_ah; ?>" placeholder="Agama" required>
                           </div>
                         </div>
                         <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Alamat</label>
                            <div class="col-sm-7">
                             <input type="text" name="xalamat_ah" class="form-control" id="inputUserName" value="<?php echo $alamat_ah; ?>" placeholder="Alamat" required>
                           </div>
                         </div>
                         <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Nama Pewaris</label>
                            <div class="col-sm-7">
                             <input type="text" name="xnama_pewaris" class="form-control" id="inputUserName" value="<?php echo $nama_pewaris; ?>" placeholder="Nama Pewaris" required>
                           </div>
                         </div>
                         <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Tempat Lahir</label>
                            <div class="col-sm-7">
                             <input type="text" name="xtempat_tl_pw" class="form-control" id="inputUserName" value="<?php echo $tempat_tl_pw; ?>" placeholder="Tempat Lahir" required>
                           </div>
                         </div>
                         <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Tanggal Lahir</label>
                            <div class="col-sm-7">
                             <input type="date" name="xtanggal_lahir_pw" class="form-control" id="inputUserName" value="<?php echo $tanggal_lahir_pw; ?>" placeholder="Tanggal Lahir" required>
                           </div>
                         </div>
                        <div class="form-group">
                          <label for="inputUserName" class="col-sm-4 control-label">Jenis Kelamin</label>
                          <div class="col-sm-7">
                            <input type='radio' name='xjenis_kelamin_pw' value="P" required>Perempuan<br>
                            <input type="radio" name="xjenis_kelamin_pw" value="L" required> Laki-laki<br>
                          </div>
                        </div>
                         <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Agama</label>
                            <div class="col-sm-7">
                             <input type="text" name="xagama_pw" class="form-control" id="inputUserName" value="<?php echo $agama_pw; ?>" placeholder="Agama" required>
                           </div>
                         </div>
                         <div class="form-group">
                            <label for="inputUserName" class="col-sm-4 control-label">Alamat</label>
                            <div class="col-sm-7">
                             <input type="text" name="xalamat_pw" class="form-control" id="inputUserName" value="<?php echo $alamat_pw; ?>" placeholder="Alamat" required>
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
 $nomor_ahliwaris = $i['nomor_ahliwaris'];
  $tanggal_buat = $i['tanggal_buat'];
  $nama_ahli_waris = $i['nama_ahli_waris']; 
  $tempat_tl_ah = $i['tempat_tl_ah'];
  $tanggal_lahir_ah = $i['tanggal_lahir_ah'];
  $jenis_kelamin_ah = $i['jenis_kelamin_ah'];  
  $alamat_ah = $i['alamat_ah'];
  $nama_pewaris = $i['nama_pewaris']; 
  $tempat_tl_pw = $i['tempat_tl_pw'];
  $tanggal_lahir_pw = $i['tanggal_lahir_pw'];
  $jenis_kelamin_pw = $i['jenis_kelamin_pw']; 
  $agama_pw = $i['agama_pw'];
  $alamat_pw = $i['alamat_pw'];
  ?>
               <!--Modal Hapus Pengguna-->
               <div class="modal fade" id="ModalTampil<?php echo $nomor_ahliwaris; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                 <div class="modal-dialog" role="document">
                   <div class="modal-content">
                     <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                       <h4 class="modal-title" id="myModalLabel"></h4>
                     </div>
                     <form class="form-horizontal" action="<?php echo base_url() . 'pegawai/ahliwaris/get_ahliwaris_byid' ?>" method="post" enctype="multipart/form-data">
                       <div class="modal-body">
                        <input type="hidden" name="nomor_ahliwaris" value="<?php echo $nomor_ahliwaris; ?>"/>
                        
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
                                 <h3><u>SURAT KETERANGAN AHLI WARIS</u></h3>
                                 <p>Nomor : <?php echo $nomor_ahliwaris; ?></p>
                             </center> 
                             <table border="0" class="table table-sm">
                                          <tr>
                                            <td colspan="3"> 
                                              <p>Yang bertanda tangan di bawah ini, Kepala Desa Cihanjuang Kecamatan CImanggung Kab. Sumedang menerangkan kepada : </p></td>
                                              
                                            </tr>
                                            <tr>
                                              <td>Nama Ahli Waris</td>
                                              <td>:</td>
                                              <td><?php echo $nama_ahli_waris; ?></td>
                                          </tr>
                                           <tr>
                                              <td>Tempat Lahir</td>
                                              <td>:</td>
                                              <td><?php echo $tempat_tl_ah; ?></td>
                                          </tr>
                                           <tr>
                                              <td>Tanggal Lahir</td>
                                              <td>:</td>
                                              <td><?php echo $tanggal_lahir_ah; ?></td>
                                          </tr>
                                           <tr>
                                              <td>Jenis Kelamin</td>
                                              <td>:</td>
                                              <td><?php echo $jenis_kelamin_ah; ?></td>
                                          </tr>
                                          <tr>
                                              <td>Agama</td>
                                              <td>:</td>
                                              <td><?php echo $agama_ah; ?></td>
                                          </tr>
                                          <tr>
                                              <td>Alamat Ahli Waris</td>
                                              <td>:</td>
                                              <td><?php echo $alamat_ah; ?></td>
                                          </tr>
                                          <tr>
                                            <td colspan="3"><p> Bahwa yang tersebut namanya di atas adalah ahli waris dari : </p></td>
                                          </tr>
                                          <tr>
                                              <td>Nama Pewaris</td>
                                              <td>:</td>
                                              <td><?php echo $nama_pewaris; ?></td>
                                          </tr>
                                           <tr>
                                              <td>Tempat Lahir</td>
                                              <td>:</td>
                                              <td><?php echo $tempat_tl_pw; ?></td>
                                          </tr>
                                           <tr>
                                              <td>Tanggal Lahir</td>
                                              <td>:</td>
                                              <td><?php echo $tanggal_lahir_pw; ?></td>
                                          </tr>
                                           <tr>
                                              <td>Jenis Kelamin</td>
                                              <td>:</td>
                                              <td><?php echo $jenis_kelamin_pw; ?></td>
                                          </tr>
                                          <tr>
                                              <td>Agama </td>
                                              <td>:</td>
                                              <td><?php echo $agama_pw; ?></td>
                                          </tr>
                                          <tr>
                                              <td>Alamat Ahli Waris</td>
                                              <td>:</td>
                                              <td><?php echo $alamat_pw; ?></td>
                                          </tr>
                                          <tr>
                                            <td colspan="3"><p>Demikian Surat Keterangan ini kami buat dengan sebenarnya untuk dipergunakan sebagaimana mestinya.</p></td>
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
        text: "Jenis Pelayanan Rekomendasi Kredit Perbankanerhasil disimpan ke database.",
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
          text: "Jenis Pelayanan Rekomendasi Kredit Perbankan berhasil di update",
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
            text: "Jenis Pelayanan Rekomendasi Kredit Perbankan Berhasil dihapus.",
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
