<?php
defined('BASEPATH')or exit('Tak boleh!!!');

class Kontrol extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
  }

  public function index(){
    echo "
    <p align='center'>
    <br /><br /><br />
    <h1 align='center'>Halaman Tidak di temukan</h1>
    </p>
    ";
  }
  //untuk menyimpan mhs
  public function simpan_mahasiswa(){
    $data =$this->input->post(null,true);
    $this->db->insert('mahasiswa',$data);
    echo "OK";
  }
  //untuk menyimpan dosen
  public function simpan_dosen(){
    $data =$this->input->post(null,true);
    $this->db->insert('dosen',$data);
    echo "OK";
  }
  //untuk menyimpan prodi
  public function simpan_prodi(){
    $data =$this->input->post(null,true);
    $this->db->insert('prodi',$data);
    echo "OK";
  }
  //untuk menyimpan kelas
  public function simpan_kelas(){
    $data =$this->input->post(null,true);
    $this->db->insert('kelas',$data);
    echo "OK";
  }
  //untuk menyimpan catatan
  public function simpan_catatan(){
    $data =$this->input->post(null,true);
    $this->db->insert('catatan',$data);
    echo "OK";
  }
  //untuk mengambil global
  public function edit(){
    $tabel  = set_value('tabel');
    $field  = set_value('field');
    $id     = set_value('id');
    $dimana = array($field=>$id);
    $data = $this->fi->ambil_dimana($tabel,$dimana);
    echo json_encode($data);
  }
  public function lihat_krs(){
    $tabel  = set_value('tabel');
    $field  = set_value('field');
    $id     = set_value('id');
    $dimana = array($field=>$id);
    $data = $this->fi->ambil_dimana($tabel,$dimana);
    $gambar= base_url('krs/'.$data->gambar);
    $data_gambar= base64_encode(file_get_contents($gambar));
    $isi['gambar']= 'data:jpg;base64,'.$data_gambar;
    $this->load->view('dosen/gambar_krs',$isi);
  }
  public function hapus_krs(){
    $tabel  = set_value('tabel');
    $field  = set_value('field');
    $id     = set_value('id');
    $dimana = array($field=>$id);
    $data = $this->fi->ambil_dimana($tabel,$dimana);
    $gambar= './krs/'.$data->gambar;
    $this->db->delete($tabel,$dimana);
    if(unlink($gambar)){
        echo "OK";
    }else {
      echo $gambar;
    }
  }
  //untuk menghapus membutuhkan nama tabel nama rield pk dan id yang primary
  public function hapus(){
    $tabel = set_value('tabel');
    $field = set_value('field');
    $pk    = set_value('id');
    $this->db->where($field,$pk)->delete($tabel);
    echo "OK";
  }
  //untuk mengubah mahasiswa
  public function update_mahasiswa(){
    $data   =$this->input->post(null,true);
    $tabel  = 'mahasiswa';
    $pk     = set_value('nim');
    $dimana = array('nim'=>$pk);
    $this->fi->ubah($tabel,$dimana,$data);
    echo "OK";
  }
  //untuk mengubah dosen
  public function update_dosen(){
    $data   =$this->input->post(null,true);
    $tabel  = 'dosen';
    $pk     = set_value('nidn');
    $dimana = array('nidn'=>$pk);
    $this->fi->ubah($tabel,$dimana,$data);
    echo "OK";
  }
  //untuk mengubah prodi
  public function update_prodi(){
    $data   =$this->input->post(null,true);
    $tabel  = 'prodi';
    $pk     = set_value('id_prodi');
    $dimana = array('id_prodi'=>$pk);
    $this->fi->ubah($tabel,$dimana,$data);
    echo "OK";
  }
  //untuk mengubah kelas
  public function update_kelas(){
    $data   =$this->input->post(null,true);
    $tabel  = 'kelas';
    $pk     = set_value('id_kelas');
    $dimana = array('id_kelas'=>$pk);
    $this->fi->ubah($tabel,$dimana,$data);
    echo "OK";
  }
  //ubah global krs
  public function update_krs(){
    $data   =$this->input->post(null,true);
    $tabel  = 'krs';
    $pk     = set_value('id_krs');
    $dimana = array('id_krs'=>$pk);
    $this->fi->ubah($tabel,$dimana,$data);
    echo "OK";
  }
  //akhir class
}

 ?>
