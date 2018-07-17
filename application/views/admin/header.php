<?php
 $username=$this->session->userdata['nim'];
 ?>
 <!DOCTYPE html>
 <html>

 <!-- Mirrored from adminlte.io/themes/AdminLTE/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Mar 2018 20:03:11 GMT -->
 <!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Admin</title>
   <!-- Tell the browser to be responsive to screen width -->
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <!-- Bootstrap 3.3.7 -->
   <link rel="stylesheet" href="<?php echo base_url().'assets/bower_components/bootstrap/dist/css/bootstrap.min.css'; ?>">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="<?php echo base_url().'assets/bower_components/font-awesome/css/font-awesome.min.css'; ?>">
   <!-- Ionicons -->
   <link rel="stylesheet" href="<?php echo base_url().'assets/bower_components/Ionicons/css/ionicons.min.css'; ?>">
   <!-- DataTables -->
   <link rel="stylesheet" href="<?php echo base_url().'assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'; ?>">
   <!-- Theme style -->
   <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'; ?>">
   <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'; ?>">
   <!-- Morris chart -->
   <link rel="stylesheet" href="<?php echo base_url().'assets/bower_components/morris.js/morris.css'; ?>">
   <!-- jvectormap -->
   <link rel="stylesheet" href="<?php echo base_url().'assets/bower_components/jvectormap/jquery-jvectormap.css'; ?>">
   <!-- Date Picker -->
   <link rel="stylesheet" href="<?php echo base_url().'assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'; ?>">
   <!-- Daterange picker -->
   <link rel="stylesheet" href="<?php echo base_url().'assets/bower_components/bootstrap-daterangepicker/daterangepicker.css'; ?>">
   <!-- bootstrap wysihtml5 - text editor -->
   <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css'; ?>">

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->

   <!-- Google Font -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url().'css/bootstrap.min.css';?>">

 </head>
  <script src="<?php echo base_url().'assets/popup/jquery.min.js';?>"></script>
  <script src="<?php echo base_url().'assets/popup/bootstrap.min.js';?>"></script>
 <body class="hold-transition skin-blue sidebar-mini">
 <div class="wrapper">

   <header class="main-header">
     <!-- Logo -->
     <a href="index2.html" class="logo">
       <!-- mini logo for sidebar mini 50x50 pixels -->
       <!-- <span class="logo-mini"><b>A</b>LT</span> -->
       <!-- logo for regular state and mobile devices -->
       <span class="logo-lg"><b>Developer </b> UDINUS</span>
     </a>
     <!-- Header Navbar: style can be found in header.less -->
     <nav class="navbar navbar-static-top">
       <!-- Sidebar toggle button-->
       <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
         <span class="sr-only">Toggle navigation</span>
       </a>

       <div class="navbar-custom-menu">
         <ul class="nav navbar-nav">
           <!-- Messages: style can be found in dropdown.less-->

           <!-- User Account: style can be found in dropdown.less -->
           <li class="dropdown user user-menu">
             <a href="#" data-toggle="modal" data-target="#myModal" class="dropdown-toggle" data-toggle="dropdown">
               <img src="<?php echo base_url('assets/img/logo satpolpp.png');?>" class="user-image" alt="User Image">
               <span class="hidden-xs"><?php echo $username ?></span>
             </a>
               <!-- User image -->
               <!-- <ul class="dropdown-menu">
               <li class="user-header">
                 <img src="<?php echo base_url('assets/img/logo satpolpp.png');?>" class="img-circle" alt="User Image">

                 <p>
                   <?php echo $username ?>
                   <small>Sistem Pemantauan PAD SATPOL-PP Provinsi Jawa Tengah</small>
                 </p>
               </li>
                -->
               <li class="user-footer">
                 <!-- <div class="pull-left">
                   <a href="#" class="btn btn-default btn-flat">Profile</a>
                 </div> -->
                 <!-- <div class="pull-right">
                   <a href="<?php //echo base_url().'loginadmin/logout';?>" class="btn btn-default btn-flat">Sign out</a>
                 </div>
               </li>
             </ul> -->
           </li>
         </ul>
       </div>
     </nav>
   </header>

   <!-- Modal -->
 <div class="modal fade" id="myModal" role="dialog">
   <div class="modal-dialog">

     <!-- Modal content-->
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title" style="text-align: center"></h4>
       </div>
       <div class="modal-body">
         <h4 class="modal-title" style="text-align: center">Apakah Anda Yakin Keluar ?</h4>
       </div>
       <div class="modal-footer"  style="text-align:center" >
         <a href="<?php echo base_url('loginadmin/logout');?>" type="button" class="btn btn-danger">Yakin</a>
         <a type="button" class="btn btn-default" data-dismiss="modal">Batal</a>
       </div>
     </div>

   </div>
 </div>
