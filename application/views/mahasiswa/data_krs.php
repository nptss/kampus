<?=$this->load->view('mahasiswa/tabel/view')?>

<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-5">
        <div id="kotakan">
          <h5 class="text-center">Silahkan pilih Gambar !!</h5>
          <form name="myForm" id="myForm" onSubmit="return validateForm()" action="<?=base_url('krs/simpan.php')?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="nim" value="<?=$this->session->userdata('nim')?>">
              <input type="hidden" name="nidn" value="<?=$this->session->userdata('nidn')?>">
              <input type="file" class="btn btn-primay form-control" id="filepegawaiall" name="filepegawaiall" /><br /><br />
              <input type="submit"  class="btn btn-success form-control"  name="submit" value="Unggah" /><br/>
              <!--input type="checkbox" name="drop" value="1" /><label> <u>Kosongkan tabel sql terlebih dahulu.</u> </label -->
          </form>
          <script type="text/javascript">
          //    validasi form (hanya file .xls yang diijinkan)
              function validateForm()
              {
                  function hasExtension(inputID, exts) {
                      var fileName = document.getElementById(inputID).value;
                      return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
                  }

                  if(!hasExtension('filepegawaiall', ['.jpg'])){
                      alert("Hanya file JPG yang diijinkan.");
                      return false;
                  }
              }
          </script>
        </div>
      </div>
    </div>
  </div>
</div>
