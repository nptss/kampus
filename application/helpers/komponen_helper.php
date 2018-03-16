<?php

function tombol_grup($tabel,$id){
  return "<button onclick=edit('".$tabel."','".$id."') class='btn btn-primary'>Edit</button><button onclick=hapus('".$tabel."','".$id."') class='btn btn-danger'>Hapus</button>";
}
function tombol_verivikasi($tabel,$id){
  return "<button onclick=verivikasi('".$tabel."','".$id."') class='btn btn-warning'>Verivikasi</button><button onclick=lihat('".$tabel."','".$id."') class='btn btn-primary'>Lihat</button><button onclick=hapus('".$tabel."','".$id."') class='btn btn-danger'>Hapus</button>";
}
function tombol_hapus($tabel,$id){
  return "<button onclick=hapus('".$tabel."','".$id."') class='btn btn-danger'>Hapus</button>";
}
function tombol_lihat($id){
  return "<button onclick=lihat('".$id."') class='btn btn-primary'>Lihat / Balas</button>";
}
function tombol_lihat_balas($tabel,$id){
  return "<button onclick=lihat('".$tabel."','".$id."') class='btn btn-primary'>Lihat</button><button onclick=hapus('".$tabel."','".$id."') class='btn btn-danger'>Hapus</button>";
}

 ?>
