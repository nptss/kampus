
<?php
$this->load->view('admin/tabel/view');
?>
<!--Modal Edit-->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
 <div class="modal-content">
   <div class="modal-header">
     <h5 class="modal-title" id="exampleModalLabel">Silahkan Di Ubah !</h5>
     <button class="close" type="button" data-dismiss="modal" aria-label="Close">
       <span aria-hidden="true">×</span>
     </button>
   </div>
   <div class="modal-body">
      <input type="hidden" readonly class="form-control" name="id_kelas" id="id_kelas" value=""> <br>
      Nama Prodi
      <input type="text" class="form-control" name="nama_kelas" required  id="nama_kelas"  value=""> <br>
   </div>
   <div class="modal-footer">
     <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
     <button class="btn btn-primary" type="button" onclick="update()" data-dismiss="modal">Simpan</button>
   </div>
 </div>
</div>
</div>
<!--Modal Edit-->

<!--Modal Tambah-->
<div class="modal fade" id="modal_tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
 <div class="modal-content">
   <div class="modal-header">
     <h5 class="modal-title" id="exampleModalLabel">Silahkan Isi data !</h5>
     <button class="close" type="button" data-dismiss="modal" aria-label="Close">
       <span aria-hidden="true">×</span>
     </button>
   </div>
   <div class="modal-body">Silahkan di isi hingga tombol simpan keluar
      <input type="hidden" readonly class="form-control" name="id_kelast" id="id_kelast" value=""> <br>
      Nama
      <input type="text" class="form-control" oninput="validasi()" name="nama_kelast"  id="nama_kelast" minlenght="3" value=""> <br>
   </div>
   <div class="modal-footer">
     <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
     <button class="btn btn-primary" id="simpan_tambah" type="button" onclick="simpan()" data-dismiss="modal">Simpan</button>
   </div>
 </div>
</div>
</div>
<!--Modal Tambah-->

<script type="text/javascript">
//menampilkan tombol tambah
function validasi(){
  var nama_prodi  = $('#nama_kelast').val();
  nama_prodi  = nama_prodi.length;
  if (nama_prodi>1){
    $('#simpan_tambah').show();
  }
  else{
    $('#simpan_tambah').hide();
  }
}
//untuk simpan
function simpan(){
  var nama_kelas  = $('#nama_kelast').val();
  var id_kelas  = $('#id_kelast').val();
  $.ajax({
    type: "POST",
    url : "<?=base_url('setting/kontrol/simpan_kelas')?>",
    data : "kelas="+nama_kelas+"&id_kelas="+id_kelas,
    success: function(data){
        if (data=="OK"){
          location.reload();
        }
        else{
          alert("Gagal Menyimpan data !");
        }
    }
  });
}
  //untuk edit
  function edit(tabel,id){
    $('#edit').modal();
    $.ajax({
      type: "POST",
      url : "<?=base_url('setting/kontrol/edit')?>",
      dataType :"json",
      data : "tabel="+tabel+"&id="+id+"&field=id_kelas",
      success: function(data){
          $('#nama_kelas').val(data.kelas);
          $('#id_kelas').val(data.id_kelas);
      }
    });
  }
  //untuk hapus
  function hapus(tabel,id){
    $.ajax({
      type: "POST",
      url : "<?=base_url('setting/kontrol/hapus')?>",
      data : 'tabel='+tabel+'&field=id_kelas&id='+id,
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
  //untuk update
  function update(){
    var nama_kelas  = $('#nama_kelas').val();
    var id_kelas  = $('#id_kelas').val();
    $.ajax({
      type: "POST",
      url : "<?=base_url('setting/kontrol/update_kelas')?>",
      data : "kelas="+nama_kelas+"&id_kelas="+id_kelas,
      success: function(data){
          if (data=="OK"){
            location.reload();
          }
          else{
            alert("Gagal Menyimpan data !");
          }
      }
    });
  }
</script>
