<?php
//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'dashboardg');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
  die("Connection failed: " . $mysqli->error);
}

//query to get data from the table
$query = ("SELECT installType,count(installType) AS count FROM crecord GROUP BY installType");
$output = array();

if ($result = mysqli_query($mysqli, $query)) {
    # code...
    foreach ($result as $row) {
        # code...
        $output[] = $row;
    }
} else {
    die("There was a problem". mysqli_error($mysqli));
}

echo json_encode($output);