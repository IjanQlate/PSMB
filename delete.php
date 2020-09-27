<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com/
*/

require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM custb WHERE tbID=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: troubleshoot.php"); 
?>