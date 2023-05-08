<?php

class CRUD extends Connection {
    public function __construct(){
        // $this->openConnection();
    }
 

    public static function selectData($sql,$value){
        // select statement
        $select = self::$PDO->prepare($sql);
        $select->execute($value);
        return $select->fetchAll();
    }
    public static function insertData($sql,$value){
        // select statemente
        $insert = self::$PDO->prepare($sql);
        $insert->execute($value);
        var_dump($insert);
        return $insert;
    }
    public static function updateData(){
        // select statement
    }
    public static function deleteData(){
        // select statement
    }
    public function __destruct(){
        $this->closeConnection();
    }
}
?>