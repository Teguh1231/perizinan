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
    <link href="assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/boostrap-checkbox/css/bootstrap-checkbox.css" rel="stylesheet" type="text/css" media="screen" />
    <link rel="stylesheet" href="assets/plugins/ios-switch/ios7-switch.css" type="text/css" media="screen">
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
    <div class="page-container row">
      <!-- BEGIN SIDEBAR -->
      <div class="page-sidebar " id="main-menu">
        <!-- BEGIN MINI-PROFILE -->
        <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
          <!-- BEGIN SIDEBAR MENU --> 
          <br>
          <br>
          <ul>
            <li class="active">
              <a href="halaman-pengajuan.php"> <i class="material-icons">view_stream</i> <span class="title">Pengajuan Dispensasi</span> </a>
            </li>
            <li class="">
              <a href="halaman-cekdispen.php"> <i class="material-icons">playlist_add_check</i> <span class="title">Cek Dispensasi</span> </a>
            </li>
          <!-- END SIDEBAR MENU -->
        </div>
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE CONTAINER-->
      <div class="page-content">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div id="portlet-config" class="modal hide">
          <div class="modal-header">
            <button data-dismiss="modal" class="close" type="button"></button>
            <h3>Widget Settings</h3>
          </div>
          <div class="modal-body"> Widget settings form goes here </div>
        </div>
        <div class="clearfix"></div>
        <div class="content">
          <ul class="breadcrumb">
            <li>
              <p>Tabel</p>
            </li>
            <li><a href="#" class="active">Form Pengajuan Dispensasi</a> </li>
          </ul>
          <div class="row">
            <div class="col-md-6">
              <div class="grid simple form-grid">
                <div class="grid-title no-border">
                  <h4>Form <span class="semi-bold">Dispensasi</span></h4>
                </div>
                <div class="grid-body no-border">
                  <form action="#" method="post" id="form_traditional_validation" name="form_traditional_validation" role="form" autocomplete="off" class="validate">
                    <div class="form-group">
                      <label class="form-label">NISN</label>
                      <input class="form-control" id="nisn" name="nisn" type="number" required>
                    </div>
                    <div class="form-group">
                      <label class="form-label">Nama Lengkap</label> 
                      <div class="input-with-icon right">
                        <i class=""></i>
                        <input class="form-control" id="namasiswa name="namasiswa" type="text" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="form-label">Kelas</label> 
                      <div class="input-with-icon right">
                        <i class=""></i>
                        <input class="form-control" id="kelas" name="kelas" type="text" required>
                      </div>
                    </div>
                      <div class="form-group">
                      <label class="form-label">Jurusan</label> 
                      <div class="input-with-icon right">
                        <i class=""></i>
                        <input class="form-control" id="kelas" name="kelas" type="text" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="form-label">Dari Jam Ke</label> 
                      <div class=" right">
                        <select class="form-control select2" id="darijamke" name="darijamke" data-init-plugin="select2" required>
                          <option value="">
                            Pilih Jam
                          </option>
                          <option value="1">
                            Jam ke 1
                          </option>
                          <option value="2">
                            Jam ke 2
                          </option>
                          <option value="3">
                            Jam ke 3
                          </option>
                          <option value="4">
                            Jam ke 4
                          </option>
                          <option value="5">
                            Jam ke 5
                          </option>
                          <option value="5">
                            Jam ke 6
                          </option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="form-label">Sampai Jam Ke</label> 
                      <div class=" right">
                        <select class="form-control select2" id="sampaijamke" name="sampaijamke" data-init-plugin="select2" required>
                          <option value="">
                            Pilih Jam
                          </option>
                          <option value="1">
                            Jam ke 1
                          </option>
                          <option value="2">
                            Jam ke 2
                          </option>
                          <option value="3">
                            Jam ke 3
                          </option>
                          <option value="4">
                            Jam ke 4
                          </option>
                          <option value="5">
                            Jam ke 5
                          </option>
                          <option value="5">
                            Jam ke 6
                          </option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="form-label">Alasan</label> 
                      <div class="input-with-icon right">
                        <i class=""></i>
                        <input class="form-control" id="keperluan" name="keperluan" type="text" required>
                      </div>
                    </div>
                    <div class="form-actions">
                      <div class="pull-right">
                        <button class="btn btn-success btn-cons" type="submit"><i class="icon-ok"></i> Ajukan</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END PAGE -->
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
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="assets/plugins/boostrap-form-wizard/js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <script src="assets/js/form_validations.js" type="text/javascript"></script>
    <!-- END JAVASCRIPTS -->
  </body>
</html>