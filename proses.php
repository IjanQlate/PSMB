<?php
	$conn = new mysqli("localhost","root","","dashboardg");
		if ($conn->connect_error) {
			die("connection failed!" .$conn->connect_error);
		}

	$result = array('error'=>false);
	$action = '';

	if (isset($_GET['action'])){
		$action = $_GET['action'];
	}
 
if ($action == 'read') {
	$sql = $conn->query("SELECT * FROM crecord ");
	$users = array();
	while ($row = $sql->fetch_assoc()){
		array_push($users, $row);
	}
	$result['crecord'] = $users;
}

if ($action == 'create') {
	$name=$_POST['Nama'];
	$inv=$_POST['invois_no'];
    $phone=$_POST['pNo'];
    $email=$_POST['email'];
    $add=$_POST['Alamat'];
    $pos=$_POST['Poskod'];
    $city=$_POST['Bandar'];
    $state=$_POST['Negeri'];
    $ity=$_POST['installType'];
    $di=$_POST['installDate'];
    $it=$_POST['InstallTeam'];
    $re=$_POST['Remark'];

	$sql = $conn->query("INSERT INTO crecord (Nama,invois_no,email,pNo,Alamat,Poskod,Bandar,Negeri,InstallTeam,installType,installDate,Remark) 
		VALUES('$name','$inv','$email','$phone','$add','$pos','$city','$state','$it','$ity','$di','$re')");
	if ($sql){
		$result['message'] = "Customer added successfully!";
	}
	else {
		$result['error'] = true;
		$result['message'] = "Customer registration failed!";
	}
}

if ($action == 'update') {
	$id=$_POST['id'];
	$name=$_POST['Nama'];
	$inv=$_POST['invois_no'];
    $email=$_POST['email'];
    $phone=$_POST['pNo'];
    $add=$_POST['Alamat'];
    $pos=$_POST['Poskod'];
    $city=$_POST['Bandar'];
    $state=$_POST['Negeri'];
    $it=$_POST['InstallTeam'];
    $ity=$_POST['installType'];
    $di=$_POST['installDate'];
    $re=$_POST['Remark'];

	$sql = $conn->query("UPDATE crecord SET Nama='$name' ,invois_no='$inv' ,email='$email' ,pNo='$phone' ,Alamat='$add' ,Poskod='$pos' ,Bandar='$city' ,Negeri='$state' ,InstallTeam='$it' ,installType='$ity' ,installDate='$di' ,Remark='$re' WHERE id='$id'");
	if ($sql){
		$result['message'] = "Customer details updated successfully!";
	}
	else {
		$result['error'] = true;
		$result['message'] = "Customer update failed!";
	}
}

if ($action == 'delete') {
	$id=$_POST['id'];

	$sql = $conn->query("DELETE FROM crecord WHERE id='$id'");
	if ($sql){
		$result['message'] = "Customer deleted successfully!";
	}
	else {
		$result['error'] = true;
		$result['message'] = "Customer deletion failed!";
	}
}

if ($action == 'team1') {
	$sql = $conn->query("SELECT * FROM crecord WHERE InstallTeam = 'UTRET Solution'");
	$users = array();
	while ($row = $sql->fetch_assoc()){
		array_push($users, $row);
	}
	$result['crecord'] = $users;
}
if ($action == 'team2') {
	$sql = $conn->query("SELECT * FROM crecord WHERE InstallTeam = 'E&E Intech Solution'");
	$users = array();
	while ($row = $sql->fetch_assoc()){
		array_push($users, $row);
	}
	$result['crecord'] = $users;
}
if ($action == 'team3') {
	$sql = $conn->query("SELECT * FROM crecord WHERE InstallTeam = 'ADMS Solution'");
	$users = array();
	while ($row = $sql->fetch_assoc()){
		array_push($users, $row);
	}
	$result['crecord'] = $users;
}
if ($action == 'team4') {
	$sql = $conn->query("SELECT * FROM crecord WHERE InstallTeam = 'ISOTECH Solution'");
	$users = array();
	while ($row = $sql->fetch_assoc()){
		array_push($users, $row);
	}
	$result['crecord'] = $users;
}
	$conn->close();
	echo json_encode($result);
?>