<?php
$this->load->view('dosen/tabel/view');
 ?>
<div class="pesan text-justify">

</div>
<br />
<hr>
Pengirim <br>
<input type="hidden" name="" id="id" value="">
<input type="text" class="form-control" id="pengirim" name="" value="" readonly><br>
<textarea name=""  class="form-control balasan" rows="8" cols="40"></textarea><br>
<button type="button"  class="form-control btn btn-primary" name="button" onclick="balas()">Kirim</button>
<script type="text/javascript">

function lihat(id){
  $.ajax({
    type :"POST",
    url  : "<?=base_url('server_chat/lihat_konsul')?>",
    dataType: "JSON",
    data :"id="+id,
    success: function(data){
        //alert(data);
      $(".pesan").html("<textarea readonly class=form-control rows=8>"+data.isi+"</textarea>");
      $("#id").val(data.id);
      ambil_pengirim(data.nim);
      alert("Balasan Anda :\n"+data.balasan);
    }
  });
}

function ambil_pengirim(id){
  $.ajax({
    type:"POST",
    url: "<?=base_url("setting/kontrol/edit")?>",
    dataType:"JSON",
    data: "tabel=mahasiswa&field=nim&id="+id,
    success:function(isi){
            $("#pengirim").val(isi.nama_mhs);
    }
  });
}


function hapus(id){
  $.ajax({
    type:"POST",
    url: "<?=base_url("setting/kontrol/hapus")?>",
    data: "tabel=konsul&field=id&id="+id,
    success:function(){
            window.location.replace("<?=base_url("front_dosen/datacontrol/konsultasi")?>");
    }
  });
}
function balas(){
  var isi = $(".balasan").val();
  var id = $("#id").val();
  $.ajax({
    type:"POST",
    url: "<?=base_url("server_chat/balas_konsul")?>",
    data: "isi="+isi+"&id="+id,
    success:function(data){
            window.location.replace("<?=base_url("front_dosen/datacontrol/konsultasi")?>");
    }
  });
}
</script>
