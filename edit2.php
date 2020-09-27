<?php
session_start();
include('db.php');
$id=$_REQUEST['id'];
$query = "SELECT * from crecord where id='".$id."'";
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Website Gastri Sdn.Bhd</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
 	<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css">
  
  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main stylesheet File -->
  <link href="css/stylee.css" rel="stylesheet">

  <!-- Responsive stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/edit/util.css">
	<link rel="stylesheet" type="text/css" href="css/edit/main.css">
	<!-- Nivo Slider Theme -->


  <!-- Main stylesheet File -->

  <!-- Responsive stylesheet File -->

<!--===============================================================================================-->
</head>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$name=$_REQUEST['Nama'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['pNo'];
$alamat=$_REQUEST['Alamat'];
$pos=$_REQUEST['Poskod'];
$bandar=$_REQUEST['Bandar'];
$negeri=$_REQUEST['Negeri'];
$ity=$_REQUEST['installType'];
$iti=$_REQUEST['InstallTeam'];
$rmk=$_REQUEST['Remark'];


$update="update crecord set Nama='".$name."', email='".$email."', pNo='".$phone."', Alamat='".$alamat."', Poskod='".$pos."', Bandar='".$bandar."', Negeri='".$negeri."', installType='".$ity."', InstallTeam='".$iti."',  Remark='".$rmk."' where id='".$id."'";
mysqli_query($con, $update) or die (mysqli_error($connect)); 
$status = "Record Updated Successfully. </br></br>
<a href='index2.php'></a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<body data-spy="scroll" data-target="#navbar-example">

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
                    <a class="page-scroll" >Troubleshoot Report</a>
                  </li>
				  
                  <a class="navbar-brand page-scroll sticky-logo" href="customerdetails.php">
                  <h1> <img src="img/back.png" height="25" width="25" alt="" title=""> </h1>
				  <li>
                    <a class="page-scroll" href="logout.php"><i class="fa fa-sign-out" style="font-size:24px" onclick="return confirm('Are you sure to logout?');"></i></a>
                  </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
           
</header>
  <!-- header end -->
<!-- Modal -->


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

	<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="img/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(img/bg-02.jpg);">
				<span class="contact100-form-title-1">
					Customer Details
				</span>

				<span class="contact100-form-title-2">
					Update/Edit 
				</span>
			</div>

				<form class="contact100-form validate-form" name="form" method="post" action="usertb.php" class="form-container"> 
					<input type="hidden" name="new" value="1" />
					<input name="id" type="hidden" value="<?php echo $row['id'];?>">

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Full Name:</span>
                  	<label><span class="text-danger"></span></label>
                  	<input class="form-control"  type="text" placeholder= "Customer Name" name="Nama" required value="<?php echo $row['Nama'];?>">
                </div>
				
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Email:</span>
                  	<label><span class="text-danger"></span></label>
                  	<input class="form-control"  type="text" placeholder= "Customer Name" name="email" required value="<?php echo $row['email'];?>">
                </div>
        <div class="wrap-input100 validate-input" data-validate="Name is required">
          <span class="label-input100">No. Phone:</span>
                    <label><span class="text-danger"></span></label>
                    <input class="form-control"  type="text" placeholder= "Customer Name" name="pNo" required value="<?php echo $row['pNo'];?>">
                </div>
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Address:</span>
                  	<label><span class="text-danger"></span></label>
                  	<input class="form-control"  type="text" placeholder= "Customer Name" name="Alamat" required value="<?php echo $row['Alamat'];?>">
                </div>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Poscode:</span>
                  	<label><span class="text-danger"></span></label>
                  	<input class="form-control"  type="text" placeholder= "Customer Name" name="Poskod" required value="<?php echo $row['Poskod'];?>">
                </div>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">City:</span>
                  	<label><span class="text-danger"></span></label>
                  	<input class="form-control"  type="text" placeholder= "Customer Name" name="Bandar" required value="<?php echo $row['Bandar'];?>">
                </div>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">State:</span>
                  	<label><span class="text-danger"></span></label>
                  	<input class="form-control"  type="text" placeholder= "Customer Name" name="Negeri" required value="<?php echo $row['Negeri'];?>">
                </div>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Installation Type:</span>
                  	<label><span class="text-danger"></span></label>
                  	<input class="form-control"  type="text" placeholder= "Installation Type" name="installType" required value="<?php echo $row['installType'];?>">

                    </input>
                </div>

				<div class="wrap-input100 validate-input" data-validate="The Team : ">
					<span class="label-input100">Installation Team:</span>
                  	<label><span class="text-danger"></span></label>
                  	<input class="form-control"  type="text" placeholder= "Installation Team" name="InstallTeam" required value="<?php echo $row['InstallTeam'];?>">

                    </input>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Message is required" >
					<span class="label-input100">Remarks:</span>
					<textarea class="input100" name="Remark" placeholder="mesej" required value="<?php echo $row['Remark'];?>"></textarea >
					<span class="focus-input100"></span>
				</div>

				

<div class="container-contact100-form-btn">
          <button class="contact100-form-btn">
            <span>
              Submit
              <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i >
            </span>
          </button>
        </div>
			</form>
      <?php } ?>
		</div>
	</div>
</div>
</div>
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

	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>

<script type="text/javascript">
function myrun(){

var myrem = $("#Remark").val();

$.get("etr.php?q2="+myrem, function(data, status){
  
  alert(data);
  location.reload();
});


}

</script> 
</body>
</html>
