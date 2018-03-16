<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-5">
        <div id="kotakan">
          <h5 class="text-center">Jika Masih Ada Mahasiswa yang belum dapat Dosen Silahkan Klik Tombol Buat Wali Lagi !</h5>
          <?=form_open('setting/simpan_prodi/tersimpan')?>
          Jumlah Prodi :
          <input class="form-control" type="text" name="banyak_prodi" value="<?=$banyak_prodi?>" readonly> <br>
          Jumlah Mahasiswa yang belum memiliki wali:
          <input class="form-control" type="text" name="banyak_mhs" value="<?=$banyak_mhs?>" readonly> <br>
          <?=form_submit('submit', 'Buat Wali', array('class' => 'btn btn-primary' ))?>
          <?=form_close()?>
        </div>
      </div>
    </div>
  </div>
</div>
