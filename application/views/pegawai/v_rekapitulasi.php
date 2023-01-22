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
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/daterangepicker/daterangepicker.css' ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/AdminLTE.min.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/daterangepicker/daterangepicker.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/timepicker/bootstrap-timepicker.min.css' ?>">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datepicker/datepicker3.css' ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/skins/_all-skins.min.css' ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.css' ?>"/>

</head>
 <body class="hold-transition skin-red sidebar-mini fixed skin-red-light">
  <div class="wrapper">
    <!--Header-->
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
          Rekapitulasi
          <small></small>
        </h1>
        <?php $this->load->view('pegawai/v_bread')?>

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
                       
                     <tr>
                      <th>Rekapitulasi E-KTP : <a class="btn btn-success btn-flat" href="<?php echo base_url() . 'pegawai/Laporanpdf' ?>"><span class="fa fa-print"></span> Cetak </a></th> 
                     </tr>
                     <tr>
                      <th>Rekapitulasi Kartu Keluarga : <a class="btn btn-success btn-flat" href="<?php echo base_url() . 'pegawai/Laporanpdf' ?>"><span class="fa fa-print"></span> Cetak </a></th> 
                     </tr>
                     <tr>
                      <th>Rekapitulasi Pindah Kabupaten : <a class="btn btn-success btn-flat" href="<?php echo base_url() . 'pegawai/Laporanpdf' ?>"><span class="fa fa-print"></span> Cetak </a></th> 
                     </tr>
                     <tr>
                      <th>Rekapitulasi Pindah Kecamatan : <a class="btn btn-success btn-flat" href="<?php echo base_url() . 'pegawai/Laporanpdf' ?>"><span class="fa fa-print"></span> Cetak </a></th> 
                     </tr>
                     <tr>
                      <th>Rekapitulasi Pindah Desa : <a class="btn btn-success btn-flat" href="<?php echo base_url() . 'pegawai/Laporanpdf' ?>"><span class="fa fa-print"></span> Cetak </a></th> 
                     </tr>
                     <tr>
                      <th>Rekapitulasi Keterangan Tidak Mampu : <a class="btn btn-success btn-flat" href="<?php echo base_url() . 'pegawai/Laporanpdf' ?>"><span class="fa fa-print"></span> Cetak </a></th> 
                     </tr>
                     <tr>
                      <th>Rekapitulasi Dispensasi Nikah : <a class="btn btn-success btn-flat" href="<?php echo base_url() . 'pegawai/Laporanpdf' ?>"><span class="fa fa-print"></span> Cetak </a></th> 
                     </tr>
                     <tr>
                      <th>Rekapitulasi Ahli Waris : <a class="btn btn-success btn-flat" href="<?php echo base_url() . 'pegawai/Laporanpdf' ?>"><span class="fa fa-print"></span> Cetak </a></th> 
                     </tr>
                     <tr>
                      <th>Rekapitulasi Rekomendasi Kredit Perbankan : <a class="btn btn-success btn-flat" href="<?php echo base_url() . 'pegawai/Laporanpdf' ?>"><span class="fa fa-print"></span> Cetak </a></th> 
                     </tr>
                     <tr>
                      <th>Rekapitulasi Legalisasi : <a class="btn btn-success btn-flat" href="<?php echo base_url() . 'pegawai/Laporanpdf' ?>"><span class="fa fa-print"></span> Cetak </a></th> 
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

   

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url() . 'assets/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url() . 'assets/bootstrap/js/bootstrap.min.js' ?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url() . 'assets/plugins/datatables/jquery.dataTables.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/plugins/datatables/dataTables.bootstrap.min.js' ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url() . 'assets/plugins/slimScroll/jquery.slimscroll.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/plugins/datepicker/bootstrap-datepicker.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/plugins/timepicker/bootstrap-timepicker.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/plugins/daterangepicker/daterangepicker.js' ?>"></script>
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

    $('#datepicker').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $('#datepicker2').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $('.datepicker3').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $('.datepicker4').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $(".timepicker").timepicker({
      showInputs: true
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
                    text: "File Berhasil disimpan ke database.",
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
                    text: "File berhasil di update",
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
                    text: "File Berhasil dihapus.",
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
