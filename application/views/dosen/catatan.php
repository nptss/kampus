<?php
$this->load->view('dosen/tabel/view');
 ?>
<div class="pencarian">
  <div class="" id="chat">
    <div class="isi-chat">
      Pencarian Mahasiswa Nama / NIM
      <input type="text" class="form-control" id="cari" oninput="pencarian()" name="" value=""><br>
      <div class="hasil">
      </div>
    </div>
  </div>
</div>

<br>
<div class="pencarian">
  <div class="" id="chat">
    <div class="isi-chat">
      Nama :
      <input type="text" class="form-control" id="nama_mhs" name="" value="" readonly> <br>
      NIM :
      <input type="text" class="form-control" id="nim" name="" value="" readonly> <br>
      Catatan :
      <textarea name="" class="form-control" rows="8" cols="80" id="catatan">

    </textarea><br>
      <button type="button" onclick="simpan()" class="form-control btn btn-primary" name="button">Simpan Catatan</button>
    </div>
  </div>
</div>

<script type="text/javascript">
  function pencarian(){
    var cari= $("#cari").val();
    $.ajax({
    type: "POST",
    url : "<?=base_url('front_dosen/datacontrol/cari_mhs')?>",
    data : "cari="+cari,
    success: function(data){
      $(".hasil").show();
      $(".hasil").html(data);
      }
    });
  }
  function pilih(nim){
    $.ajax({
    type: "POST",
    url : "<?=base_url('setting/kontrol/edit')?>",
    dataType:"JSON",
    data : "id="+nim+"&field=nim&tabel=mahasiswa",
    success: function(data){
      $("#nama_mhs").val(data.nama_mhs);
      $("#nim").val(data.nim);
      $("#catatan").val(data.catatan);
      $(".hasil").hide();
      }
    });
  }

  function simpan(){
    var isi = $("#catatan").val();
    var nim = $("#nim").val();
    var waktu = "<?=date('Y-m-d H:i:s')?>";
    var nidn = "<?=$this->session->userdata('nidn')?>";
    $.ajax({
      type: "POST",
      url : "<?=base_url('setting/kontrol/simpan_catatan')?>",
      data : "nim="+nim+"&nidn="+nidn+"&isi="+isi+"&waktu="+waktu+"&nim="+nim,
      success: function(data){
          if (data=="OK"){
            window.location.href="<?=base_url('front_dosen/datacontrol/catatan_dosen')?>";
          }
          else{
            alert("Gagal Menyimpan data !");
          }
      }
    });
  }
  function hapus(tabel,id){
    $.ajax({
      type: "POST",
      url : "<?=base_url('setting/kontrol/hapus')?>",
      data : 'tabel='+tabel+'&field=id&id='+id,
      success: function(data){
        if (data=="OK"){
          location.reload();
        }
        else{
          alert("Gagal Menghapus data !");
        }
      }
    });
  }
</script>
