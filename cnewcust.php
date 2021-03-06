<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Customer Signup</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.jpg" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css">
  
  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main stylesheet File -->
  <link href="css/stylee.css" rel="stylesheet">

  <!-- Responsive stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area" style="background-color:black;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                 <a class="navbar-brand page-scroll sticky-logo" href="dashboard2.php">
					<h1><span>Dashboard</span> Gastri Sdn. Bhd</h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    
                  <li class="active">
                    <a class="page-scroll" >Customer Details</a>
                  </li>
				  
                  <a class="navbar-brand page-scroll sticky-logo" href="customerdetails.php">
                  <h1> <img src="img/back.png" height="25" width="25" alt="" title=""> </h1>
				  <li>
                    <a class="page-scroll" href="logout.php"><i class="fa fa-sign-out" style="font-size:24px" onclick="return confirm('Are you sure to logout?');"></i></a>
                  </li>
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

 
  
  <!-- Start Service area -->
  <div id="services" class="services-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2></br>Sign Up New Customer</h2>
          </div>
        </div>
      </div>
    <div>
	</br></br></br>
	</div>
<!-- container -->
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel-group">
          <div class="panel panel-default">
            <div class="panel-heading">

							<form role="form" action="userreg1.php" method="post" >
								
								<div class="top-margin">
                  <label><span class="text-danger"></span></label>
									<input type="text" class="form-control" placeholder= "Customer Name" name="mynama" required>
								</div>
								<div class="top-margin">
										<label><span class="text-danger"></span></label>
										<input type="text" class="form-control" placeholder= "Phone Number"  name="mypNo" required>					
								</div>
								<div class="top-margin">
									<label><span class="text-danger"></span></label>
									<input type="text" class="form-control" placeholder= "Address" name="myAlamat" required>
								</div>
								<div class="top-margin">
									<label><span class="text-danger"></span></label>
									<input type="text" class="form-control" placeholder= "Poscode" name="myPoskod" required>
                </div>
                <div class="top-margin">
									<label><span class="text-danger"></span></label>
									<input type="text" class="form-control" placeholder= "City" name="myBandar" required>
								</div>
                <div class="top-margin">
										<label><span class="text-danger"></span></label>
										<input type="text" class="form-control" placeholder= "State" name="myNegeri" required>					
                </div>
                <hr>
                <div class="top-margin">
										<label>Registration Date<span class="text-danger"></span></label>
										<input type="datetime-local" class="form-control" placeholder= "Time & Date" name="myTimeDate" required>					
                </div>
                <br>
                <div class="form-group">
                    <label for="sel1">Installation type</label>
                    <select class="form-control" placeholder= "Installation Type" name="myinstallType" required>
                      <option>CCTV</option>
                      <option>ALARM SYSTEM</option>
                      <option>ACCESS DOOR SYSTEM</option>
                    </select>
                <br>
                <div class="top-margin">
										<label>Date of Installation<span class="text-danger"></span></label>
										<input type="datetime-local" class="form-control" placeholder= "Date Of Installation" name="myinstallTime" required>					
                </div>    
								<hr>

								<div class="top-margin">
									
									<div class="col-lg-17 text-center">
										<button class="btn btn-hero btn-lg" type="submit">Daftar</button>
									</div>
								</div>
							<form>
						</div>
					</div>
</div>
</div>
				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
         
    <div class="footer-area-bottom">

      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy;NUR HANEE BINTI ZAINUDIN B031810145</p>
            </div>
            <div class="credits">
            <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
              --></div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/knob/jquery.knob.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="lib/appear/jquery.appear.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="js/mainn.js"></script>
  <!--Javascripts-->
<script type="text/javascript">
jQuery(function($) {
$(document).ready( function() {
	$('.navbar-wrapper').stickUp();
	});
});
</body>

</html>
