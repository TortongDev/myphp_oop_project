<?php
require "../autoload.php";
$table = array(
    "TBNAME" => array(
        "USERS"
    ),
    "FLEID" =>array(
        array(
            "FLEID_NAME" => "USERNAME",
            "TYPE"       => "VARCHAR",
            "LENGTH"     => 40
        ),
        array(
            "FLEID_NAME" => "PASSWORD",
            "TYPE"       => "VARCHAR",
            "LENGTH"     => 40
        ),
        array(
            "FLEID_NAME" => "STATUS",
            "TYPE"       => "CHAR",
            "LENGTH"     => 2
        ),
        array(
            "FLEID_NAME" => "TIMESTAMP",
            "TYPE"       => " TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP",
            "LENGTH"     => 2
        )
    )
); 

$mg = new MigrationControllers($table);
$mg->migrationStart();
?>