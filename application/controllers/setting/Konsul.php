<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsul extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
      echo "NO!!";
  }
  public function ambil_konsul_dosen()
  {
    $data['konsul'] =  $this->db->get_where('konsul',array('nidn'=>$this->session->userdata('nidn'),'balasan'=>''))->num_rows();
    $this->load->view('dosen/konsul',$data);
  }

}
