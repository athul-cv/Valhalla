<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Valhalla Admin</title>
    <link rel="stylesheet" href="../Assets/Template/Admin/assets/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="../Assets/Template/Admin/assets/vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="../Assets/Template/Admin/assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="../Assets/Template/Admin/assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../Assets/Template/Admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="../Assets/Template/Admin/assets/css/style.css" />
    <link rel="shortcut icon" href="../Assets/Template/Admin/assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="text-center sidebar-brand-wrapper d-flex align-items-center">
        </div>
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="../Assets/Template/Admin/assets/images/faces/face1.jpg" alt="profile" />
                <span class="login-status online"></span>
                <!--change to offline or busy as needed-->
              </div>
              <div class="nav-profile-text d-flex flex-column pr-3">
                <span class="font-weight-medium mb-2">Athul.C.Vinod</span>
                <span class="font-weight-normal"></span>
              </div>
             
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="HomePage.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Location</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="District.php">District</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Place.php">Place</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Product.php">
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              <span class="menu-title">Product</span>
            </a>
          </li>          <li class="nav-item">
            <a class="nav-link" href="Driver.php">
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              <span class="menu-title">Driver</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Category.php">
              <i class="mdi mdi-chart-bar menu-icon"></i>
              <span class="menu-title">Category</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="VechicleDetails.php">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">Vehicle Details</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="ViewComplaint.php">
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              <span class="menu-title">compliant</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ViewFeedBack.php">
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              <span class="menu-title">feedback</span>
            </a>
          </li>
         
          <li class="nav-item sidebar-actions">
            <div class="nav-link">
              <div class="mt-4">
                <div class="border-none">
                  <p class="text-black"></p>
                </div>
                <ul class="mt-4 pl-0">
                  <li></li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </nav>
      <div class="container-fluid page-body-wrapper">
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close mdi mdi-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-default-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles light"></div>
            <div class="tiles dark"></div>
          </div>
        </div>
        <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
          <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
            <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="index.html"><img src="../Assets/Template/Admin/assets/images/logo-mini.svg" alt="logo" /></a>
            <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
              <i class="mdi mdi-menu"></i>
            </button>
            <ul class="navbar-nav navbar-nav-right ml-lg-auto">
              <li class="nav-item nav-profile dropdown border-0">
                <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
                  <img class="nav-profile-img mr-2" alt="" src="../Assets/Template/Admin/assets/images/faces/face1.jpg" />
                  <span class="profile-name">Athul.C.Vinod</span>
                </a>
                <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
                  <a class="dropdown-item" href="../Guest/login.php">
                    <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </div>
        </nav>
        <div class="main-panel">
          <div class="content-wrapper pb-0">
          <!-- <div class="row">
          <div class="col-xl-3 col-lg-12 stretch-card grid-margin">
                <div class="row"> -->