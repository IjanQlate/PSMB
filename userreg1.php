<?php //connect to our database
include("dbconnect.php");


    $name=$_POST['mynama'];
    $id=$_POST['mypNo'];
    $alamat=$_POST['myAlamat'];
    $pos=$_POST['myPoskod'];
    $bandar=$_POST['myBandar'];
    $negeri=$_POST['myNegeri'];
    $td=$_POST['myTimeDate'];
    $ity=$_POST['myinstallType'];
    $iti=$_POST['myinstallTime'];
    try {

     $dbtry1 = $dbtry->prepare("INSERT INTO crecord(Nama,pNo,Alamat,Poskod,Bandar,Negeri,TimeDate,installType,installTime) 
     VALUES ('$name','$id','$alamat','$pos','$bandar','$negeri','$td','$ity','$iti')");
     $dbtry1->execute();
     
    echo '<script language="javascript">alert("Pendaftaran berjaya, Sila cetak QR Code sekarang!"); location.href="customerdetails.php"</script>';

    }
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        echo("Masalah Pada Database");
    }


?>

