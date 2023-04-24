<?php

    // START DATABASE CONFIG
    define("HOSTNAME"   , "localhost");
    define("USERNAME"   , "root");
    define("PASSWORD"   , "");
    define("DBNAME"     , "db_localhost");
    define("EXTTENSION" , "MYSQL");
   // END DATABASE CONFIG

    class Connection {
        public $HOSTNAME    = HOSTNAME;
        public $USERNAME    = USERNAME; 
        public $PASSWORD    = PASSWORD;   
        public $DBNAME      = DBNAME;
        public static $PDO;
        public function __construct(){
            $this->openConnection();
        }
        public function openConnection(){
            try {
                    self::$PDO  = new PDO("mysql:host=$this->HOSTNAME;dbname=$this->DBNAME",$this->USERNAME,$this->PASSWORD);
                    self::$PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    return self::$PDO;
            } catch (PDOException $err) {
                echo "Connection : " . $err->getMessage();
            }
        }
        public function closeConnection(){
            self::$PDO = null;
            exit;
        }
        public static function selectData($sql,$value){
            // select statement
            $select = self::$PDO->prepare($sql);
            $select->execute($value);
            return $select->fetchAll();
        }
        public static function insertData(){
            // select statemente
        }
        public static function updateData(){
            // select statement
        }
        public static function deleteData(){
            // select statement
        }
    }

?>