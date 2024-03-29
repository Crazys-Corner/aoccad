<?php 
// Required per page code
session_start();
$steam64 = $_SESSION['steam_64id'];
include('db_conn.php');
// Required per page code
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="https://cdn.discordapp.com/attachments/1115368269398954195/1116444949702000720/aocrp.png">
  <title>
AOC RP Cad
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="ageofcivilization.xyz" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show  bg-gray-200">
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="dashboard.php">
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">AOC Life Roleplay</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="../pages/dashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Mohave County Info</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/dmv.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">DMV</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/police.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Police</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/irs.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">view_in_ar</i>
            </div>
            <span class="nav-link-text ms-1">IRS</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="../pages/banking.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
            </div>
            <span class="nav-link-text ms-1">Banking</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white   active bg-gradient-primary " href="../pages/calculator.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">notifications</i>
            </div>
            <span class="nav-link-text ms-1">Insurance Calculator</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/sign-in.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1">Sign In</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/sign-up.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">assignment</i>
            </div>
            <span class="nav-link-text ms-1">Sign Up</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Notifications</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Notifications</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        
          </div>
         
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
               
              </ul>
            </li>
            <li class="nav-item d-flex align-items-center">
              <a href="../pages/sign-in.php" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="card mt-4">
            <div class="card-header p-3">
              <h5 class="mb-0 text-danger text-center">AOC DMV</h5>
            </div>
            <form action="driverstest.php" method="POST">

<h1 class="text-center">Driving Test</h1>

<p>
  <div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title">
        <strong>What does a red traffic sign mean?</strong>
      </h5>
      <ul class="list-unstyled">
        <li>
          <input type="radio" name="question[1]" value="a"> Stop
        </li>
        <li>
          <input type="radio" name="question[1]" value="b"> Yield
        </li>
        <li>
          <input type="radio" name="question[1]" value="c"> Caution
        </li>
        <li>
          <input type="radio" name="question[1]" value="d"> Speed Limit
        </li>
      </ul>
    </div>
  </div>
</p>

<p>
  <div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title">
        <strong>What does a solid white line between lanes of traffic indicate?</strong>
      </h5>
      <ul class="list-unstyled">
        <li>
          <input type="radio" name="question[2]" value="a"> Drivers may change lanes if safe to do so
        </li>
        <li>
          <input type="radio" name="question[2]" value="b"> Drivers should maintain their current lane and not change lanes
        </li>
        <li>
          <input type="radio" name="question[2]" value="c"> Drivers must yield to oncoming traffic
        </li>
        <li>
          <input type="radio" name="question[2]" value="d"> Drivers may proceed with caution
        </li>
      </ul>
    </div>
  </div>
</p>

<p>
  <div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title">
        <strong>When should you use your vehicle's headlights?</strong>
      </h5>
      <ul class="list-unstyled">
        <li>
          <input type="radio" name="question[3]" value="a"> Only during nighttime
        </li>
        <li>
          <input type="radio" name="question[3]" value="b"> During adverse weather conditions or poor visibility
        </li>
        <li>
          <input type="radio" name="question[3]" value="c"> Anytime you are driving
        </li>
        <li>
          <input type="radio" name="question[3]" value="d"> Never
        </li>
      </ul>
    </div>
  </div>
</p>

<p>
  <div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title">
        <strong>What is the appropriate action to take when encountering a bicyclist on the road?</strong>
      </h5>
      <ul class="list-unstyled">
        <li>
          <input type="radio" name="question[4]" value="a"> Speed up to pass the bicyclist quickly
        </li>
        <li>
          <input type="radio" name="question[4]" value="b"> Drive as close as possible to the bicyclist
        </li>
        <li>
          <input type="radio" name="question[4]" value="c"> Give the bicyclist plenty of room when passing and maintain a safe distance
        </li>
        <li>
          <input type="radio" name="question[4]" value="d"> Ignore the bicyclist and continue driving normally
        </li>
      </ul>
    </div>
  </div>
</p>


<p>
  <div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title">
        <strong>When pedestrians are crossing at a marked crosswalk, you should:</strong>
      </h5>
      <ul class="list-unstyled">
        <li>
          <input type="radio" name="question[5]" value="a"> Slow down and proceed with caution.
        </li>
        <li>
          <input type="radio" name="question[5]" value="b"> Stop and wait until all pedestrians have safely crossed.
        </li>
        <li>
          <input type="radio" name="question[5]" value="c"> Speed up to clear the crosswalk quickly.
        </li>
        <li>
          <input type="radio" name="question[5]" value="d"> Swerve around the pedestrians to continue driving.
        </li>
      </ul>
    </div>
  </div>
</p>

<p>
  <div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title">
        <strong>When making a left turn at an intersection, you should:</strong>
      </h5>
      <ul class="list-unstyled">
        <li>
          <input type="radio" name="question[6]" value="a"> Turn into the rightmost lane.
        </li>
        <li>
          <input type="radio" name="question[6]" value="b"> Turn into the leftmost lane.
        </li>
        <li>
          <input type="radio" name="question[6]" value="c"> Choose any available lane.
        </li>
        <li>
          <input type="radio" name="question[6]" value="d"> Turn into the lane closest to your current lane.
        </li>
      </ul>
    </div>
  </div>
</p>

<p>
  <div class="card mb-3">
    <div class="card-body">
      <h5 class="card-title">
        <strong>When driving in a school zone, you should:</strong>
      </h5>
      <ul class="list-unstyled">
        <li>
          <input type="radio" name="question[7]" value="a"> Obey the posted speed limit, which is typically 20 mph.
        </li>
        <li>
          <input type="radio" name="question[7]" value="b"> Be prepared to stop for children who are crossing the street.
        </li>
        <li>
          <input type="radio" name="question[7]" value="c"> Be aware of children who may be playing in the area.
        </li>
        <li>
          <input type="radio" name="question[7]" value="d"> All of the above.
        </li>
      </ul>
    </div>
  </div>
</p>


  <input class="btn btn-primary" type="Submit">
</form>

            </div>
          </div>
         
    
          <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://github.com/Crazys-Corner" class="font-weight-bold" target="_blank">crazy's_corner#6583</a>
                for AOC Roleplay.
              </div>
            </div>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
       
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-dashboard.js?v=3.1.0"></script>
</body>

</html>