<?php
defined('BASEPATH')or exit("Tak dapat langsung di akses");
class Simpan_prodi extends CI_Controller{
  public function index()
  {
      #code
  }
  public function tersimpan()
  {
    //Mengambil data prodi
    $data = $this->fi->ambil_data('prodi');
    //for each 1
    foreach ($data as $key => $value) {
      $am_dosen   = $this->db->query("select * from tbl_dosen where id_prodi = $value->id_prodi");
      $dosen      = $am_dosen->result();
      $jml_dosen  = $am_dosen->num_rows();
      foreach ($dosen as $f) {
        $nidn= $f->nidn;
        echo $f->nidn." | ".$f->nama_dosen."<br />";
        $am_mhs =$this->db->query("select * from tbl_mahasiswa where nidn=0 and id_prodi = $value->id_prodi");
        $jml_mhs = $am_mhs->num_rows();
        $batas = $jml_mhs/$jml_dosen;
        $batas = ceil($batas);
        $mahasiswa = $this->db->query("select * from tbl_mahasiswa where nidn=0 and id_prodi = $value->id_prodi limit $batas")->result();
        foreach ($mahasiswa as $a) {
          $peubah = array('nidn'=>$nidn);
          $this->db->where('nim',$a->nim);
          $this->db->update('mahasiswa',$peubah);

        }

      }
    }
    //akhir foreach 1
    redirect('kampus/data_mahasiswa');
  }
  //Akhir Kelas
}
 ?>
