<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PPDB | SMK Putra Bangsa</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <link rel="icon" type="image/png" href="<?= base_url()?>logo.png" sizes="32x32">

  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?= base_url('assets4/')?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets4/')?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url('assets4/')?>dist/css/skins/_all-skins.min.css">

  <style type="text/css">
    .swal-wide{
        width:400px !important;
        height:400px !important;
        font-size: 15px !important;
        color: red !important;
    }
    .swal-loading{
        width:450px !important;
        height:250px !important;
        font-size: 15px !important;
        color: red !important;
    }
</style>
  <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url('assets4/')?>plugins/select2/select2.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<script src="<?= base_url('assets/')?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('assets4/')?>dist/js/sweetalert2.all.min.js"></script>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav" oncosntextmenu="return false" onselecststart="return false" osndragstart="return false">

<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-stasstic-top navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="" class="navbar-brand"><b>PPDB </b>SMK Putra Bangsa</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?= base_url('dashboard')?>">Pendaftaran <span class="sr-only">(current)</span></a></li>
            <li><a khref="" onclick="window.open('<?= base_url('dashboard/cetak')?>','new','width=300,height=500')">Cetak Formulir Pendaftaran</a></li>
           <!--  <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li> -->
          </ul>
          <!-- <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
            </div>
          </form> -->
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
           
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                  <?php   
                      foreach($data->result() as $data){
                    if(!empty($data->FOTO)){
                   ?>
                <img src="<?= base_url('upload/'.$data->FOTO)?>" class="user-image" alt="User Image">
              <?php   }

              else{
                ?>
                <img src="<?= base_url('upload/'.$data->FOTO)?>" class="user-image" alt="User Image">
                <?php
              } ?>
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">
                  <?php 
                        echo $data->NAMALENGKAP;
                   ?>
                </span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <?php   
                    if(!empty($data->FOTO)){
                   ?>
                  <img src="<?= base_url('upload/'.$data->FOTO)?>" class="img-circle" alt="User Image">
                    <?php   } ?>
                  <p>
                    <?= $data->NAMALENGKAP; ?>
                    <small><?= $data->NISN; ?></small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <style type="text/css">
                    #clr{
                      color: white;
                    }
                  </style>
                  <div class="row">
                    <a href="<?= base_url('dashboard/logout')?>"><button type="button" id="clr" href="" class="btn btn-danger btn-bllock btn-flat pull-right"> Sign out &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-sign-out"></i></button></a>
                   </div>
                  <!-- /.row -->
                </li>
              </ul>
            </li>
          </ul>
        </div>
      <?php   } ?>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="mt-4"></div>
  <div class="content-wrapper mt-4">
    <div class="container">