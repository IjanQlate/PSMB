<?php //connect to our database
session_start();
include("dbconnect.php");

	$idx=$_SESSION['admin_id'];
	$tajuk=$_GET['q2'];
	$isi=$_GET['q3'];
	try {
		
			$dbx = $dbtry->prepare("UPDATE articles SET title='$tajuk',content='$isi' WHERE id = '2'");
	 		$dbx->execute();
			echo ("Ubahsuai Maklumat Berjaya!!");


		

    }
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        echo'Masalah Pada Database';
    }


?>