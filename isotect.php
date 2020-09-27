<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Team Report_Isotect</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.jpg" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->


  <!-- Libraries CSS Files -->
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">


<header>
  <nav class="navbar navbar-expand-xl navbar-dark bg-dark" style="background-color: black; min-height: 80px;">
    <a class="navbar-brand page-scroll sticky-logo" href="dashboard2.php" >
          <h1><span style="color: cyan;">Dashboard</span> Gastri Sdn. Bhd</h1>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
    <a class="navbar-brand" href="customer.html">Customer Details</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
       <li class="active">
    <a class="navbar-brand page-scroll sticky-logo" href="teamreport.php">
       <h1> <img src="img/back.png" height="24" width="24" alt="" title=""> </h1>
    
    <a class="page-scroll" href="logout.php"><i class="fa fa-sign-out" style="font-size:24px" onclick="return confirm('Are you sure to logout?');"></i></a>
       </li>
    </ul>
  </div>
</nav>
</header>

 
  
  <!-- Start Service area -->
  <div id="services" class="services-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <h2></br> <img src="img/team/4.jpg" height="75" width="75" alt="" title=""> ISOTECH SOLUTION</h2>
          </div>
        </div>
      </div>
    <div>
	</br>
	</div>
<header>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
    <a class="navbar-brand" href="customer.html">Customer Details</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
       <li class="active">
    <a class="navbar-brand page-scroll sticky-logo" href="dashboard2.php">
       <h1> <img src="img/back.png" height="24" width="24" alt="" title=""> </h1>
    
    <a class="page-scroll" href="logout.php"><i class="fa fa-sign-out" style="font-size:24px" onclick="return confirm('Are you sure to logout?');"></i></a>
       </li>
    </ul>
  </div>
</nav>
</header>
  <div id="app">
      <div class="container">
      <div class="row mt-3">
        <div class="col-lg-6">
          <h3 class="text-info">Registered Customer</h3>
        </div>
        <div class="col-lg-6">
          <button class="btn btn-info float-right" @click="showAddModal=true; clearMsg()">
            <i class="fas fa-user"></i>&nbsp;&nbsp;Add New Customer
          </button>
        </div>
      </div>
    <hr class="bg-info">
    <div class="alert alert-danger" v-if="errorMsg">
      {{ errorMsg }}
    </div>
    <div class="alert alert-success" v-if="successMsg">
      {{ successMsg }}
    </div>
    <!--display customer-->
        <div class="table-responsive">  
                    <table id="customer_data" class="table table-striped table-bordered">  
          <thead>
            <tr class="text-center bg-info text-light">
              <th >ID</th>
                        <th >Nama</th>
                        <th >Email</th>
                        <th >No.Telefon</th>
                        <th >Juruteknik Pemasangan</th>
                        <th >Jenis Pemasangan</th>
                        <th >Tarikh Pemasangan</th>
                        <th colspan="2">Kemaskini Maklumat</th>
            </tr>
          </thead>
          <tbody>
            <tr class="text-center" v-for="user in crecord">
              <td>{{ user.id }}</td>
                        <td>{{ user.Nama }}</td>
                        <td>{{ user.email }}</td>
                        <td>{{ user.pNo }}</td>
                        <td>{{ user.InstallTeam }}</td>
                        <td>{{ user.installType }}</td>
                        <td>{{ user.installDate }}</td>
                        <td><a href="#" class="text-success"><i class="fas fa-edit" @click="showEditModal=true; 
                          selectUser(user); clearMsg()"></i></a></td>
                        <td><a href="#" class="text-danger"><i class="fas fa-trash-alt" @click="showDeltModal=true; 
                          selectUser(user); clearMsg()"></i></a></td>
            </tr>
          </tbody>
        </table>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue"></script>
  
  <script>
    var app = new Vue({
  el: '#app',
  data: {
    dtRef: null,
    errorMsg: "",
    successMsg: "",
    showAddModal: false,
    showEditModal: false,
    showDeltModal: false,
    crecord: [],
    newUser: {Nama: "",email: "",pNo: "",Alamat: "",Poskod: "",Bandar: "",Negeri: "",InstallTeam: "",installType: "",installDate: "",Remark: ""},
    currentUser: {},

  },
  mounted: function(){
    this.getAllUsers();
  },
  methods: {
    getAllUsers(){
      axios.get("http://localhost/psma/proses.php?action=team4")
      .then(function(response){
        if(response.data.error){
          app.errorMsg = response.data.message;
        }
        else{
          app.crecord = response.data.crecord;
        }
      });
    },
    addUser(){
      var  formData = app.toFormData(app.newUser);
      axios.post("http://localhost/psma/proses.php?action=create", formData)
      .then(function(response){
        app.newUser = {Nama: "",email: "",pNo: "",Alamat: "",Poskod: "",Bandar: "",Negeri: "",InstallTeam: "",installType: "",installDate: "",Remark: ""};
        if(response.data.error){
          app.errorMsg = response.data.message;
        }
        else{
          app.successMsg = response.data.message;
          app.getAllUsers();
        }
      });
    },

    updateUser(){
      var  formData = app.toFormData(app.currentUser);
      axios.post("http://localhost/psma/proses.php?action=update", formData)
      .then(function(response){
        app.currentUser = {};
        if(response.data.error){
          app.errorMsg = response.data.message;
        }
        else{
          app.successMsg = response.data.message;
          app.getAllUsers();
        }
      });
    },

    deleteUser(){
      var  formData = app.toFormData(app.currentUser);
      axios.post("http://localhost/psma/proses.php?action=delete", formData)
      .then(function(response){
        app.currentUser = {};
        if(response.data.error){
          app.errorMsg = response.data.message;
        }
        else{
          app.successMsg = response.data.message;
          app.getAllUsers();
        }
      });
    },

    toFormData(obj){
      var fd = new FormData();
      for(var i in obj){
        fd.append(i,obj[i]);
      }
      return fd;
    },

    selectUser(user){
      app.currentUser = user;
    },
    clearMsg(){
      app.errorMsg = "";
      app.successMsg = "";
    }
  }
});
  </script>

</body>

</html>
