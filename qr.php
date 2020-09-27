<?php 
require_once "function.php";
include('templates/header.php');

if (!empty($_POST['level'])) {
    $errorCorrectionLevel = $_POST['level'];    
} else {
    $errorCorrectionLevel = 'L';
}


if (!empty($_POST['size'])) {
    $matrixPointSize = (int)$_POST['size'];
} else {
    $matrixPointSize = 4;
}


if (!empty($_POST['str_data'])){
    $strData = $_POST['str_data'];
} else {
    $strData = 'https://techarise.com/generate-qr-codes-using-php';
}

?>
<form name="datetime"  method="post">
    <section class="showcase">
      <div class="container">
        <div class="pb-2 mt-4 mb-2 border-bottom">
          <h2>Generate QR Codes using PHP</h2>
        </div>
        <div class="row align-items-center">  
          <div class="form-group col-md-8">
            <label for="inputEmail4">Data</label>
            <input type="text" class="form-control" id="str-data" name="str_data" value="<?php if(!empty($_POST["str_data"])) { print $_POST["str_data"]; } else { print $strData; } ?>">  
          </div>
        </div>
        <div class="row align-items-center">  
           <div class="form-group col-md-4">
                <label for="inputEmail4">ECC</label>
                <select name="level" class="form-control" id="qr-level">
                    <option value="L" <?php if($errorCorrectionLevel=='L') { echo 'selected';} ?> >L - smallest</option>
                    <option value="M" <?php if($errorCorrectionLevel=='M') { echo 'selected';} ?> >M</option>
                    <option value="Q" <?php if($errorCorrectionLevel=='Q') { echo 'selected';} ?> >Q</option>
                    <option value="H" <?php if($errorCorrectionLevel=='H') { echo 'selected';} ?> >H - best</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputEmail4">Size</label>
                <select class="form-control" name="size" id="qr-size">
                    <?php 
                    for($i=1;$i<=40;$i++) {
                        echo '<option value="'.$i.'"'.(($matrixPointSize==$i)?' selected':'').'>'.$i.'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary mt-3 float-left">Generate QR</button>
            </div>
        </div>
        <div class="row align-items-center">  
          <div class="form-group col-md-6">
            <label for="inputEmail4">
              <?php
                // generate QR Codes
                $qrcode = generateQRCodes($strData, $errorCorrectionLevel, $matrixPointSize, 'tmp');
                echo '<img src="tmp/'.basename($qrcode).'" />';
              ?>
            </label>
          </div>
        </div>
    </div>
    </section>
</form>
<?php include('templates/footer.php');?>    