<?php
defined('BASEPATH')or exit('No direct script access allowed');
class MY_Model extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }
  //ambil tabel
  function ambil_data($tabel){
    return $this->db->get($tabel)->result();
  }
  //ambil dimana satu
  function ambil_dimana($tabel,$dimana){
    return $this->db->get_where($tabel,$dimana)->row();
  }
  //ambil dimana satu
  function ambil_multi($tabel,$dimana){
    return $this->db->get_where($tabel,$dimana)->result();
  }
  //ambil didosen
  function ambil_dosen($tabel,$dimana){
    $this->db->where($dimana);
    return $this->db->get($tabel)->result();
  }
  //ambil pesan
  function ambil_pesan($limit=15){
    $this->db->order_by('id','DESC');
    $this->db->limit($limit);
    $data= $this->db->get('chat')->result();
    return $data;
  }
  //mengubah
  function ubah($tabel,$dimana,$data){
    $this->db->where($dimana);
    $this->db->update($tabel,$data);
  }
  //mengambil table numrows
  function ambil_num($tabel,$dimana=null){
    $this->db->where($dimana);
    return $this->db->get($tabel)->num_rows();
  }
  //mengambil table numrows
  function ambil_num_all($tabel){
    return $this->db->get($tabel)->num_rows();
  }
//akhir
}

 ?>
