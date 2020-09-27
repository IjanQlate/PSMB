<?php
session_start();
include('dbconnect.php');
$id=$_REQUEST['id'];
$query = "SELECT * from crecord where id='".$id."'";
$connect = mysqli_connect("localhost", "root", "", "dashboardg"); 
$result = mysqli_query($connect, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);

if(isset($_POST["create_pdf"]))  
 {  
      require_once('tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '  
      <h3 align="center">Export HTML Table data to PDF using TCPDF in PHP</h3><br /><br />  
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr>  
                <th width="5%">ID</th>  
                <th width="30%">Name</th>  
                <th width="10%">Gender</th>  
                <th width="45%">Designation</th>  
                <th width="10%">Age</th>  
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</form>';  
      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('sample.pdf', 'I');  
 }  

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
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <!-- Main stylesheet File -->

  <!-- Responsive stylesheet File -->

<!--===============================================================================================-->
</head>
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
                    <a class="page-scroll" >View Customer Reports</a>
                  </li>
				  
                  <a class="navbar-brand page-scroll sticky-logo" href="customer.php">
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
            <h2></br>Customer Details</h2>
          </div>
        </div>
      </div>
    <div>
  </br>
  </div>

	<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="img/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(img/bg-02.jpg);">
				<span class="contact100-form-title-1">
					Detail
				</span>

				<span class="contact100-form-title-2">
					Read mode 
				</span>
			</div>
<div class="row align-items-center">  
        
      
				<form class="contact100-form validate-form" name="form"class="form-container"> 
					<input type="hidden" name="new" value="1" />
					<input name="id" type="hidden" class="form-control" id="str-data" name="str_data" value="192.168.1.33/edit.php?id=<?php echo $row["id"]; ?>">

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Full Name:</span>
                  	<label><span class="text-danger"></span></label>
                  	<input class="form-control"  type="text" placeholder= "Customer Name" name="Nama" required value="<?php echo $row['Nama'];?>" disabled>
                </div>
				
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">No. Phone:</span>
                  	<label><span class="text-danger"></span></label>
                  	<input class="form-control"  type="text" placeholder= "Customer Name" name="pNo" required value="<?php echo $row['pNo'];?>"disabled>
                </div>
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Address:</span>
                  	<label><span class="text-danger"></span></label>
                  	<input class="form-control"  type="text" placeholder= "Customer Name" name="Alamat" required value="<?php echo $row['Alamat'];?>"disabled>
                </div>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Poscode:</span>
                  	<label><span class="text-danger"></span></label>
                  	<input class="form-control"  type="text" placeholder= "Customer Name" name="Poskod" required value="<?php echo $row['Poskod'];?>"disabled>
                </div>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">City:</span>
                  	<label><span class="text-danger"></span></label>
                  	<input class="form-control"  type="text" placeholder= "Customer Name" name="Bandar" required value="<?php echo $row['Bandar'];?>"disabled>
                </div>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">State:</span>
                  	<label><span class="text-danger"></span></label>
                  	<input class="form-control"  type="text" placeholder= "Customer Name" name="Negeri" required value="<?php echo $row['Negeri'];?>"disabled>
                </div>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Installation Type:</span>
                  	<label><span class="text-danger"></span></label>
                  	<select class="form-control"  type="text" placeholder= "Installation Type" name="installType" required value="<?php echo $row['installType'];?>"disabled>
                  		<option>CCTV</option>
                      	<option>ALARM SYSTEM</option>
                      	<option>ACCESS DOOR SYSTEM</option>
                    </select>
                </div>

				<div class="wrap-input100 validate-input" data-validate="The Team : ">
					<span class="label-input100">Installation Team:</span>
                  	<label><span class="text-danger"></span></label>
                  	<select class="form-control"  type="text" placeholder= "Installation Team" name="Team" required value="<?php echo $row['Team'];?>"disabled>
                  		<option>UTRET Solution</option>
                      	<option>E&E Intech Solution</option>
                      	<option>ADMS Solution</option>
                      	<option>UTRET Solution</option>
                    </select>
                </div>

        <div class="wrap-input100 validate-input" data-validate = "Message is required" >
					<span class="label-input100">Remarks:</span>
					<input class="input100" name="Remark" placeholder="" required value="<?php echo $row['Remark'];?>" disabled></input>
					<span class="focus-input100"></span>
				</div>

        <div id="app" class="wrap-input100 validate-input" data-validate="Name is required">
          <span class="label-input100">Customer Qr code:</span>
                    <label><span class="text-danger"></span></label>
                    <qrcode value="192.168.1.34/psmb/edit2.php?id=<?php echo $row["id"]; ?>"></qrcode>
                </div>

			
          <a href="#" onclick='window.open("qrpdf.php?id=<?php echo $row["id"]; ?>");return false;'>
            <span>
              Print QR Code
            </span>
            
      </a>
      
		</div>
	</div>
</div>
</div>
 
  
</div>
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
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/vue@2.6.11/dist/vue.min.js" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/highlightjs@9.16.2/highlight.pack.js" crossorigin="anonymous"></script>
  <script src="https://fengyuanchen.github.io/shared/google-analytics.js" crossorigin="anonymous"></script>
  <script>hljs.initHighlightingOnLoad();</script>
  <script src="js/vue-qrcode.js"></script>
  <script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
<script>
  window.onload = function () {
  Vue.component(VueQrcode.name, VueQrcode);

  new Vue({
    el: '#app',
  });
};
</script>
</body>
</html>
