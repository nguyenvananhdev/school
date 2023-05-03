
<?php 
// GIỚI THIỆU VỀ LỚP DATABASE 
// Có các hàm kết nối tới cơ sở dữ liệu 
// Các hàm lấy dữ liệu, thêm dữ liệu, cập nhật cơ sở dữ liệu 
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "dbshools";
    private $mysqli;
// Hàm khởi tạo lớp Database 
    public function __construct() {
        $this->mysqli = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->mysqli->connect_error) {
            die("Connection failed: " . $this->mysqli->connect_error);
        }
    }
// Hàm khởi tạo lệnh query
    public function query($sql) {
        $result = $this->mysqli->query($sql);

        if ($result === false) {
            die("Query failed: " . $this->mysqli->error);
        }

        return $result;
    }
// Hàm lấy tất cả dữ liệu của một bảng 
    function getAllData($tableName){
        $SQL = "SELECT * FROM $tableName";
        $sql_query = $this->query($SQL);
        
    }
// Hàm thêm một hàng vào bảng 
    function addRow($tableName,$data){
        
        $columns = implode(", ", array_keys($data));
        $values = "'" . implode("', '", array_values($data)) . "'";
        
        $SQL = "INSERT INTO $tableName ($columns) VALUES ($values)";
        $sql_query = $this->query($SQL);
        
    }
// Hàm đóng kết nối tới cơ sở dữ liệu 
    public function close() {
        $this->mysqli->close();
    }

}

?>