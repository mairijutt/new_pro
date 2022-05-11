
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Area4rent</title>
<!-- plugins:css -->
<link rel="stylesheet" href="css/themify-icons.css">
<!-- inject:css -->
<link rel="stylesheet" href="css/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Quicksand&display=swap" rel="stylesheet">
<!-- endinject -->
<link rel="shortcut icon" href="" />
<script src="js/vue.js"></script>
<script src="js/axios.js"></script>
</head>
<body>
<div class="container-scroller">
  <!-- navbar.html -->
  <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center"> <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="images/rent-logo.png" class="mr-2" alt="logo"/></a> <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/rent-logo.png" alt="logo"/></a> </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
      <!---button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="ti-view-list"></span>
        </button--->
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item nav-profile dropdown"> <a class="nav-link dropdown-toggle d-flex" href="#" data-toggle="dropdown" id="profileDropdown"> <span class="info"> Ilyas Mlah <small>Admin</small> </span> <img src="images/faces/face1.jpg" alt="profile"/> </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown"> <a class="dropdown-item"> <i class="ti-settings text-success"></i> Settings </a> <a href="/admin" class="dropdown-item"> <i class="ti-power-off text-success"></i> Logout </a> </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas"> <span class="ti-view-list"></span> </button>
    </div>
  </nav>
  <!-- partial active in nav-item class-->
  <div class="container-fluid page-body-wrapper">
    <!-- sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <!-- <li class="nav-item"> <a class="nav-link" href="add-property"> <span><img src="images/Home.png" alt="" title=""></span> <span class="menu-title">Add Property</span> </a> </li> -->
        <li class="nav-item"> <a class="nav-link" href="properties"> <span><img src="images/Home.png" alt="" title=""></span> <span class="menu-title">Properties</span> </a> </li>
        <li class="nav-item"> <a class="nav-link" href="features"> <span><img src="images/Feature.png" alt="" title=""></span> <span class="menu-title">Feature</span> </a> </li>
        <li class="nav-item"> <a class="nav-link" href="amenities"> <span><img src="images/Standard Ameities.png" alt="" title=""></span> <span class="menu-title">Standard Ameities</span> </a> </li>
        <li class="nav-item"> <a class="nav-link" href="surroundings"> <span><img src="images/Surroundings.png" alt="" title=""></span> <span class="menu-title">Surroundings</span> </a> </li>
        <li class="nav-item"> <a class="nav-link" href="blogs"> <span><img src="images/Standard Ameities.png" alt="" title=""></span> <span class="menu-title">Blogs</span> </a> </li>
        <li class="nav-item"> <a class="nav-link" href="video"> <span><img src="images/Standard Ameities.png" alt="" title=""></span> <span class="menu-title">Add Video</span> </a> </li>
      </ul>
    </nav>
