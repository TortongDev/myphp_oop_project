<?php
    class InsertAjaxController {
        private static $sql;
        private static $val;
        public function __construct($args){
            self::$sql = $args['SQL'];
            self::$val = $args['VAL'];

        }
        public static function insertStartAjax(){
            $crud = new CRUD;
            $crud->openConnection();
            CRUD::insertData(self::$sql,self::$val);
            $crud->closeConnection();
        } 
    }

   
?>            