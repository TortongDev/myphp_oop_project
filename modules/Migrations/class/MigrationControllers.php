<?php

class MigrationControllers 
{
    private $sql = "CREATE TABLE ";
    private $primaryKey = " INT PRIMARY KEY AUTO_INCREMENT ";
    private $tableName = "";
    private $field = "";
    private $run;

    public function __construct($args)
    {
        $this->tableName = $args["TBNAME"][0];
        $field = "";
        foreach ($args['FLEID'] as $key => $value) {
        // echo "<pre>";
        // print_r($value);
        // echo "</pre>";
            
            $field .= " {$value['FLEID_NAME']} {$value['TYPE']}({$value['LENGTH']}) ,";
        }
       $field = substr($field,0,-1);
       $this->field = $field;
       $this->run = $this->sql. $this->tableName .' ('.$this->tableName.'_ID'.$this->primaryKey.' , '.$this->field.')';
    
    }
    public function migrationStart(){
        $db = new Connection;
        $db->openConnection();
      
      
        Connection::$PDO->exec("DROP TABLE IF EXISTS ".$this->tableName);
        Connection::$PDO->exec("{$this->run}");
        echo "Created Table in Database Successfully.";
     
        $db->closeConnection();
        exit;
    }

}

?>