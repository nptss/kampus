<?php
defined('BASEPATH')or exit('No direct script access allowed');
class Kampus extends MY_Controller
{
  function __construct()
  {
      parent::__construct();
      error_reporting(0);
      set_tabel_template();
  }
  function login()
  {
    $this->load->view('templates/login');
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
    $data=  $this->db->query("select * from tbl_admin where kode='".$nidn."' AND password='".md5($pass)."'");
    if ($data->num_rows()==1) {
      $sesi=$this->session->set_userdata($data->row_array());
      echo "OK";
    }
    else{
      echo "Tidak ditemukan";
    }
  }
  //Halaman index
  public function index(){
    $data['title']="Beranda";
    $this->template->load('templates/template','admin/beranda',$data);
  }
  //Halaman data mahasiswa
  public function data_mahasiswa(){
    $mahasiswa=$this->fi->ambil_data('mahasiswa');
    $this->table->set_heading('No','Nama','NIM','Kelas','Tahun','NIDN','Aksi');
    $no=1;
    foreach ($mahasiswa as $key => $value) {
      $this->table->add_row(
                $no,
                $value->nama_mhs,
                $value->nim,
                $value->id_kelas,
                $value->periode,
                $value->nidn,
                tombol_grup('mahasiswa',$value->nim)
              );
      $no++;
    }
    $data['title']="Data Mahasiswa";
    $data['tabel']=$this->table->generate();
    $this->template->load('templates/template','admin/data_mahasiswa',$data);
  }
  //Halaman data dosen
  public function data_dosen(){
    $mahasiswa=$this->fi->ambil_data('dosen');
    $this->table->set_heading('No','NIDN','Nama','Prodi','Aksi');
    $no=1;
    foreach ($mahasiswa as $key => $value) {
      $this->table->add_row(
                $no,
                $value->nidn,
                $value->nama_dosen,
                $value->id_prodi,
                tombol_grup('dosen',$value->nidn)
              );
      $no++;
    }
    $data['tabel']=$this->table->generate();
    $data['title']="Data Dosen";
    $this->template->load('templates/template','admin/data_dosen',$data);
  }
  public function data_prodi(){
    $mahasiswa=$this->fi->ambil_data('prodi');
    $this->table->set_heading('No','Nama Prodi','Aksi');
    $no=1;
    foreach ($mahasiswa as $key => $value) {
      $this->table->add_row(
                $no,
                $value->nama_prodi,
                tombol_grup('prodi',$value->id_prodi)
              );
      $no++;
    }
    $data['title']="Data Prodi";
    $data['tabel']=$this->table->generate();
    $this->template->load('templates/template','admin/data_prodi',$data);
  }
  public function data_kelas(){
    $mahasiswa=$this->fi->ambil_data('kelas');
    $this->table->set_heading('No','Kelas','Aksi');
    $no=1;
    foreach ($mahasiswa as $key => $value) {
      $this->table->add_row(
                $no,
                $value->kelas,
                tombol_grup('kelas',$value->id_kelas)
              );
      $no++;
    }
    $data['title']="Data Kelas";
    $data['tabel']=$this->table->generate();
    $this->template->load('templates/template','admin/data_kelas',$data);
  }
  public function data_krs(){
    $mahasiswa=$this->fi->ambil_data('krs');
    $this->table->set_heading('No','NIM','KRS','Aksi');
    $no=1;
    foreach ($mahasiswa as $key => $value) {
      $this->table->add_row(
                $no,
                $value->nim,
                $value->gambar,
                tombol_hapus('krs',$value->id_krs)
              );
      $no++;
    }
    $data['title']="Data KRS";
    $data['tabel']=$this->table->generate();
    $this->template->load('templates/template','admin/data_krs',$data);
  }
  public function wali_kelas()
  {
    $data['banyak_mhs']   = $this->fi->ambil_num('mahasiswa',array('nidn'=>'0'));
    $data['banyak_prodi'] = $this->fi->ambil_num_all('prodi');
    $data['title']='Atur Wali';
    $this->template->load('templates/template','admin/wali_kelas',$data);
  }
  public function import_data()
  {
    $data['title'] = 'Import data Mahasiswa';
    $this->template->load('templates/template','admin/import_data',$data);
  }
  public function import_data_dosen()
  {
    $data['title'] = 'Import data Dosen';
    $this->template->load('templates/template','admin/import_data_dosen',$data);
  }
  //Akhir class
}

 ?>
