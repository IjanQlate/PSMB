<?php
session_start();
include("dbconnect.php");
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `crecord` WHERE CONCAT('Nama','pNo','Alamat','Poskod','Bandar','Negeri','TimeDate','installType','installTime') LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `crecord`";
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

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Customer Details</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
<link href="img/favicon.jpg" rel="icon">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</script>
	<style type="text/css">
		#overlay{
			position: fixed;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			background: rgba(0, 0, 0, 0.6);

		}
	</style>
    <!-- header-area start -->
    <!-- header-area end -->
 
</head>

<body data-spy="scroll">
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
			<a href="#" class="close" data-dismiss="alert" aria-label="close" @click="clearMsg()">&times;</a>
		</div>
		<div class="alert alert-success" v-if="successMsg">
			{{ successMsg }}
			<a href="#" class="close" data-dismiss="alert" aria-label="close" @click="clearMsg()">&times;</a>
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
						<?php while($row = mysqli_fetch_array($search_result)):?>
						<tr class="text-center" v-for="user in crecord" :key="user.id">
							
							<td>{{ user.id }}</td>
                   			<td><a href="edit.php?id=<?php echo $row["id"]; ?>">{{ user.Nama }}</a></td>
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
						<?php endwhile;?>
					</tbody>
				</table>
			</div>
		<!-- Add user modal -->
		<div id="overlay" v-if="showAddModal">
			<div class="modal-dialog modal-dialog-scrollable" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Add New Customer</h5>
						<button type="button" class="close" @click="showAddModal=false">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body p-4">
						<form action="#" method="post">
							<div class="form-group">
								<input type="text" name="Nama" class="form-control form-control-lg" placeholder="Full Name" 
								v-model="newUser.Nama">
							</div>
							<div class="form-group">
								<input type="tel" name="pNo" class="form-control form-control-lg" placeholder="Phone Number" 
								v-model="newUser.pNo">
							</div>
							<div class="form-group">
								<input type="email" name="email" class="form-control form-control-lg" placeholder="E-Mail"
								v-model="newUser.email">
							</div>
							<div class="form-group">
								<input type="text" name="Alamat" class="form-control form-control-lg" placeholder="Address"
								v-model="newUser.Alamat">
							</div>
							<div class="form-group">
								<input type="text" name="Poskod" class="form-control form-control-lg" placeholder="Poscode"
								v-model="newUser.Poskod">
							</div>
							<div class="form-group">
								<input type="text" name="Bandar" class="form-control form-control-lg" placeholder="City"
								v-model="newUser.Bandar">
							</div>
							<div class="form-group">
								<input type="text" name="Negeri" class="form-control form-control-lg" placeholder="State"
								v-model="newUser.Negeri">
							</div>
							<div class="form-group">
								<span class="label-input100">Installation Types:</span>
								<select type="text" name="installType" class="form-control form-control-lg" placeholder="Installation Types"
								v-model="newUser.installType">
									<option>CCTV</option>
                      				<option>ALARM SYSTEM</option>
                      				<option>ACCESS DOOR SYSTEM</option>
								</select> 
							</div>
							<div class="form-group">
								<span class="label-input100">Date Of Installation:</span>
								<input type="date" name="installDate" class="form-control form-control-lg" placeholder="Date Of Installation"
								v-model="newUser.installDate">
							</div>
							<div class="form-group">
								<span class="label-input100">Installation Team:</span>
								<select type="text" name="InstallTeam" class="form-control form-control-lg" placeholder="Installation Team"
								v-model="newUser.InstallTeam">
									<option>UTRET Solution</option>
                      				<option>E&E Intech Solution</option>
                      				<option>ADMS Solution</option>
                      				<option>ISOTECH Solution</option>
								</select>
							</div>
							<div class="form-group">
								<button class="btn btn-info btn-block btn-lg"  @click="showAddModal=false; addUser();">Add Customer</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- edit user modal -->
		<div id="overlay" v-if="showEditModal">
			<div class="modal-dialog modal-dialog-scrollable" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Customer Details</h5>
						<button type="button" class="close" @click="showEditModal=false">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body p-4">
						<form action="#" method="post">
							<div class="form-group">
								<input type="text" name="Nama" class="form-control form-control-lg" v-model="currentUser.Nama">
							</div>
							<div class="form-group">
								<input type="tel" name="pNo" class="form-control form-control-lg" v-model="currentUser.pNo">
							</div>
							<div class="form-group">
								<input type="email" name="email" class="form-control form-control-lg" v-model="currentUser.email">
							</div>
							<div class="form-group">
								<input type="text" name="Alamat" class="form-control form-control-lg" v-model="currentUser.Alamat">
							</div>
							<div class="form-group">
								<input type="text" name="Poskod" class="form-control form-control-lg" v-model="currentUser.Poskod">
							</div>
							<div class="form-group">
								<input type="text" name="Bandar" class="form-control form-control-lg" v-model="currentUser.Bandar">
							</div>
							<div class="form-group">
								<input type="text" name="Negeri" class="form-control form-control-lg" v-model="currentUser.Negeri">
							</div>
							<div class="form-group">
								<span class="label-input100">Installation Types:</span>
								<select type="text" name="installType" class="form-control form-control-lg" v-model="currentUser.installType">
									<option>CCTV</option>
                      				<option>ALARM SYSTEM</option>
                      				<option>ACCESS DOOR SYSTEM</option>
								</select> 
							</div>
							<div class="form-group">
								<span class="label-input100">Date Of Installation:</span>
								<input type="date" name="installDate" class="form-control form-control-lg" v-model="currentUser.installDate">
							</div>
							<div class="form-group">
								<span class="label-input100">Installation Team:</span>
								<select type="text" name="InstallTeam" class="form-control form-control-lg" v-model="currentUser.InstallTeam">
									<option>UTRET Solution</option>
                      				<option>E&E Intech Solution</option>
                      				<option>ADMS Solution</option>
                      				<option>ISOTECH Solution</option>
								</select>
							</div>
							<div class="form-group">
								<textarea type="text" name="Remark" class="form-control form-control-lg" v-model="currentUser.Remark">
								</textarea>
							</div>
							<div class="form-group">
								<button class="btn btn-info btn-block btn-lg"  @click="showEditModal=false; updateUser()">Update Customer</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- delete user modal -->
		<div id="overlay" v-if="showDeltModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Delete Customer Details</h5>
						<button type="button" class="close" @click="showDeltModal=false">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body p-4">
						<h4 class="text-danger">
							Are you sure want to delete this customer details?
						</h4>
						<h5>You are deleting ' {{currentUser.Nama}} ' details</h5>
						<hr>
						<button class="btn btn-danger btn-lg" @click="showDeltModal=false; deleteUser(); clearMsg()">Yes</button>
						&nbsp;&nbsp;&nbsp;&nbsp;
						<button class="btn btn-success btn-lg" @click="showDeltModal=false">No</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer>
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
			axios.get("http://localhost/psma/proses.php?action=read")
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

