<?php
//koneksi ke database, username,password  dan namadatabase menyesuaikan
mysql_connect('localhost', 'root', '');
mysql_select_db('db_perwalian');

//memanggil file excel_reader
require "excel_reader.php";

//jika tombol import ditekan
if(isset($_POST['submit'])){

    $target = basename($_FILES['filepegawaiall']['name']) ;
    move_uploaded_file($_FILES['filepegawaiall']['tmp_name'], $target);

    $data = new Spreadsheet_Excel_Reader($_FILES['filepegawaiall']['name'],false);

//    menghitung jumlah baris file xls
    $baris = $data->rowcount($sheet_index=0);

//    jika kosongkan data dicentang jalankan kode berikut

//    import data excel mulai baris ke-2 (karena tabel xls ada header pada baris 1)
    for ($i=2; $i<=$baris; $i++)
    {
//       membaca data (kolom ke-1 sd terakhir)
      $nama           = $data->val($i, 2);
      $nim            = $data->val($i, 3);
      $kelas          = $data->val($i, 4);
      $periode        = $data->val($i, 5);
      $nidn           = $data->val($i, 6);

//      setelah data dibaca, masukkan ke tabel pegawai sql
      $query = "INSERT into tbl_mahasiswa (nama_mhs,nim,id_kelas,periode,nidn)values('$nama','$nim','$kelas',$periode,$nidn)";
      $hasil = mysql_query($query);
    }
    //$hasil=1;
    if(!$hasil){
//          jika import gagal
          die(mysql_error());
      }else{
//          jika impor berhasil
          echo "Data berhasil diimpor.";
    }

//    hapus file xls yang udah dibaca
    unlink($_FILES['filepegawaiall']['name']);
    header('location:http://localhost/kampus');
}

?>
