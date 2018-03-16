<?php
//koneksi ke database, username,password  dan namadatabase menyesuaikan

//jika tombol import ditekan
if(isset($_POST['submit'])){
    $tempat = "gambar/".$_POST['nim']."-".date('Y-m-d-h-i-s').".jpg";
    move_uploaded_file($_FILES['filepegawaiall']['tmp_name'], $tempat);
    //$hasil=1;
//    hapus file xls yang udah dibaca
//    unlink($_FILES['filepegawaiall']['name']);
//    header('location:http://localhost/kampus');
$nim=$_POST['nim'];
$nidn=$_POST['nidn'];
$sumber=$_SERVER['SERVER_NAME'];
$db= "db_perwalian";
$user="root";
$pswd="";
echo $sumber;
$kon= mysqli_connect($sumber,$user,$pswd,$db)or die (mysqli_error());
$masuk = mysqli_query($kon,"insert into tbl_krs set id_krs='',nim=$nim,nidn=$nidn,gambar='".$tempat."'")or die(mysqli_error($kon));
header('location:http://'.$sumber.'/kampus/front_mhs/internal/data_krs');
}

?>
