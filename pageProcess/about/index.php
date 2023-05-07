<?php
require_once "../../app/controllers/Router.php";
    $new = new Router("GET","about", 'about');
    $new->useRoute();
?>