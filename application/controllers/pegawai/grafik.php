<?php
// Penduduk.php
class grafik extends CI_Controller {
 	function __construct(){
parent::__construct();
$this->load->model('Chart_model');
}
function index(){
$x['data']=$this->Chart_model->get_data_stok();
$this->load->view('v_grafik',$x);
}

}