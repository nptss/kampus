<div class="" id="chat">
  <div class="" id="isi_chat">
    Nama dan Gelar
    <input type="hidden" id="nidn" name="" value="<?=$this->session->userdata('nidn')?>" >
    <input type="text" id="nama_dosen" name="" value="<?=$this->session->userdata('nama_dosen')?>" class="form-control"> <br>
    Tanggal Lahir ('YYYY-MM-DD')
    <input type="text" id="tgl_lahir" name="" value="<?=$this->session->userdata('tgl_lahir')?>"  class="form-control"> <br>
    <button type="button" onclick="simpan()" name="button"  class="form-control btn btn-primary">Simpan</button>
  </div>
</div>
<script type="text/javascript">
//untuk update
function simpan(){
  var nidn      = $('#nidn').val();
  var nama_dosen  = $('#nama_dosen').val();
  var tgl_lahir  = $('#tgl_lahir').val();
  $.ajax({
    type: "POST",
    url : "<?=base_url('setting/kontrol/update_dosen')?>",
    data : "nidn="+nidn+"&nama_dosen="+nama_dosen+"&tgl_lahir="+tgl_lahir,
    success: function(data){
        if (data=="OK"){
          window.location.href="<?=base_url('dosen/logout')?>";
        }
        else{
          alert("Gagal Menyimpan data !");
        }
    }
  });
}
</script>
