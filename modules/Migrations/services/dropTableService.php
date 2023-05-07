<?php
    require_once "../../autoload.php";
    $db = new Connection;
    $db->openConnection();
    $tb = isset($_POST['tbname']) ? $_POST['tbname'] : '';
    $drop = "DROP TABLE ".$tb;
    
    if($_SERVER['REQUEST_METHOD'] === "POST"):
        $stmtdrop = Connection::$PDO->query($drop);
        header("Location: ../dropTable.php");
        exit;
    endif;

    $db->closeConnection();

?>