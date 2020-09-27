<?php //connect to our database
include("dbconnect.php");


    $name=$_POST['mynama'];
    $email=$_POST['myemail'];
    $pno=$_POST['mypno'];
    $adr=$_POST['myadr'];
    $cty=$_POST['mycty'];
    $st=$_POST['myst'];
    $pos=$_POST['mypos'];
    $itn=$_POST['myitn'];
    $quan=$_POST['myquan'];
    try {

     $dbtry1 = $dbtry->prepare("INSERT INTO enq2(name,email,pno,adr,cty,st,pos,itn,quan) 
     VALUES ('$name','$email','$pno','$adr','$cty','$st','$pos','$itn','$quan')");
     $dbtry1->execute();
     
    echo '<script language="javascript">alert("Mesej anda telah dihantar, pihak khidmat pelanggan akan memberi maklum balas secepat yang mungkin. Terima kasih."); location.href="index2.php"</script>';

    }
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        echo("Masalah Pada Database");
    }


?>

