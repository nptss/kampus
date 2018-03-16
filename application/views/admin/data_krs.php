<h6 class="text-center">Hanya di isi oleh mahasiswa</h6>
<?php
echo $tabel;
?>
<script type="text/javascript">
    //hapus_data
    function hapus(tabel,id){
      $.ajax({
        type: "POST",
        url : "<?=base_url('setting/kontrol/hapus')?>",
        data : 'tabel='+tabel+'&field=id_krs&id='+id,
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
