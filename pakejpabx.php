<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Pakej PABX</title>
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

  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main stylesheet File -->
  <link href="css/stylee.css" rel="stylesheet">

  <!-- Responsive stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.containerr {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
  h2 {
  color: #000;
  font-size: 26px;
  font-weight: 300;
  text-align: center;
  text-transform: uppercase;
  position: relative;
  margin: 30px 0 80px;
}
h2 b {
  color: #ffc000;
}
h2::after {
  content: "";
  width: 100px;
  position: absolute;
  margin: 0 auto;
  height: 4px;
  background: rgba(0, 0, 0, 0.2);
  left: 0;
  right: 0;
  bottom: -20px;
}
.carousel {
  margin: 50px auto;
  padding: 0 70px;
}
.carousel .item {
  min-height: 330px;
    text-align: center;
  overflow: hidden;
}
.carousel .item .img-box {
  height: 160px;
  width: 100%;
  position: relative;
}
.carousel .item img { 
  max-width: 100%;
  max-height: 100%;
  display: inline-block;
  position: absolute;
  bottom: 0;
  margin: 0 auto;
  left: 0;
  right: 0;
}
.carousel .item h4 {
  font-size: 18px;
  margin: 10px 0;
}
.carousel .item .btn {
  color: #333;
    border-radius: 0;
    font-size: 11px;
    text-transform: uppercase;
    font-weight: bold;
    background: none;
    border: 1px solid #ccc;
    padding: 5px 10px;
    margin-top: 5px;
    line-height: 16px;
}
.carousel .item .btn:hover, .carousel .item .btn:focus {
  color: #fff;
  background: #000;
  border-color: #000;
  box-shadow: none;
}
.carousel .item .btn i {
  font-size: 14px;
    font-weight: bold;
    margin-left: 5px;
}
.carousel .thumb-wrapper {
  text-align: center;
}
.carousel .thumb-content {
  padding: 15px;
}
.carousel .carousel-control {
  height: 100px;
    width: 40px;
    background: none;
    margin: auto 0;
    background: rgba(0, 0, 0, 0.2);
}
.carousel .carousel-control i {
    font-size: 30px;
    position: absolute;
    top: 50%;
    display: inline-block;
    margin: -16px 0 0 0;
    z-index: 5;
    left: 0;
    right: 0;
    color: rgba(0, 0, 0, 0.8);
    text-shadow: none;
    font-weight: bold;
}
.carousel .item-price {
  font-size: 13px;
  padding: 2px 0;
}
.carousel .item-price strike {
  color: #999;
  margin-right: 5px;
}
.carousel .item-price span {
  color: #86bd57;
  font-size: 110%;
}
.carousel .carousel-control.left i {
  margin-left: -3px;
}
.carousel .carousel-control.left i {
  margin-right: -3px;
}
.carousel .carousel-indicators {
  bottom: -50px;
}
.carousel-indicators li, .carousel-indicators li.active {
  width: 10px;
  height: 10px;
  margin: 4px;
  border-radius: 50%;
  border-color: transparent;
}
.carousel-indicators li { 
  background: rgba(0, 0, 0, 0.2);
}
.carousel-indicators li.active {  
  background: rgba(0, 0, 0, 0.6);
}
.star-rating li {
  padding: 0;
}
.star-rating i {
  font-size: 14px;
  color: #ffc000;
}
</style>
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
                <a class="navbar-brand page-scroll sticky-logo" href="index2.php">
                  <h1> <img src="img/logo.png" height="53" width="53" alt="" title=""> </h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  
                </a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                   <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="index2.php#home">Laman Utama</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="index2.php#about">Siapa Kami</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="index2.php#services">Mengapa Kami</a>
                  </li>
                  <li>
          <a class="page-scroll" href="index2.php#portfolio">Testimoni</a>
                    
                  </li>
                    </li>
                  
           <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Pakej<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                     <li><a href="pakejcctv.php" ><img src="img/parallax/cctv.png" height="40" width="40" alt="" title=""> CCTV</a></li>
                      <li><a href="pakejaccdoor.php" ><img src="img/parallax/accessdoor.png" height="40" width="40" alt="" title=""> Access Door</a></li>
            <li><a href="pakejintercom.php" ><img src="img/parallax/1to1.png" height="40" width="40" alt="" title=""> Intercom</a></li>
            <li><a href="pakejpabx.php" ><img src="img/parallax/pabx.png" height="40" width="40" alt="" title=""> PABX</a></li>
            <li><a href="pakejalarm.php" ><img src="img/parallax/alarm.png" height="37" width="37" alt="" title="">
          Alarm System</a></li>
           
            
                    </ul> 
                  </li>
                  <li>
                    <a class="page-scroll" href="index2.php#contact">Hubungi Kami</a>
                  </li>
          <li>
          </br>
                   <img src="img/login.png" height="55" width="55" alt="" title="">
          
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
 
  
 
  <!-- start pricing area -->
  <div id="pricing" class="pricing-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2></br>Pakej PABX</h2>
			<ul class="nav navbar-nav navbar-right">
			<a href="spekpabx.php"><img src="img/spekicon.png" height="200" width="200" alt="" title=""></a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
          
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12" style="left: 35%;
     width: 30%; padding: 10px ">
          <div class="pri_table_list active">
            <span class="saleon">top sale</span>
           </br>
		  <img src="img/blog/PABX.jpg" height="30" width="300" alt="" title="">
		  <h4> RM 2950 </h4>
            <ol>
              <li class="check">1x Unit Decoder HD CVI 1080P</li>
              <li class="check">8x Unit Camera 2MP</li>
              <li class="check">1x Power Supply</li>
              <li class="check">1x 2TB Hardisk Western Digital</li>
              <li class="check">1x Wifi Dongle</li>
			   <li class="check">Jaminan selama <b>2 TAHUN</b></li>
              <li ><b>Standard Wiring and Installation</b></li>
            </ol>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Beli</button>
          </div>
        </div>
       
        </div>
      </div>
    </div>
  </div>
  <!-- End pricing table area -->
   <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Maklumat Pertanyaan</h4>
        </div>
        <div class="modal-body">
          <div class="row">
  <div class="col-md-12">
    <div class="containerr" style="float: center;">
      <form action="enq2.php" method="post">
        <div class="row">
          <div class="col-25">
            <br>
            <label for="fname"><i class="fa fa-user"></i> Nama Penuh</label>
            <input type="text" name="mynama" id="mynama"  placeholder="Ahmad">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" name="myemail" id="myemail"  placeholder="ahmad@example.com">
            <label for="phone"><i class="fa fa-phone"></i> Nombor Telefon</label>
            <input type="text" name="mypno" id="mypno" placeholder="0112233344">
            <label for="adr"><i class="fa fa-address-card-o"></i> Alamat</label>
            <input type="text" name="myadr" id="myadr" placeholder="Jalan 6 Taman Teratai">
            <label for="city"><i class="fa fa-institution"></i> Bandar</label>
            <input type="text" name="mycty" id="mycty" placeholder="Melaka">

            <div class="row">
              <div class="col-25">
                <label for="state">Negeri</label>
                <input type="text" name="myst" id="myst" placeholder="MLK">
              </div>
              <div class="col-25">
                <label for="zip">Poskod</label>
                <input type="text" name="mypos" id="mypos" placeholder="12345">
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                
				<label for="cars">Jenis Premis :</label>
  <select id="myitn" name="myitn">
    <option value="Masjid">Masjid</option>
    <option value="Hotel">Hotel</option>
    <option value="Rumah">Rumah</option>
    <option value="Pejabat">Pejabat</option>
  </select>
              </div>
              <div class="col-25">
                <label for="zip">Lawatan ke tapak projek?</label>
                <label><input type="radio" name="myquan" id="myquan" value="Ya">Ya</label>
				<label><input type="radio" name="myquan" id="myquan" value="Tidak">Tidak</label>
            </div>
            </div>
          </div>
          
        </div>
        <input type="submit" value="Hantar" class="btn">
      </form>
    </div>
  </div>
</div>
        </div>
        
      </div>
      
    </div>
  </div>
  
 

  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2>© HAKCIPTA TERPELIHARA </h2>
                </div>

                <p>Penafian: Pihak kami tidak bertanggungjawab terhadap sebarang kehilangan atau kerosakan yang dialami kerana menggunakan maklumat dalam laman ini.</p>
                <div class="footer-icons">
                  <ul>
                     <li>
                      <a href="https://www.facebook.com/cctvmalaysia1/" target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/cctvmalaysia1_" target="_blank"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                      <a href="http://gas3solution.blogspot.com/"target="_blank"><i class="fa fa-bold"></i></a>
                    </li>
                    
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <p>&nbsp;</p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> 03-89203970</p>
                  <p><span>Email:</span> gastrisdnbhd@gmail.com</p>
                  <p><span>Waktu Operasi:</span> 8.30am-5.30pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Servis Kami</h4>
                <div class="flicker-img">
                  <a href="#"><img src="img/parallax/1.png" alt=""></a>
                  <a href="#"><img src="img/parallax/2.png" alt=""></a>
                  <a href="#"><img src="img/parallax/3.png" alt=""></a>
                  <a href="#"><img src="img/parallax/4.png" alt=""></a>
                  <a href="#"><img src="img/parallax/5.png" alt=""></a>
                  <a href="#"><img src="img/parallax/6.png" alt=""></a>
                </div>
              </div>
            </div>
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

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="js/mainn.js"></script>
</body>

</html>
