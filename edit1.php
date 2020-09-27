<?php
session_start();
include('dbconnect.php');
$id=$_REQUEST['id'];
$query = "SELECT * from crecord where id='".$id."'";
$connect = mysqli_connect("localhost", "root", "", "dashboardg"); 
$result = mysqli_query($connect, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
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
                    <a class="page-scroll" >View Customer Records</a>
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
<!-- Modal -->
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$name=$_REQUEST['Nama'];
$phone=$_REQUEST['pNo'];
$alamat=$_REQUEST['Alamat'];
$pos=$_REQUEST['Poskod'];
$bandar=$_REQUEST['Bandar'];
$negeri=$_REQUEST['Negeri'];
$td=$_REQUEST['TimeDate'];
$ity=$_REQUEST['installType'];
$iti=$_REQUEST['installTime'];


$update="update crecord set Nama='".$name."', pNo='".$phone."', Alamat='".$alamat."', Poskod='".$pos."', Bandar='".$bandar."', Negeri='".$negeri."', TimeDate='".$td."', installType='".$ity."', installTime='".$iti."',
where id='".$id."'";
mysqli_query($connect, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='csearch.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>

    			<!-- Modal content-->
<div id="services" class="services-area area-padding">
  <div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2></br>Update Customer</h2>
          </div>
        </div>
      </div>
    <div>
  </br></br></br>
  </div>
  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <!-- Button to Open the Modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open modal
  </button>

        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
                 <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
          <div class="panel-group">
            <div class="panel panel-default">
            <div class="panel-heading">
                  <form name="form" method="post" action="edit1.php" class="form-container"> 
                    <input type="hidden" name="new" value="1" />
                      <input name="id" type="hidden" value="<?php echo $row['id'];?>">
                                <div class="top-margin">
                                    <label>Customer Name<span class="text-danger"></span></label>
                                      <input type="text" class="form-control" placeholder= "Customer Name" name="Nama" required value="<?php echo $row['Nama'];?>">
                                </div>
                                <div class="top-margin">
                                    <label>Phone Number<span class="text-danger"></span></label>
                                      <input type="text" class="form-control" placeholder= "Phone Number" name="pNo" required value="<?php echo $row['pNo'];?>">         
                                </div>
                                <div class="top-margin">
                                  <label>Address<span class="text-danger"></span></label>
                                    <input type="text" class="form-control" placeholder= "Address" name="Alamat" required value="<?php echo $row['Alamat'];?>">
                                </div>
                                <div class="top-margin">
                                    <label>Poscode<span class="text-danger"></span></label>
                                    <input type="text" class="form-control" placeholder= "Poscode" name="Poskod" required value="<?php echo $row['Poskod'];?>">
                                </div>
                                <div class="top-margin">
                                  <label>City<span class="text-danger"></span></label>
                                  <input type="text" class="form-control" placeholder= "City" name="Bandar" required value="<?php echo $row['Bandar'];?>">
                                </div>
                                <div class="top-margin">
                                    <label>State<span class="text-danger"></span></label>
                                    <input type="text" class="form-control" placeholder= "State" name="negeri" required value="<?php echo $row['Negeri'];?>">          
                                </div>
                                  <br>
                                  <br>
                                <div class="form-group">
                                    <label for="sel1">Installation type</label>
                                    <select class="form-control" placeholder= "Installation Type" name="installType" required value="<?php echo $row['installType'];?>">
                                        <option>CCTV</option>
                                        <option>ALARM SYSTEM</option>
                                        <option>ACCESS DOOR SYSTEM</option>
                                    </select>
                                </div>
                                

                                      <div class="top-margin">
                  
                                          <div class="col-lg-17 text-center">
                      
                                  <button name="submit" type="submit" value="submit">Save</button>

                                         </div>
                                      </div>
                      </form>
                                  
                </div>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" href="csearch.php">Close</button>
        </div>
        
      </div>
    </div>
  </div>

				</div>
			</div>
 		</div>
  </div>
</div>
  <?php } ?>
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

<!--===============================================================================================-->	
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="js/mainn.js"></script>
<!--cari pelanggan====================================================-->
<script type="text/javascript">
    $(window).load(function(){
        $('#myModal').modal('show');
    });
</script>
<!-- delete maklumat pengguna -->
<script type="text/javascript">
function delete_id(id)
{
     if(confirm('Sure To Remove This Record ?'))
     {
        window.location.href='index.php?delete_id='+id;
     }
}
</script>
<!-- update maklumat pengguna -->

</body>

</html>
