
<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-5">
        <div id="kotakan">
          <h5 class="text-center">Silahkan pilih data Excel Mahasiswa !!</h5>
          <form name="myForm" id="myForm" onSubmit="return validateForm()" action="<?=base_url('import/simpan.php')?>" method="post" enctype="multipart/form-data">
              <input type="file" class="btn btn-primay form-control" id="filepegawaiall" name="filepegawaiall" /><br /><br />
              <input type="submit"  class="btn btn-success form-control"  name="submit" value="Import" /><br/>
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

                  if(!hasExtension('filepegawaiall', ['.xls'])){
                      alert("Hanya file XLS (Excel 2003) yang diijinkan.");
                      return false;
                  }
              }
          </script>
        </div>
      </div>
    </div>
  </div>
</div>
