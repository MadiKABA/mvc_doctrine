<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="http://localhost/nous_les_femme/src/public/template/img/favicon.png" rel="icon">
  <link href="http://localhost/nous_les_femme/src/public/template/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="http://localhost/nous_les_femme/src/public/template/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="http://localhost/nous_les_femme/src/public/template/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="http://localhost/nous_les_femme/src/public/template/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/nous_les_femme/src/public/template/lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="http://localhost/nous_les_femme/src/public/template/css/style.css" rel="stylesheet">
  <link href="http://localhost/nous_les_femme/src/public/template/css/style-responsive.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="http://localhost/nous_les_femme/src/public/template/lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>DASH<span>IO</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
   
          
    
        </ul>
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">KABA</a></li>
          <li><a class="logout" href="login.html">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="http://localhost/nous_les_femme/src/public/template/img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Sam Soffes</h5>
          <li class="mt">
            <a class="active" href="home">
              <i class="fa fa-dashboard"></i>
              <span>Home</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Region</span>
              </a>
            <ul class="sub">
              <a href="/nous_les_femme/Region/getAll">list</a>
              <a href="/nous_les_femme/Region/create">add</a>
              <li><a href="create">Add</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Departement</span>
              </a>
            <ul class="sub">
              <a href="/nous_les_femme/Departement/getAll">list</a>
              <li><a href="./?route=departement&controller=add">Add</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Commune</span>
              </a>
            <ul class="sub">
              <li><a href="./?route=commune&controller=list">list</a></li>
              <li><a href="./?route=commune&controller=add">Add</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Quartier</span>
              </a>
            <ul class="sub">
              <li><a href="./?route=quartier&controller=list">list</a></li>
              <li><a href="./?route=quartier&controller=add">Add</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>RegimeJurique</span>
              </a>
            <ul class="sub">
              <li><a href="./?route=regime&controller=list">list</a></li>
              <li><a href="./?route=regime&controller=add">Add</a></li>
            </ul>
          </li>
		  <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Domaine Activite</span>
              </a>
            <ul class="sub">
              <li><a href="./?route=&controller=list">list</a></li>
              <li><a href="./?route=domaine&controller=add">Add</a></li>
            </ul>
          </li>
		  <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Dispositif Formation</span>
              </a>
            <ul class="sub">
              <li><a href="./?route=&controller=list">list</a></li>
              <li><a href="./?route=domaine&controller=add">Add</a></li>
            </ul>
          </li>
		  <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Entreprise</span>
              </a>
            <ul class="sub">
              <li><a href="http://localhost/nous_les_femme/Entreprise/create">add</a></li>
              <li><a href="http://localhost/nous_les_femme/Entreprise/index">list</a></li>
            </ul>
          </li>
		  <li class="sub-menu">
            <a href="#">
              <i class="fa fa-cogs"></i>
              <span>Gestion User</span>
              </a>
            <ul class="sub">
              <li><a href="./?route=user&controller=list">list</a></li>
              <li><a href="./?route=user&controller=add">Add</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="#">
              <i class="fa fa-cogs"></i>
              <span>Help</span>
              </a>
            <ul class="sub">
              <li><a href="">#</a></li>
              <li><a href="">#</a></li>
              
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          