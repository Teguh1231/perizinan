<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Aplikasi Perizinan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN PLUGIN CSS -->
    <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/jquery-datatable/css/jquery.dataTables.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- END PLUGIN CSS -->
    <!-- BEGIN PLUGIN CSS -->
    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/bootstrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="assets/plugins/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" />
    <!-- END PLUGIN CSS -->
    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href="webarch/css/webarch.css" rel="stylesheet" type="text/css" />
    <!-- END CORE CSS FRAMEWORK -->
  </head>
  <!-- END HEAD -->
  <!-- BEGIN BODY -->
  <body class=""> 
    <!-- BEGIN HEADER -->
    <div class="header navbar navbar-inverse ">
      <!-- BEGIN TOP NAVIGATION BAR -->
      <div class="navbar-inner">
        <div class="header-seperation">
          <ul class="nav pull-left notifcation-center visible-xs visible-sm">
            <li class="dropdown">
              <a href="#main-menu" data-webarch="toggle-left-side">
                <i class="material-icons">menu</i>
              </a>
            </li>
          </ul>
          <!-- BEGIN LOGO -->
          <a href="index.html">
            <h3 class="logo">SMKN 1 KRAGILAN</h3>
          </a>
          <!-- END LOGO -->
        </div>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <div class="header-quick-nav">
          <!-- BEGIN TOP NAVIGATION MENU -->
          <div class="pull-left">
            <ul class="nav quick-section">
              <li class="quicklinks">
                <a href="#" class="" id="layout-condensed-toggle">
                  <i class="material-icons">menu</i>
                </a>
              </li>
            </ul>
          </div>

          <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END TOP NAVIGATION MENU -->
      </div>
      <!-- END TOP NAVIGATION BAR -->
    </div>  
    <!-- END HEADER -->
    
    <!-- BEGIN CONTAINER -->
    <div class="page-container row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div class="page-sidebar " id="main-menu">
        <!-- BEGIN MINI-PROFILE -->
        <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
          <div class="user-info-wrapper sm">
            <div class="user-info sm">
              <div class="username"> Agus Prasetyo S.Kom</div>
              <div class="status">Admin</div>
            </div>
          </div>
          <!-- END MINI-PROFILE -->
          <!-- BEGIN SIDEBAR MENU -->
          <p class="menu-title sm"><span class="pull-right"></p>
          <ul>
            <li class="active">
              <a href="charts.html"> <i class="material-icons">view_stream</i> <span class="title">Dispensasi Siswa</span> </a>
            </li>
            <li class="">
              <a href="charts.html"> <i class="material-icons">playlist_add_check</i> <span class="title">Data Guru Piket</span> </a>
            </li>
            <li class="">
              <a href="charts.html"> <i class="material-icons">playlist_add_check</i> <span class="title">Data Riwayat Dispensasi</span> </a>
            </li>
            <li class="">
              <a href="charts.html"> <i class="material-icons">apps</i> <span class="title">Laporan</span> </a>
            </li>
            <li class="">
              <a href="charts.html"> <i class="material-icons">power_settings_new</i> <span class="title">Log Out</span> </a>
            </li>
          </ul> 
          
          <div class="clearfix"></div>
          <!-- END SIDEBAR MENU -->
        </div>
      </div>  
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE CONTAINER-->
      <div class="page-content">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div class="clearfix"></div>
        <div class="content">
          <ul class="breadcrumb">
            <li>
              <p>Tabel</p>
            </li>
            <li><a href="#" class="active">Data Dispensasi</a> </li>
          </ul>
          <div class="row-fluid">
            <div class="span12">
              <div class="grid simple ">
                <div class="grid-title">
                  <h4>Tabel<span class="semi-bold"></span></h4>
                </div>
                <div class="grid-body ">
                  <table class="table table-hover table-condensed" id="example">
                    <thead>
                      <tr>
                        <th style="width:1%" data-hide="phone">No</th>
                        <th style="width:10%">Nama Siswa</th>
                        <th style="width:6%" data-hide="phone">NISN</th>
                        <th style="width:6%" data-hide="phone">Jueusan</th>
                        <th style="width:5%" data-hide="phone">Dari Jam Ke</th>
                        <th style="width:5%"data-hide="phone">Sampai Jam Ke</th>
                        <th style="width:22%">Alasan</th>
                        <th style="width:10%">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="v-align-middle">2</td>
                        <td class="v-align-middle">Nia Feblita</td>
                        <td class="v-align-middle">239413956</td>
                        <td class="v-align-middle"><span class="muted">TKJ</span></td>
                        <td class="v-align-middle">1</td>
                        <td class="v-align-middle">1</td>
                        <td class="v-align-middle">Kegiatan Ekstrakulikuler</td>
                        <td>
                          <a href="#" class="btn btn-primary btn-xs btn-mini">Setujui</a>
                          <a href="#" class="btn btn-danger btn-xs btn-mini">Tolak</a>
                        </td>
                      </tr>
                      <tr>
                        <td class="v-align-middle">1</td>
                        <td class="v-align-middle">Komarudin</td>
                        <td class="v-align-middle">23628189</td>
                        <td class="v-align-middle"><span class="muted">Permesinan</span></td>
                        <td class="v-align-middle">1</td>
                        <td class="v-align-middle">1</td>
                        <td class="v-align-middle">Perlombaan LKS</td>
                        <td>
                          <a href="#" class="btn btn-primary btn-xs btn-mini">Setujui</a>
                          <a href="#" class="btn btn-danger btn-xs btn-mini">Tolak</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
    <!-- END CONTAINER -->
    <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <!-- BEGIN JS DEPENDECENCIES-->
    <script src="assets/plugins/jquery/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-block-ui/jqueryblockui.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
    <!-- END CORE JS DEPENDECENCIES-->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="webarch/js/webarch.js" type="text/javascript"></script>
    <script src="assets/js/chat.js" type="text/javascript"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-datatable/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-datatable/extra/js/dataTables.tableTools.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
    <script type="text/javascript" src="assets/plugins/datatables-responsive/js/lodash.min.js"></script>
    <!-- END PAGE LEVEL JS INIT -->
    <script src="assets/js/datatables.js" type="text/javascript"></script>
    <!-- END JAVASCRIPTS -->
  </body>
</html>