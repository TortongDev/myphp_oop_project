<?php
header("Content-type: application/json; charset=utf-8");
class ListUsers {
    public $USERNAME;
    public $PASSWORD;
    public $STATUS;
    public $TABLE = "users";
    public $contentType = '';
    public function __construct(){
       
    }
    

    public  function getUsername(){
        return $this->USERNAME;

    }
    
    public function getPassword(){
        return $this->PASSWORD;

    }
    public function getStatus(){
        return $this->STATUS;

    }

    public function queryJson(){
        $db = new Connection;
        $db->openConnection();
        $sql = "SELECT * FROM {$this->TABLE} WHERE 1=1";
        $stmt = Connection::$PDO->query($sql);
        $stmt->execute();
        while ($r = $stmt->fetchAll()) {
            $arr[] = array(
                'respone' => $r 
            );
        }
        echo json_encode($arr);
        $db->closeConnection();
    }
}

?>