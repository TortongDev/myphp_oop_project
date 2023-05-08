<?php 

$arr = array(
    "SQL" => "INSERT INTO TBTEST(FIELD1,FIELD2,FIELD3) VALUES (?,?,?)",
    "VAL" => array(
        "VAL1" , "VAL2",'VAL3'
    )
);
$insert = new InsertController($arr); 
$insert->insertStart();

?>