<?php
foreach ($mahasiswa as $key => $value) {
  echo '<button class="form-control" onclick="pilih('.$value->nim.')">'.$value->nim.' | '.$value->nama_mhs.'</button>';
}
 ?>
