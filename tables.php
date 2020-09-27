<?php
session_start();

include("dbconnect.php");
/*** check if the users is already logged in ***/
if(!isset($_SESSION['admin_id']))
{
  
    $message = 'Mesti Log Masuk Dahulu!!';
  echo "<script type='text/javascript'>alert('$message');location.href='index2.php'</script>";

}
else
{
     $nologin=0;
     $myid = $_SESSION['admin_id'];
   try
    {
    
        /*** prepare the insert ***/
        $stmt = $dbtry->prepare("SELECT * FROM admin WHERE id = :phpro_admin_id");

        /*** bind the parameters ***/
        $stmt->bindParam(':phpro_admin_id', $_SESSION['admin_id'], PDO::PARAM_INT);

        /*** execute the prepared statement ***/
        $stmt->execute();

        /*** check for a result ***/
        $result = $stmt->fetch(PDO::FETCH_OBJ);
      /*** if we have no something is wrong ***/

    if($result == false)
        {
            $message = 'Sila Log Masuk!';
        }
        else
        {
        $mailz=$result->email;
        $namaz=$result->nama;
        $passz=$result->pass;
        $myid=$result->id;
        

        $message = 'Selamat Datang '.$namaz;
        $admin = $namaz;
        
        // $stmtx = $dbtry->prepare("SELECT * FROM rekodsale WHERE barkodbuyer = '$barcodez'");
        // $stmtx->execute(); 
        // $resultx = $stmtx->fetchAll(PDO::FETCH_ASSOC);

        }
    }
    catch (Exception $e)
    {
        /*** if we are here, something is wrong in the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
}

?>
<!--
=========================================================
* Material Dashboard Dark Edition - v2.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard-dark
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Dashboard Gastri Sdn Bhd
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="assets/img/sidebar-2.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
     <div class="logo">
         <a href="logout.php">
          <i onclick="return confirm('Are you sure to logout?');" style="color: white; text-align: center;">
          <p><?php echo $admin; ?></p>
          </i>
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="dashboard2.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="user.php">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="tables.php">
              <i class="material-icons">content_paste</i>
              <p>Promotion Edit</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="troubleshoot.php" target="_blank">
              
              <i class="material-icons">library_books</i>
              <p>Troubleshoot Report</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="customer.php" target="_blank">
              <i class="material-icons">archive</i>
              <p>Customer Details</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="teamreport.php" target="_blank">
              <i class="material-icons">assignment_late</i>
              <p>Team Report</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="csearch2.php" target="_blank">
              <i class="material-icons">notifications</i>
              <p>Customer enquiry</p>
            </a>
          </li>
             <li class="nav-item ">
            <a class="nav-link" href="https://www.sbsmalaysia.com/app/LoginScreen.aspx" target="_blank">
              <i class="material-icons">link</i>
              <p>www.sbsmalaysia.com</p>
            </a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="https://timetreeapp.com/calendars/4_2q4G4qMN8c" target="_blank">
              <i class="material-icons">link</i>
              <p>timetreeapp.com</p>
            </a>
          </li>
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Table List</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-default btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="javascript:void(0)">Mike John responded to your email</a>
                  <a class="dropdown-item" href="javascript:void(0)">You have 5 new tasks</a>
                  <a class="dropdown-item" href="javascript:void(0)">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another Notification</a>
                  <a class="dropdown-item" href="javascript:void(0)">Another One</a>
                </div>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="logout.php">
                  <i class="material-icons" onclick="return confirm('Are you sure to logout?');">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Edit Promotion</h4>
                  <p class="card-category"> Main Web Page Promo</p>
                </div>
                <div class="card-body">
                  <<div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                 
                  <li class="active" style="color: cyan;">
                    <a href="logout.php"><i onclick="return confirm('Are you sure to logout?');" style="color: cyan;"><?php echo $admin; ?></i></a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#home">Main Menu</a>
                  </li>
               
                  <li>
                    <a class="page-scroll" href="#services">Dashboard</a>
                  </li>
                   <li>
                    <a class="page-scroll" href="logout.php"><i class="fa fa-sign-out" style="font-size:24px" onclick="return confirm('Are you sure to logout?');"></i></a>
                  </li>

                 
                 
                  <li> </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        
      <div>
        
      </div>
      <!-- direction 1 -->
     <div id="slider-direction-1" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <!-- layer 1 -->
                
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <div class="wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s" style="position: bottom">
                  <h2><?php echo $message; ?></h2>
                </div>
                </div>
                <!-- layer 2 -->

                <div id="form1" class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s" >
                  <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"dashboardg");

                $query = "SELECT * FROM articles WHERE id = '1' ";
                $query_run = mysqli_query($connection,$query);
                $row = mysqli_fetch_array($query_run)
                ?>
                 <form action="#" method="post">
                <div class="form-group">
                <input type="text" name="title" id="title" class="form-control form-control-lg form-group-lg input-lg" value="<?php echo $row['title']; ?>">
                </div>
                  <div class="form-group">
                <input type="text" name="content" id="content" class="form-control form-control-lg form-group-lg input-lg" value="<?php echo $row['content']; ?>">
                </input>
              </div>
              <div class="form-group layer-1-3 wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                <button class="ready-btn right-btn page-scroll"  onclick="myrun1();return false">Update Promotion</button>
              </div>
            </form>
                </div>

                <!-- layer 3 -->
              <div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-1 wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  
                </div>
                <!-- layer 2 -->
                         <div id="form1" class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s" >
                  <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"dashboardg");

                $query = "SELECT * FROM articles WHERE id = '2' ";
                $query_run = mysqli_query($connection,$query);
                $row = mysqli_fetch_array($query_run)
                ?>
                 <form action="#" method="post">
                <div class="form-group">
                <input type="text" name="title" id="title" class="form-control form-control-lg form-group-lg input-lg" value="<?php echo $row['title']; ?>">
                </div>
                  <div class="form-group">
                <input type="text" name="content" id="content" class="form-control form-control-lg form-group-lg input-lg" value="<?php echo $row['content']; ?>">
                </input>
              </div>
               <div class="form-group layer-1-3 wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                <button class="ready-btn left-btn page-scroll"  onclick="myrun2();return false">Update Promotion</button>
              </div>
            </form>
                </div>

                <!-- layer 3 -->
              <div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1"></h2>
                </div>
                <!-- layer 2 -->
                        <div id="form1" class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s" >
                  <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"dashboardg");

                $query = "SELECT * FROM articles WHERE id = '3' ";
                $query_run = mysqli_query($connection,$query);
                $row = mysqli_fetch_array($query_run)
                ?>
                 <form action="" method="post">
                <div class="form-group">
                <input type="text" name="title" id="title" class="form-control form-control-lg form-group-lg input-lg" value="<?php echo $row['title']; ?>">
                </div>
                  <div class="form-group">
                <input type="text" name="content" id="content" class="form-control form-control-lg form-group-lg input-lg" value="<?php echo $row['content']; ?>">
                </input>
              </div>
              <div class="form-group layer-1-3 wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                <button class="ready-btn right-btn page-scroll"  onclick="myrun3();return false">Update Promotion</button>
              </div>
            </form>
                </div>

                <!-- layer 3 -->
              <div>
              </div>
                <!-- layer 3 -->
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider Area -->
<script type="text/javascript">
function myrun1(){

var mytitle = $("#title").val();
var mycontent = $("#content").val();


$.get("emaklumat.php?q2="+mytitle+"&q3="+mycontent, function(data, status){
  
  alert(data);
});


}
</script> 

<script type="text/javascript">
function myrun2(){

var mytitle = $("#title").val();
var mycontent = $("#content").val();


$.get("emaklumat2.php?q2="+mytitle+"&q3="+mycontent, function(data, status){
  
  alert(data);
});


}
</script> 

<script type="text/javascript">
function myrun3(){

var mytitle = $("#title").val();
var mycontent = $("#content").val();


$.get("emaklumat3.php?q2="+mytitle+"&q3="+mycontent, function(data, status){
  
  alert(data);
});


}
</script> 
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          
          <div class="copyright float-right" id="date">
             <i class="material-icons">favorite</i> 
            <a href="https://www.creative-tim.com" target="_blank"></a> 
          </div>
        </div>
      </footer>
      <script>
        const x = new Date().getFullYear();
        let date = document.getElementById('date');
        date.innerHTML = '&copy; ' + x + date.innerHTML;
      </script>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple active" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="assets/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="assets/img/sidebar-4.jpg" alt="">
          </a>
        </li>
        
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.js?v=2.1.0"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
</body>

</html>