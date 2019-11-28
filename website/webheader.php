<?php 
session_start();
$user=$_SESSION['user'];
$utype=$_SESSION['username'];

// $usertype=$_SESSION['userType'];
if(!$user){
  header('Location:../system/login.php');
}
?>
<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.15
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Nilanka Motors</title>
    <!-- Icons-->
   <link href="../assets/vendors/css/coreui-icons.min.css" rel="stylesheet">
<link href="../assets/vendors/css/flag-icon.min.css" rel="stylesheet">
<link href="../assets/vendors/css/font-awesome.min.css" rel="stylesheet">
<link href="../assets/vendors/css/simple-line-icons.css" rel="stylesheet">

<link rel="stylesheet" href="../assets/vendors/css/font-awesome/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="../assets/vendors/css/Ionicons/css/ionicons.min.css">
    <!-- Main styles for this application-->
    <link href="../assets/css/style.css" rel="stylesheet">
        <link href="../assets/css/styleValidate.css" rel="stylesheet">
    <link href="../assets/css/jquery-ui.min.css" rel="stylesheet">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/zebra_datepicker.min.css" rel="stylesheet">
    <link href="../assets/css/jquery-confirm.css" rel="stylesheet">
       <link rel="stylesheet" href="../assets/css/jquery.dataTables.min.css">
    <link href="../assets/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img class="navbar-brand-full" src="../assets/img/brand/logo.png" width="100" height="30" alt="CoreUI Logo">
        <img class="navbar-brand-minimized" src="../assets/img/brand/logo.png" width="30" height="30" alt="CoreUI Logo">
      </a>
      <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      
     
      </button>
      <button class="navbar-toggler aside-menu-toggler d-lg-none" type="button" data-toggle="aside-menu-show">
        <span class="navbar-toggler-icon"></span>
      </button>
          <ul class="nav navbar-nav ml-auto">
        <li class="nav-item d-md-down-none">
          <a class="nav-link" href="<?php echo $user;  echo $utype;?>">
            <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-avatar" src="images/user.png" alt="<?php echo $user;  echo $utype;?>"><?php echo $utype;?>
          </a> 
                  </a> 
              </div>
        
        </li>
        <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
        <button class="btn btn-block fa fa-sign-out" type="button" aria-pressed="true"><a href="../system/login.php">Sign Out</a>
        </button>
        </div>
       
        </ul> 
    </header>
    <div class="app-body">
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <i class="fa fa-home"></i> Dashboard

              </a>
            </li>
          
    
           <li class="nav-item">
              <a class="nav-link" href="CustomerAppointmentAdd.php">
                <i class="fa fa-automobile"></i> Add apppointments</a>
            </li>
           <li class="nav-item">
              <a class="nav-link" href="ViewsAppointments.php">
                <i class="fa fa-calendar"></i> My Appointments</a>
            </li>
           <li class="nav-item">
              <a class="nav-link" href="viewsPayments.php">
                <i class="fa fa-money"></i> My Payments</a>
            </li>
           
          
            
            
           
          </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
      </div>
      <main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Home</li>
          <li class="breadcrumb-item">
            <a href="#">Admin</a>
          </li>
          <li class="breadcrumb-item active">Dashboard</li>
         
        </ol>
        <div class="container-fluid">
         
        </div>
      </main>
      
     
    </div>