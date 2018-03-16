<div id="chat">
  <div class="isi_chat" id="isi_chat">

  </div>
</div>
<div id="chat">
  <textarea name="text" class="form-control message" rows="8" cols="80">
  </textarea>
  <br>
  <button type="button" onclick="kirim()" class="btn btn-primary" name="button">Kirim</button>
</div>

<script type="text/javascript">
if (typeof(Storage) !== "undefined") {
    // Penyimpanan lokal
    localStorage.setItem("total", 0);
}
var refInterval = window.setInterval('ambil()', 1000);
function ambil(){
  var nilai=0;
  $.ajax({
    type:"POST",
    url: "<?=base_url('server_chat/chek')?>",
    success:function(data){
      niali = parseInt(data);
      if (nilai != localStorage.getItem("total")){
        load_chat();
      }
      localStorage.setItem("total", niali);
    }
  });
}

function load_chat(){
  $.ajax({
    type:"POST",
    url: "<?=base_url('server_chat')?>",
    success:function(data){
      $(".isi_chat").html(data);
    }
  });
}

function kirim(){
  var isi = $(".message").val();
  if (isi.length>2){
    $.ajax({
      type :"POST",
      url  : "<?=base_url('server_chat/kirim')?>",
      data :"pesan="+isi,
      success: function(data){
          tambah_chat();
          //alert(data);
      }
    });
  }
  else{
    alert("Isi Tidak boleh kosong");
  }
}


function tambah_chat(){
  var isi = $(".message").val();
  $.ajax({
    type:"POST",
    url: "<?=base_url('server_chat')?>",
    success:function(data){
      $(".isi_chat").html(data);
      $(".message").val("");
      $(".message").focus();
    }
  });
}
</script>
<body onload="load_chat()">

</body>
