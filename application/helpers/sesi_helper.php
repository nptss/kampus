<?php
defined('BASEPATH')or exit('Tak di Akses langsung');

function cek_login(){
  $ci =& get_instance();
  if($ci->session->userdata('nidn')=="" and $ci->session->userdata('nim')==""){
    redirect('');
  }
}
 ?>
