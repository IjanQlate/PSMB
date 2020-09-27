<?php
session_start();
include("dbconnect.php");
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `enq` WHERE CONCAT('name','email','pno','msg') LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `enq`";
    $search_result = filterTable($query);

}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "dashboardg");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
?>
<?php
$query = "SELECT * from enq where id='".$id."'";
$connect = mysqli_connect("localhost", "root", "", "dashboardg"); 
$result = mysqli_query($connect, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$pno=$_REQUEST['pno'];
$msg=$_REQUEST['msg'];


$update="update crecord set Nama='".$name."', pNo='".$phone."', Alamat='".$alamat."', Poskod='".$pos."', Bandar='".$bandar."', Negeri='".$negeri."', TimeDate='".$td."', installType='".$ity."', installTime='".$iti."',
where id='".$id."'";
mysqli_query($connect, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='csearch.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Inbox</title>
  <link href="img/favicon.jpg" rel="icon">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">



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
                    
                  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="csearch.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Inbox
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          
          <br>
          <a class="dropdown-item" href="csearch2.php" style="color: black">Package Enquiry</a>
          <br>
          <a class="dropdown-item" href="" style="color: black"></a>
          <br>
          <a class="dropdown-item" href="csearch3.php" style="color: black">Enquiry Message</a>
          <br>
        </div>
      </li>
          
                  <a class="navbar-brand page-scroll sticky-logo" href="dashboard2.php">
                  <h1> <img src="img/back.png" height="25" width="25" alt="" title="" style=" padding-top: 7px"> </h1>
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

  <!-- Start Service area -->
  <div id="services" class="services-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h3></br>Customer Enquiry</h3>
              <br>
          </div>
        </div>
      </div>
    <div>
	</div>
    <!-- Search form -->
    <form class="form-inline d-flex justify-content-center md-form form-sm mt-0" action="csearch.php" method="post">
      <i class="glyphicon glyphicon-search" style="margin-left: 40% ; text-align: center"></i>
      <input class="form-control form-control-sm ml-3 w-75" id="myInput" onkeyup="myFunction()" type="text" name="valueToSearch" placeholder="Customer Name"
    aria-label="Nama Pelanggan" style="margin-left: 1% ; text-align: center">
      <br>
      <br>
      <br>
</form>
			<table class="table table-hover table-fixed .table-cell" id ="myTable" style="text-align: left">
			          <thead class="thead-dark">
                <tr class="table-dark text-dark" style="text-align: center ; background-color: lightgrey">
                	  <th style="text-align: center">ID</th>
                    <th style="text-align: center">Nama</th>
                    <th style="text-align: center">Email</th>
                    <th style="text-align: center">No.Telefon</th>
                    <th style="text-align: center">Mesej</th>
                    <th style="text-align: center" colspan="2">Maklum Balas Pelanggan</th>
                </tr>
                </thead>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <a href="www.google.com"><tr>
                	<td><?php echo $row['id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['pno'];?></td>
                    <td><?php echo $row['msg'];?></td>
                    <td>
						        <a type="button" class="btn btn-warning" href="https://api.whatsapp.com/send?phone=+6<?php echo $row["pno"]; ?>" target="blank">
                    <span class="glyphicon glyphicon-send"></span> Reply</a>
					          </td>
					<td>
                    <a button type="button" class="btn btn-danger" href="delete3.php?id=<?php echo $row["id"]; ?>" 
                      onClick="return confirm('are you sure you want to delete??');">
                      <span class="glyphicon glyphicon-trash"></span> Delete</a>
                    </td>
                </tr></a>
                <?php endwhile;?>
            </table>

 <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
                 <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
         <!-- Modal -->


    			<!-- Modal content-->


				<form class="contact100-form validate-form" name="form" method="post" action="csearch.php<?php echo $row['id'];?>" class="form-container"> 
					<input type="hidden" name="new" value="1" />
					<input name="id" type="hidden" value="<?php echo $row['id'];?>">

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Full Name:</span>
                  	<label><span class="text-danger"></span></label>
                  	<input class="form-control"  type="text" placeholder= "Customer Name" name="Nama" required value="<?php echo $row['Nama'];?>">
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
                  	<select class="form-control"  type="text" placeholder= "Installation Type" name="installType" required value="<?php echo $row['installType'];?>">
                  		  <option>CCTV</option>
                      	<option>ALARM SYSTEM</option>
                      	<option>ACCESS DOOR SYSTEM</option>
                    </select>
                </div>

				<div class="wrap-input100 validate-input" data-validate="The Team : ">
					<span class="label-input100">Installation Team:</span>
                  	<label><span class="text-danger"></span></label>
                  	<select class="form-control"  type="text" placeholder= "Installation Team" name="Team" required value="<?php echo $row['Team'];?>">
                  		  <option>UTRET Solution</option>
                      	<option>E&E Intech Solution</option>
                      	<option>ADMS Solution</option>
                      	<option>UTRET Solution</option>
                    </select>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Message is required" >
					<span class="label-input100">Remarks:</span>
					<textarea class="input100" name="remark" placeholder="mesej" required value="<?php echo $row['mesej'];?>"></textarea >
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>
<?php } ?>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
 <script type="text/javascript">
    function openDialog() {
       $("#somediv").dialog({modal: true});
    } 
 </script>
 <script>
    $(document).ready(function () {
        $(".test").click(function () {
            $("#thedialog").attr('src', $(this).attr("href"));
            $("#somediv").dialog({
                width: 400,
                height: 450,
                modal: true,
                close: function () {
                    $("#thedialog").attr('src', "about:blank");
                }
            });
            return false;
        });
    });
</script>
<!--cari pelanggan====================================================-->
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
<!-- delete maklumat pengguna -->
<script type="text/javascript">
function delete_id(id)
{
     if(confirm('Sure To Remove This Message ?'))
     {
        window.location.href='index.php?delete_id='+id;
     }
}
</script>
<!-- update maklumat pengguna -->

</body>

</html>
