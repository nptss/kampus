
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
      <input type="hidden" readonly class="form-control" name="id_prodi" id="id_prodi" value=""> <br>
      Nama Prodi
      <input type="text" class="form-control" name="nama_prodi" required  id="nama_prodi"  value=""> <br>
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
      <input type="hidden" readonly class="form-control" name="id_prodi" id="id_prodi" value=""> <br>
      Nama
      <input type="text" class="form-control" oninput="validasi()" name="nama_prodi"  id="nama_prodit" minlenght="3" value=""> <br>
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
  var nama_prodi  = $('#nama_prodit').val();
  nama_prodi  = nama_prodi.length;
  if (nama_prodi>3){
    $('#simpan_tambah').show();
  }
  else{
    $('#simpan_tambah').hide();
  }
}
//untuk simpan
function simpan(){
  var nama_prodi  = $('#nama_prodit').val();
  var id_prodi  = $('#id_prodit').val();
  $.ajax({
    type: "POST",
    url : "<?=base_url('setting/kontrol/simpan_prodi')?>",
    data : "nama_prodi="+nama_prodi+"&id_prodi="+id_prodi,
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
      data : "tabel="+tabel+"&id="+id+"&field=id_prodi",
      success: function(data){
          $('#nama_prodi').val(data.nama_prodi);
          $('#id_prodi').val(data.id_prodi);
      }
    });
  }
  //untuk hapus
  function hapus(tabel,id){
    $.ajax({
      type: "POST",
      url : "<?=base_url('setting/kontrol/hapus')?>",
      data : 'tabel='+tabel+'&field=id_prodi&id='+id,
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
    var nama_prodi  = $('#nama_prodi').val();
    var id_prodi  = $('#id_prodi').val();
    $.ajax({
      type: "POST",
      url : "<?=base_url('setting/kontrol/update_prodi')?>",
      data : "nama_prodi="+nama_prodi+"&id_prodi="+id_prodi,
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
