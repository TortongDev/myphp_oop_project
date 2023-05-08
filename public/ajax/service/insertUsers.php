<?php
require_once "../../../autoload.php";
 $arr = array(
    "SQL" => "INSERT INTO USERS(USERNAME,PASSWORD,STATUS) VALUES (?,?,?)",
    "VAL" => array(
        'ggg' , 'sss','1'
    )
);

$insert =  new InsertController($arr);
$insert->insertStart();

?>