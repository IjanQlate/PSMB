<?php //connect to our database
include("dbconnect.php");


    $mynama=$_POST['name'];
    $myemail=$_POST['email'];
    $mypno=$_POST['pno'];
    $mymsg=$_POST['msg'];
    try {

     $dbtry1 = $dbtry->prepare("INSERT INTO enq(name,email,pno,msg) VALUES ('$mynama','$myemail','$mypno','$mymsg')");
     $dbtry1->execute();
     
    echo '<script language="javascript">alert("Mesej anda telah dihantar, pihak khidmat pelanggan akan memberi maklum balas secepat yang mungkin. Terima kasih."); location.href="index2.php"</script>';

    }
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        echo("Masalah Pada Database");
    }


?>

