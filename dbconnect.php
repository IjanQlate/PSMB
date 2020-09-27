<?php //connect to our database

	/*** mysql hostname***/
	$mysql_hostname = 'localhost';
	
	/*** mysql username***/
	$mysql_username = 'root';
	
	/*** mysql password***/
	$mysql_password = '';
	
	/*** mysql dbname***/
	$mysql_dbname = 'dashboardg';
	

	try {
	 $dbtry = new PDO ("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
	} 
	 catch (PDOException $e){
		die('unable to connect to database'. $e->getMessage());
	}
	 ?>