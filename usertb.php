<?php //connect to our database
include("dbconnect.php");

	
	$id=$_POST['id'];
    $name=$_POST['Nama'];
	$email=$_POST['email'];
    $pno=$_POST['pNo'];
    $alamat=$_POST['Alamat'];
    $pos=$_POST['Poskod'];
    $bandar=$_POST['Bandar'];
    $negeri=$_POST['Negeri'];
    $ity=$_POST['installType'];
    $ite=$_POST['InstallTeam'];
    $rm=$_POST['Remark'];
    try {

     $dbtry1 = $dbtry->prepare("INSERT INTO custb(id,Nama,email,pNo,Alamat,Poskod,Bandar,Negeri,InstallTeam,installType,Remark) 
     VALUES ('$id','$name','$email','$pno','$alamat','$pos','$bandar','$negeri','$ite','$ity','$rm')");
     $dbtry1->execute();
     
    echo '<script language="javascript">alert("Pesanan berjaya dihantar, pihak khidmat pelanggan akan menghubungi anda secepat yang mungkin!"); location.href="index2.php"</script>';

    }
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        echo("Masalah Pada Database");
    }


?>

