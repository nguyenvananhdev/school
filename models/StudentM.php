<?php 
class StudentM extends Database{

    function StudentM(){
       
    }
   function getStudent(){
        $database = new Database();
        $database->getAllData('students');
        var_dump($abc);
        
   }
   function addOneStudent($data){
    $database = new Database();
    $database->addRow('students',$data);
}
}



?>