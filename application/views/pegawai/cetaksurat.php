<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- HEADER -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Latihan Passing Data</title>
   
</head>
<body>
    <h1> Menampilkan data by id_user </h1>
    <p>Ini adalah email dari database >>>> ></p> 
    <?php 
    foreach ($data->result_array() as $i) {
    echo $nomor_ketusaha; ?>
<?php }    ?>

</body>
</html>