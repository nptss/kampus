<div class="" id="chat">
  <div class="" id="isi_chat">
    Nama dan Gelar
    <input type="hidden" id="nim" name="" value="<?=$this->session->userdata('nim')?>" >
    <input type="text" id="nama_mhs" name="" value="<?=$this->session->userdata('nama_mhs')?>" class="form-control"> <br>
    Tanggal Lahir ('YYYY-MM-DD')
    <input type="text" id="tgl_lahir" name="" value="<?=$this->session->userdata('tgl_lahir')?>"  class="form-control"> <br>
    <button type="button" onclick="simpan()" name="button"  class="form-control btn btn-primary">Simpan</button>
  </div>
</div>
<script type="text/javascript">
//untuk update
function simpan(){
  var nim     = $('#nim').val();
  var nama_mhs  = $('#nama_mhs').val();
  var tgl_lahir  = $('#tgl_lahir').val();
  $.ajax({
    type: "POST",
    url : "<?=base_url('setting/kontrol/update_mahasiswa')?>",
    data : "nim="+nim+"&nama_mhs="+nama_mhs+"&tgl_lahir="+tgl_lahir,
    success: function(data){
        if (data=="OK"){
          window.location.href="<?=base_url('mahasiswa/logout')?>";
        }
        else{
          alert("Gagal Menyimpan data !");
        }
    }
  });
}
</script>
