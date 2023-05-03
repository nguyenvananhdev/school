<?php 

class UserM {
    require_once 'models/Database.php';
    $connect = new Database();
    $connect->getConnection();
    private $conn;
    private $table_name = "users";

    public function __construct($db) {
        $this->conn = $db;
    }
    public function getAllData($table_name){
		$SQL = "SELECT * FROM $table_name";
		mysqli_query($conn,$SQL);
	}
}


?>