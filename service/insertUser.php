<?php

require_once "./autoload.php";
$db = new Connection;
$db->openConnection();
    $insert = array(
        'USERNAME' => "Kittithat",
        'PASSWORD' => "12345678",
        'STATUS'   => "1"
    );
    $stmt = Connection::$PDO->prepare("INSERT INTO USERS(USERNAME,PASSWORD,STATUS) VALUES (:USERNAME,:PASSWORD,:STATUS)");
    $stmt->execute($insert);

$db->closeConnection();


?>