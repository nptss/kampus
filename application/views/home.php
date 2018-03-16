<!DOCTYPE html>
<html>

<head>
  <title>Sistem Perwalian Mahasiswa</title>
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
    <link href="<?=base_url('assets/templates/')?>css/style_kampus.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?=base_url('assets/templates/')?>css/themes/all-themes.css" rel="stylesheet" />
    <link href="<?=base_url('assets/gaya.css')?>" rel="stylesheet" />
</head>

<body class="theme-red">
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
          <h5 class="text-center">Selamat datang di Sistem Perwalian!!</h5>
          <h6 class="text-center">Silahkan Pilih akses anda!</h6>
          <br />
          <div class="row">
            <div class="col-md-6">
              <a href="<?=site_url('dosen')?>">
                <button type="button" class="form-control btn btn-success" name="button">Dosen</button>
              </a>
            </div>
            <div class="col-md-6">
              <a href="<?=site_url('mahasiswa')?>">
                <button type="button" class="form-control btn btn-primary" name="button">Mahasiswa</button>
              </a>
            </div>
            <div class="col-md-12">
              <a href="<?=site_url('kampus/login')?>">
                <br><br>
                <button type="button" class="form-control btn btn-warning" name="button">Admin</button>
              </a>
            </div>
          </div>
          <br />
        </div>
      </div>
    </div>
  </div>
</div>
</p>

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
