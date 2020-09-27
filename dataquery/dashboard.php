<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
date_default_timezone_set("Asia/Kuala_Lumpur");
// error_reporting(0);

class Dashboard{

    private $conn;
    private $table_name = "crecord";

    // object properties
    public $id;
    public $Nama;
    public $invois_no;
    public $email;
    public $pNo;
    public $Alamat;
    public $Poskod;
    public $Bandar;
    public $Negeri;
    public $InstallTeam;
    public $installType;
    public $installDate;
    public $Remark;

    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    public function graph_dashboard(){

        // select all query
        $query = "SELECT
            *
        FROM
            " . $this->table_name ."
        ORDER BY id ASC";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;

    }

    public function countData(){

        // select all query
        $query = "SELECT
            COUNT(*) AS total
        FROM
            " . $this->table_name ."
        WHERE installType = '" . $this->installType ."'";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;

    }

}

// get database connection
include_once 'config.php';

$database = new Database();
$db = $database->getConnection();

$dashboard = new Dashboard($db);
$stmt = $dashboard->graph_dashboard();
$num = $stmt->rowCount();

if($num>0){

    $i = 1;
    $installType_array = array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        array_push($installType_array, $installType);
    }

    // print_r($installType_array);
    // print_r(array_unique($installType_array));
    // $unique_array = array_unique($installType_array);

    $array = array_values( array_flip( array_flip( $installType_array ) ) );
    for ($i=0; $i<sizeof($array); $i++){
        $dashboard->installType = $array[$i];
        $stmt = $dashboard->countData();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $finaldata[] = "['$array[$i]',$total]";
        }
    }

    // echo join($finaldata, ',');
    // echo json_encode($finaldata);
    // print_r($array);




}



/*

[4:59 pm, 24/09/2020] ~ Call Me Ijan ~: 1.Product Sales - crecord(installType)
-so kt graph tu boleh tgk berapa dah pemasangan for installation , cctv berapa , access door berapa , dll
[4:59 pm, 24/09/2020] ~ Call Me Ijan ~: 2.Team Installation - crecord(InstallTeam)
-boleh tgk setiap team dah buat berapa pemasangan , so boleh tgk team mne yg bnyak buat pemasangan

*/

?>