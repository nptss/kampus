<?php
error_reporting(0);
$isi="";
foreach ($hasil as $f) {
  # code...
  $mahasiswa= $this->db->get_where('mahasiswa',array('nim'=>$f->id_pengirim))->row();
  if ($mahasiswa->nim==$f->id_pengirim)
  {$pengirim=$mahasiswa->nama_mhs;}
  else{
    $dosen = $this->db->get_where('dosen',array('nidn'=>$f->id_pengirim))->row();
    $pengirim=$dosen->nama_dosen;
  }
  $isi="<p class='text-left'><b>$pengirim :</b>  $f->isi <br />  </p>".$isi;
}
echo $isi;
 ?>
