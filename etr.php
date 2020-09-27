<?php //connect to our database
session_start();
include("dbconnect.php");
$id=$_REQUEST['id'];
$query = "SELECT * from crecord where id='".$id."'";
$connect = mysqli_connect("localhost", "root", "", "dashboardg"); 
$result = mysqli_query($connect, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
$idx=$_REQUEST['id'];
$query = "SELECT * from crecord where id='".$idx."'";

	$idx=$_REQUEST['id'];
	$rmk=$_GET['q2'];

	try {
		
			$dbx = $dbtry->prepare("UPDATE crecord SET Remark='$rmk' WHERE id = '$idx'");
	 		$dbx->execute();
			echo ("Report sent!");


		

    }
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        echo'Masalah Pada Database';
    }


?>