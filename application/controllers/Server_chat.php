<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Server_chat extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
      $data['hasil']= $this->fi->ambil_pesan();
      $this->load->view('pesan',$data);
  }
  public function kirim()
  {
      $isi= set_value('pesan');
      $data=array('isi'=>$isi,'id_pengirim'=>$this->session->userdata('nim'));
      $this->db->insert('chat',$data);
  }
  public function kirim_dosen()
  {
      $isi= set_value('pesan');
      $data=array('isi'=>$isi,'id_pengirim'=>$this->session->userdata('nidn'));
      $this->db->insert('chat',$data);
  }
  function chek(){
    $this->db->select('id');
    $data=$this->db->get('chat')->num_rows();
    echo $data;
  }
  function konsul(){
    $data =array(
      'nidn'=> $this->session->userdata('nidn'),
      'nim'=> $this->session->userdata('nim'),
      'isi'=>set_value('pesan'),
      'waktu'=> date('Y-m-d H:i:s')
    );
    $this->db->insert('konsul',$data);
    echo "OK";
  }
  function lihat_konsul(){
    $data= $this->fi->ambil_dimana('konsul',array('id'=>set_value('id')));
    echo json_encode($data);
  }
  function balas_konsul(){
    $data = array('balasan' =>set_value('isi'));
    $tabel  = 'konsul';
    $pk     = set_value('id');
    $dimana = array('id'=>$pk);
    $this->fi->ubah($tabel,$dimana,$data);
    echo "OK";
    //echo json_encode($data);
  }
  //akhir
}
