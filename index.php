<?php
require_once "./app/controllers/Router.php";

$new = new Router();
$new->url("get","/home", goPath('homepage'))
?>