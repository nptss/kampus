
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
      <input type="hidden" readonly class="form-control" name="nim" id="nim" value=""> <br>
      Nama
      <input type="text" class="form-control" name="nama_mhs" required  id="nama_mhs"  value=""> <br>
      Periode
      <input type="text" class="form-control" name="periode"  required id="periode" value=""> <br>
      Prodi
      <select class="form-control" name="id_prodi" id="id_prodi" onchange="validasi()">
        <?php
        $prodi = $this->db->get('prodi')->result();
        foreach ($prodi as $f) {
          ?>
          <option value="<?=$f->id_prodi?>"><?=$f->nama_prodi?></option>
          <?php
        }
        ?>
      </select>
      <br>
      Kelas
      <select class="form-control" name="id_kelas" id="id_kelas" onchange="validasi()">
        <?php
        $kelas = $this->db->get('kelas')->result();
        foreach ($kelas as $f) {
          ?>
          <option value="<?=$f->id_kelas?>"><?=$f->kelas?></option>
          <?php
        }
        ?>
      </select>
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
      <input type="hidden" readonly class="form-control" name="nim" id="nimt" value=""> <br>
      Nama
      <input type="text" class="form-control" oninput="validasi()" name="nama_mhs"  id="nama_mhst" minlenght="3" value=""> <br>
      Periode
      <input type="text" class="form-control" oninput="validasi()" name="periode"  id="periodet" minlenght="3" value=""> <br>
      Prodi
      <select class="form-control" name="id_prodit" id="id_prodit" onchange="validasi()">
        <?php
        $prodi = $this->db->get('prodi')->result();
        foreach ($prodi as $f) {
          ?>
          <option value="<?=$f->id_prodi?>"><?=$f->nama_prodi?></option>
          <?php
        }
        ?>
      </select>
      <br>
      Kelas
      <select class="form-control" name="id_kelast" id="id_kelast" onchange="validasi()">
        <?php
        $kelas = $this->db->get('kelas')->result();
        foreach ($kelas as $f) {
          ?>
          <option value="<?=$f->id_kelas?>"><?=$f->kelas?></option>
          <?php
        }
        ?>
      </select>
       <br>
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
  var nim       = $('#nimt').val();
  var nama_mhs  = $('#nama_mhst').val();
  var periode   = $('#periodet').val();
  var id_prodi  = $('#id_prodit').val();
  var id_kelas  = $('#id_kelast').val();
  nama_mhs  = nama_mhs.length;
  periode   = periode.length;
  id_prodi  = id_prodi.length;
  id_kelas  = id_kelas.length;
  if (nama_mhs>3 && periode>3 && id_prodi>0 && id_kelas>0){
    $('#simpan_tambah').show();
  }
  else{
    $('#simpan_tambah').hide();
  }
}
//untuk simpan
function simpan(){
  var nim       = $('#nimt').val();
  var nama_mhs  = $('#nama_mhst').val();
  var periode   = $('#periodet').val();
  var id_prodi  = $('#id_prodit').val();
  var id_kelas  = $('#id_kelast').val();
  $.ajax({
    type: "POST",
    url : "<?=base_url('setting/kontrol/simpan_mahasiswa')?>",
    data : "nim="+nim+"&nama_mhs="+nama_mhs+"&periode="+periode+"&id_prodi="+id_prodi+'&id_kelas='+id_kelas,
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
      data : "tabel="+tabel+"&id="+id+"&field=nim",
      success: function(data){
          $('#nim').val(data.nim);
          $('#nama_mhs').val(data.nama_mhs);
          $('#periode').val(data.periode);
          $('#id_prodi').val(data.id_prodi);
          $('#id_kelas').val(data.id_kelas);
      }
    });
  }
  //untuk hapus
  function hapus(tabel,id){
    $.ajax({
      type: "POST",
      url : "<?=base_url('setting/kontrol/hapus')?>",
      data : 'tabel='+tabel+'&field=nim&id='+id,
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
    var nim       = $('#nim').val();
    var nama_mhs  = $('#nama_mhs').val();
    var periode   = $('#periode').val();
    var id_prodi  = $('#id_prodi').val();
    var id_kelas  = $('#id_kelas').val();
    $.ajax({
      type: "POST",
      url : "<?=base_url('setting/kontrol/update_mahasiswa')?>",
      data : "nim="+nim+"&nama_mhs="+nama_mhs+"&periode="+periode+"&id_prodi="+id_prodi+'&id_kelas='+id_kelas,
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
