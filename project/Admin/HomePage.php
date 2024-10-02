<?php
include("../Assets/Connection/Connection.php");
session_start();
?>
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
    <style>
      .link{
        text-decoration: none;
      }
    </style>
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
            <div class="page-header flex-wrap">
              <h3 class="mb-0"> Hi, welcome back! <span class="pl-0 h6 pl-sm-2 text-muted d-inline-block">Your web analytics dashboard template.</span>
              </h3>
            </div>
            <div class="row">
              <div class="col-xl-3 col-lg-12 stretch-card grid-margin">
                <div class="row">
                  <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                    <div class="card bg-warning">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head"><a class='link' style="
    text-decoration: none;
    color: white;
" href="ViewUser.php">Users</a></p>
                            <h2 class="text-white"> 

                            <?php
                          $selQry="select count(*) as id from tbl_user";
                          $res=$conn->query($selQry);
                          $data=$res->fetch_assoc();
                          echo $data["id"];
                          ?>

                            </span>
                            </h2>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3">
                    <div class="card bg-danger">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head"><a class='link' style="
    text-decoration: none;
    color: white;
" href="ViewBooking.php">Booking</a></p>
                            <h2 class="text-white"> 
                            <?php
                          $selQry="select count(*) as bid from tbl_booking";
                          $res=$conn->query($selQry);
                          $data=$res->fetch_assoc();
                          echo $data["bid"];
                          ?>
                            </h2>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-md-6 stretch-card grid-margin grid-margin-sm-0 pb-sm-3 pb-lg-0 pb-xl-3">
                    <div class="card bg-primary">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head"><a class='link' style="
    text-decoration: none;
    color: white;
" href="Driver.php">Drivers</a></p>
                            <h2 class="text-white"> 
                            <?php
                          $selQry="select count(*) as did from tbl_driver";
                          $res=$conn->query($selQry);
                          $data=$res->fetch_assoc();
                          echo $data["did"];
                          ?>
                            </h2>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-12 col-md-6 stretch-card pb-sm-3 pb-lg-0">
                    <div class="card bg-success">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head"><a class='link' style="
    text-decoration: none;
    color: white;
" href="Product.php">Product</a></p>
                            <h2 class="text-white">
                            <?php
                          $selQry="select count(*) as pid from tbl_product";
                          $res=$conn->query($selQry);
                          $data=$res->fetch_assoc();
                          echo $data["pid"];
                          ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-9 stretch-card grid-margin">
              <div class="card">
                  <div class="card-body px-0 overflow-auto">
                    <h4 class="card-title pl-4"> Users</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="bg-light">
                          <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Location</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $selQry="select * from tbl_user u inner join tbl_place p on p.place_id=u.place_id inner join tbl_district d on d.district_id=p.district_id";
                          $res=$conn->query($selQry);
                          while($data=$res->fetch_assoc())
                          {
                            ?>
                          <tr>
                            <td>
                              <div class="d-flex align-items-center">
                                <img src="../Assets/files/user/<?php echo $data['user_photo']?>" alt="image" />
                                <div class="table-user-name ml-3">
                                  <p class="mb-0 font-weight-medium"> 
                                <?php echo $data['user_name']?>    
                                </p>
                                </div>
                              </div>
                            </td>
                            <td> <?php echo $data['user_email']?></td>
                            <td>
                             <?php echo $data['user_contact']?> 
                            </td>
                            <td><?php echo $data['place_name'].", ".$data['district_name'] ?></td>
                          </tr>
                          <?php
                          }
                          ?>
                        </tbody>
                      </table>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div>
            
          </div>
         
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../Assets/Template/Admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../Assets/Template/Admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../Assets/Template/Admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="../Assets/Template/Admin/assets/vendors/flot/jquery.flot.js"></script>
    <script src="../Assets/Template/Admin/assets/vendors/flot/jquery.flot.resize.js"></script>
    <script src="../Assets/Template/Admin/assets/vendors/flot/jquery.flot.categories.js"></script>
    <script src="../Assets/Template/Admin/assets/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="../Assets/Template/Admin/assets/vendors/flot/jquery.flot.stack.js"></script>
    <script src="../Assets/Template/Admin/assets/vendors/flot/jquery.flot.pie.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../Assets/Template/Admin/assets/js/off-canvas.js"></script>
    <script src="../Assets/Template/Admin/assets/js/hoverable-collapse.js"></script>
    <script src="../Assets/Template/Admin/assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../Assets/Template/Admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>