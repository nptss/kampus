<!DOCTYPE html>
<html>

<head>
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

    <!-- Morris Chart Css-->
    <link href="<?=base_url('assets/templates/')?>plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?=base_url('assets/templates/')?>css/style_dosen.css" rel="stylesheet">

    <!-- JQuery DataTable Css -->
    <link href="<?=base_url('assets/templates/')?>/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">


    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?=base_url('assets/templates/')?>css/themes/all-themes.css" rel="stylesheet" />
    <link href="<?=base_url('assets/gaya.css')?>" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="Tulis Sesuatu...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="">RUANG DOSEN WALI</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search 
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">~</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu" id="kene">

                                </ul>
                            </li>
                            <li class="footer">
                                <a href="<?=base_url('front_dosen/datacontrol/konsultasi')?>">Lihat Semuanya</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <?=$this->load->view('templates/dosen/left_side')?>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
          <div class="container">
            <div class="block-header">
                <h2><?=$title?></h2>
                <hr>
            </div>

            <?php echo $contents;?>
          </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="<?=base_url('assets/templates/')?>plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?=base_url('assets/templates/')?>plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Jquery DataTable Plugin Js -->
   <script src="<?=base_url('assets/templates/')?>plugins/jquery-datatable/jquery.dataTables.js"></script>
   <script src="<?=base_url('assets/templates/')?>plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
   <script src="<?=base_url('assets/templates/')?>plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
   <script src="<?=base_url('assets/templates/')?>plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
   <script src="<?=base_url('assets/templates/')?>plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
   <script src="<?=base_url('assets/templates/')?>plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
   <script src="<?=base_url('assets/templates/')?>plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
   <script src="<?=base_url('assets/templates/')?>plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
   <script src="<?=base_url('assets/templates/')?>plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>



    <!-- Waves Effect Plugin Js -->
    <script src="<?=base_url('assets/templates/')?>plugins/node-waves/waves.js"></script>


    <!-- Custom Js -->
    <script src="<?=base_url('assets/templates/')?>js/admin.js"></script>
    <script src="<?=base_url('assets/templates/')?>js/pages/tables/jquery-datatable.js"></script>
    <script type="text/javascript">
      var refInterval = window.setInterval('notifikasi()', 1000);
      function notifikasi(){
        $.ajax({
          type : "POST",
          url : "<?=base_url('setting/konsul/ambil_konsul_dosen')?>",
          success: function(data){
            $("#kene").html(data);
          }
        });
      }
    </script>
    <!-- Demo Js -->
</body>

</html>
