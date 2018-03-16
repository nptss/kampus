<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datacontrol extends MY_Controller{

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
    $this->template->load('templates/dosen/template','dosen/beranda',$data);
  }
  //wali
  public function wali()
  {
    $mahasiswa=$this->fi->ambil_multi('mahasiswa',array('nidn'=>$this->session->userdata('nidn')));
    $this->table->set_heading('No','Nama','NIM','Kelas','Tahun');
    $no=1;
    foreach ($mahasiswa as $key => $value) {
      $kelas=$this->fi->ambil_dimana('kelas',array('id_kelas'=>$value->id_kelas));
      $this->table->add_row(
                $no,
                $value->nama_mhs,
                $value->nim,
                $kelas->kelas,
                $value->periode
              );
      $no++;
    }
    $data['title']="Data Mahasiswa";
    $data['tabel']=$this->table->generate();

    $data['title']="Wali";
    $this->template->load('templates/dosen/template','dosen/wali',$data);
  }
  //
  public function data_krs()
  {
    $mahasiswa=$this->fi->ambil_multi('krs',array('nidn'=>$this->session->userdata('nidn')));
    $this->table->set_heading('No','Nama','NIM','Kelas','Tahun','NIDN','Aksi');
    $no=1;
    foreach ($mahasiswa as $key => $value) {
      $diri=$this->fi->ambil_dimana('mahasiswa',array('nidn'=>$this->session->userdata('nidn')));
      $kelas=$this->fi->ambil_dimana('kelas',array('id_kelas'=>$diri->id_kelas));
      if ($value->acc=="1"){
        $tombol=tombol_lihat_balas('krs',$value->id_krs);
      }
      else{
        $tombol=tombol_verivikasi('krs',$value->id_krs);
      }
      $this->table->add_row(
                $no,
                $diri->nama_mhs,
                $value->nim,
                $kelas->kelas,
                $diri->periode,
                $value->nidn,
                $tombol
              );
      $no++;
    }
    $data['title']="Data Mahasiswa";
    $data['tabel']=$this->table->generate();

    $data['title']="Wali";
    $this->template->load('templates/dosen/template','dosen/data_krs',$data);
  }
  //
  public function data_diri()
  {
    $data['title']="Data diri";
    $this->template->load('templates/dosen/template','dosen/data_diri',$data);
  }
  //
  public function catatan_dosen()
  {
    $mahasiswa=$this->fi->ambil_multi('catatan',array('nidn'=>$this->session->userdata('nidn')));
    $this->table->set_heading('No','NIM','NIDN','Isi','Waktu','Lihat');
    $no=1;
    foreach ($mahasiswa as $key => $value) {
      $this->table->add_row(
                $no,
                $value->nim,
                $value->nidn,
                $value->isi,
                $value->waktu,
                tombol_hapus('catatan',$value->id)
              );
      $no++;
    }
    $data['title']="Data Mahasiswa";
    $data['tabel']=$this->table->generate();

    $data['title']="Catatan";
    $this->template->load('templates/dosen/template','dosen/catatan',$data);
  }
  public function cari_mhs(){
    $this->db->like('nim', set_value('cari'));
    $this->db->or_like('nama_mhs', set_value('cari'));
    $data['mahasiswa']=$this->db->get('mahasiswa')->result();
    $this->load->view('dosen/cari_mhs',$data);
  }
  public function chating()
  {
    $data['title']="Chating";
    $this->template->load('templates/dosen/template','dosen/chating',$data);
  }
  public function konsultasi()
  {
    $mahasiswa=$this->fi->ambil_multi('konsul',array('nidn'=>$this->session->userdata('nidn')));
    $this->table->set_heading('No','NIM','NIDN','Isi','Waktu','Balasan','Lihat');
    $no=1;
    foreach ($mahasiswa as $key => $value) {
      if($value->balasan!==""){$balas="Sudah";}else{$balas="Belum";}
      $this->table->add_row(
                $no,
                $value->nim,
                $value->nidn,
                word_limiter($value->isi,5),
                $value->waktu,
                $balas,
                tombol_lihat_balas($value->id)
              );
      $no++;
    }
    $data['title']="Data Mahasiswa";
    $data['tabel']=$this->table->generate();

    $data['title']="Konsultasi";
    $this->template->load('templates/dosen/template','dosen/konsultasi',$data);
  }
//Akhir
}
