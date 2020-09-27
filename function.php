<?php
function generateQRCodes($strData, $level, $size, $folder) {

	// include QR Codes Lib
	include('lib/phpqrcode/qrlib.php');

    //set it to writable location, a place for temp generated PNG files
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.$folder.DIRECTORY_SEPARATOR;
    
    //html PNG location prefix
    $PNG_WEB_DIR = $folder.'/';

    //ofcourse we need rights to create temp dir
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    
    $filename = $PNG_TEMP_DIR.'test.png';
   
    $errorCorrectionLevel = $level;  
    
    $matrixPointSize = $size;

    if (isset($strData)) { 
    
        //it's very important!
        if (trim($strData) == '')
            die('data cannot be empty! <a href="?">back</a>');
        // user data
        $filename = $PNG_TEMP_DIR.'test'.md5($strData.'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
        QRcode::png($strData, $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
        
    } else {    
    
        //default data
        QRcode::png($string, $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
        
    }     
    // benchmark
    //QRtools::timeBenchmark();    
    return $filename;
}
?> 