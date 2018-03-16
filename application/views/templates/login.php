<!DOCTYPE html>
<html>

<head>
  <title>Login Admin</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title><?=$title?></title>
    <!-- Favicon-->
    <link rel="icon" href="<?=base_url('assets/templates/')?>favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="<?=base_url('assets/font/font.css')?>" rel="stylesheet" type="text/css">
    <link href="<?=base_url('assets/font/font2.css')?>" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?=base_url('assets/templates/')?>plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?=base_url('assets/templates/')?>plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <!-- Custom Css -->
    <link href="<?=base_url('assets/templates/')?>css/style_dosen.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?=base_url('assets/templates/')?>css/themes/all-themes.css" rel="stylesheet" />
    <link href="<?=base_url('assets/gaya.css')?>" rel="stylesheet" />
</head>

<body class="theme-black">

    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="">LOGIN RUANG ADMIN</a>
            </div>

        </div>
    </nav>
<style type="text/css">
  .loginkan{
    align-content: center;
    max-width: 450px;
    max-width: 350px;
    border: 1px solid #D0D0D0;
    box-shadow: 0 0 8px #D0D0D0;
    border-radius: 0px;
    background-color: #fff;
    padding: 10px;
  }
</style>

<br><br><br><br>
<p class="text-center">
<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-5 col-md-offset-4">
        <div class="loginkan">
          <h5 class="text-center">Silahkan Masuk!!</h5>
          <br />
          <a href="<?=site_url('')?>">
            <button type="button" class="form-control btn btn-warning" name="button">Kembali</button>
          </a>
          <br> <br>
          <input type="text" class="form-control user" oninput="validasi()" name="" value="" placeholder="NIDN">
          <br />
          <input type="password"  class="form-control password" oninput="validasi()" name="" value="" placeholder="PASSWORD">
          <br />
          <button type="button"  id="masuk" onclick="masuk()" class="btn btn-primary form-control" name="button">Masuk</button>
          <br />
        </div>
      </div>
    </div>
  </div>
</div>
</p>
<script type="text/javascript">
  function validasi(){
    var user =$(".user").val();
    var pass =$(".password").val();
    if (user.length > 5 && pass.length>7){
      $("#masuk").show();
    }
    else{
      $("#masuk").hide();
    }
  }
function masuk(){
  var user =$(".user").val();
  var pass =$(".password").val();
  $.ajax({
    type: "POST",
    data: "nidn="+user+"&pass="+pass,
    url : "<?=base_url('kampus/masuk')?>",
    success:function(data){
      if(data=="OK"){
        window.location.replace("<?=base_url('kampus/')?>");
      }
      else{
        alert(data);
      }
    }
  });
}
</script>
<body onload="validasi()">

</body>


    <!-- Jquery Core Js -->
    <script src="<?=base_url('assets/templates/')?>plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?=base_url('assets/templates/')?>plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?=base_url('assets/templates/')?>plugins/node-waves/waves.js"></script>


    <!-- Custom Js -->
    <script src="<?=base_url('assets/templates/')?>js/admin.js"></script>

    <!-- Demo Js -->
</body>

</html>
