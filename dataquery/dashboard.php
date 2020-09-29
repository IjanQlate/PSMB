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
    private $table_custb = "custb";
    private $table_crecord = "crecord";
    private $table_enq = "enq";
    private $table_enqtwo = "enqtwo";


    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    public function countData_Customer(){

        // select all query
        $query = "SELECT
            *
        FROM
            " . $this->table_custb ."
        ";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;

    }

    public function countData_crecord(){

        // select all query
        $query = "SELECT
            *
        FROM
            " . $this->table_crecord ."
        ";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;

    }

    public function countData_enq(){

        // select all query
        $query = "SELECT
            *
        FROM
            " . $this->table_enq ."
        ";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();

        return $stmt;

    }

    public function countData_enqtwo(){

        // select all query
        $query = "SELECT
            *
        FROM
            " . $this->table_enqtwo ."
        ";

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

$stmt = $dashboard->countData_Customer();
$numcustomer = $stmt->rowCount();

$stmt_crecord = $dashboard->countData_crecord();
$totaltroubleshoot = $stmt_crecord->rowCount();

$stmt_enq = $dashboard->countData_enq();
$enq_one = $stmt_enq->rowCount();

$stmt_enqtwo = $dashboard->countData_enqtwo();
$enq_two = $stmt_enqtwo->rowCount();

$totalinbox = $enq_one + $enq_two;

echo json_encode(array("newcustomer"=>$numcustomer, "troubleshoot"=>$totaltroubleshoot, "inbox"=>$totalinbox))

?>