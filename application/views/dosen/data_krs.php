<?php
$this->load->view('dosen/tabel/view');
 ?>
<div class="gambar">

</div>
<script type="text/javascript">

function verivikasi(tabel,id){
  $.ajax({
    type: "POST",
    url : "<?=base_url('setting/kontrol/update_krs')?>",
    data: "id_krs="+id+"&acc=1",
    success: function(data){
      if(data=="OK"){
        window.location.href="<?=base_url('front_dosen/datacontrol/data_krs')?>";
      }
      else {
        alert("Data "+id+" Tidak tersimpan");
      }
    }
  });
}

function lihat(tabel,id){
  $.ajax({
    type: "POST",
    url : "<?=base_url('setting/kontrol/lihat_krs')?>",
    data: "id="+id+"&tabel=krs&field=id_krs",
    success: function(data){
      $(".gambar").html(data);
      //alert(data);
    }
  });
}
function hapus(tabel,id){
  $.ajax({
    type: "POST",
    url : "<?=base_url('setting/kontrol/hapus_krs')?>",
    data: "id="+id+"&tabel=krs&field=id_krs",
    success: function(data){
      if(data=="OK"){
        window.location.href="<?=base_url('front_dosen/datacontrol/data_krs')?>";
      }
      else {
        alert("Data "+id+" Tidak terhapus !!");
      }
    }
  });
}
</script>
