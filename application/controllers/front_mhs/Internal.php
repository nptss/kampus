<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Internal extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    error_reporting(0);
    set_tabel_template();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data['title']="Beranda";
    $this->template->load('templates/mahasiswa/template','mahasiswa/beranda',$data);
  }
  //
  public function dosen_wali()
  {
    $mahasiswa=$this->fi->ambil_dosen('dosen',array('nidn'=>$this->session->userdata('nidn')));
    $this->table->set_heading('No','NIDN','Nama Dosen');
    $no=1;
    foreach ($mahasiswa as $key => $value) {
      $this->table->add_row(
                $no,
                $value->nidn,
                $value->nama_dosen
              );
      $no++;
    }
    $data['tabel']=$this->table->generate();
    $data['title']="Dosen Wali";
    $this->template->load('templates/mahasiswa/template','mahasiswa/dosen_wali',$data);
  }
  //
  public function data_krs()
  {
    $mahasiswa=$this->fi->ambil_multi('krs',array('nim'=>$this->session->userdata('nim')));
    $this->table->set_heading('No','NIM','Gambar','ACC');
    $no=1;
    foreach ($mahasiswa as $key => $value) {
      if($value->acc=="1"){$acc="Sudah";}else{$acc="Belum";}
      $this->table->add_row(
                $no,
                $value->nim,
                '<img src='.base_url('krs/'.$value->gambar).' hight=100 width=100/>',
                $acc
              );
      $no++;
    }
    $data['tabel']=$this->table->generate();
    $data['title']="Data KRS";
    $this->template->load('templates/mahasiswa/template','mahasiswa/data_krs',$data);
  }
  //
  public function konsultasi()
  {
    $mahasiswa=$this->fi->ambil_multi('konsul',array('nim'=>$this->session->userdata('nim')));
    $this->table->set_heading('No','NIM','NIDN','Isi','Waktu','Aksi');
    $no=1;
    foreach ($mahasiswa as $key => $value) {
      $this->table->add_row(
                $no,
                $value->nim,
                $value->nidn,
                $value->isi,
                $value->waktu,
                tombol_lihat($value->id)
              );
      $no++;
    }
    $data['title']="Data Mahasiswa";
    $data['tabel']=$this->table->generate();

    $data['title']="Konsultasi";
    $this->template->load('templates/mahasiswa/template','mahasiswa/konsultasi',$data);
  }
  //
  public function chating()
  {
    $data['title']="Chating";
    $this->template->load('templates/mahasiswa/template','mahasiswa/chating',$data);
  }
  //
  public function data_diri()
  {
    $data['title']="Data Diri";
    $this->template->load('templates/mahasiswa/template','mahasiswa/data_diri',$data);
  }
  //
  public function catatan_dosen()
  {

      $mahasiswa=$this->fi->ambil_multi('catatan',array('nim'=>$this->session->userdata('nim')));
      $this->table->set_heading('No','NIM','NIDN','Isi','Waktu');
      $no=1;
      foreach ($mahasiswa as $key => $value) {
        $this->table->add_row(
                  $no,
                  $value->nim,
                  $value->nidn,
                  $value->isi,
                  $value->waktu
                );
        $no++;
      }
      $data['title']="Data Mahasiswa";
      $data['tabel']=$this->table->generate();

    $data['title']="Catatan Dosen";
    $this->template->load('templates/mahasiswa/template','mahasiswa/catatan_dosen',$data);
  }
  //akhir kelas
}
