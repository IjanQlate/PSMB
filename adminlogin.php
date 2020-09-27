<?php //connect to our database
include("dbconnect.php");

session_start();


	$idx=$_POST['myid'];
	$passx=$_POST['mypass'];

    if(!empty($_POST["remember_me"])) {
    setcookie ("myid",$_POST["myid"],time()+ 3600);
    setcookie ("mypass",$_POST["mypass"],time()+ 3600);
    echo "Cookies Set Successfuly";
    } else {
    setcookie("myid","");
    setcookie("mypass","");
    echo "Cookies Not Set";
    }
    try
			{
		$dbtry1 = $dbtry->prepare("SELECT id FROM admin WHERE email='$idx' AND pass='$passx'");
		$dbtry1->execute();
		$data=$dbtry1->fetch(PDO::FETCH_OBJ);
        /*** if we have no result then fail boat ***/
        if($data == false)
        {
                $message = 'Salah Id atau Pass';
       	echo '<script language="javascript">alert("Salah username atau password"); location.href="index2.php#myModal"</script>';
        }
        /*** if we do have a result, all is well ***/
        else
        {
                /*** set the session user_id variable ***/
				$user_id = $data->id;
                $_SESSION['admin_id'] = $user_id;

                /*** tell the user we are logged in ***/
                header("Location: dashboard2.php");
				
				
        }
         
        


    }
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'Masalah Pada Database';
    }
?>
