<?php
$this->load->view('dosen/tabel/view');
 ?>

<textarea name="name" class="message" rows="8" cols="80">

</textarea>
<br>
<button type="button" onclick="kirim()" class="btn btn-primary" name="button"> Kirim</button>
<script type="text/javascript">

function kirim(){
  var isi = $(".message").val();
  if (isi.length>10){
    $.ajax({
      type :"POST",
      url  : "<?=base_url('server_chat/konsul')?>",
      data :"pesan="+isi,
      success: function(data){
        if(data=="OK"){
          window.location.replace("<?=base_url('front_mhs/internal/konsultasi')?>");
        }
        else{
          alert("Tidak Tersimpan !");
        }
      }
    });
  }
  else{
    alert("Isi Terlalu sedikit");
  }
}

function lihat(id){
  var isi="";
  $.ajax({
    type :"POST",
    url  : "<?=base_url('server_chat/lihat_konsul')?>",
    dataType: "JSON",
    data :"id="+id,
    success: function(data){
        //alert(data);
        isi= data.isi+"\n\n===============================================\nBalasan\n"+data.balasan+"\n\n===============================================\n\n";
        $(".message").val(isi);
        $(".message").focus();
        alert("Balasan dosen Anda :\n\n"+data.balasan);
    }
  });
}

</script>
