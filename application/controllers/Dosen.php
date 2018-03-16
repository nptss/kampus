<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    #error_reporting(0);
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $this->load->view('templates/dosen/login');
  }
  public function logout()
  {
      $this->session->sess_destroy();
      redirect('');
  }
  public function masuk()
  {
    $nidn=set_value('nidn');
    $pass=set_value('pass');
    $data=  $this->db->query("select * from tbl_dosen where nidn='".$nidn."' AND tgl_lahir='".$pass."'");
    if ($data->num_rows()==1) {
      $sesi=$this->session->set_userdata($data->row_array());
      echo "OK";
    }
    else{
      echo "Tidak ditemukan";
    }
  }
//akhir
}
