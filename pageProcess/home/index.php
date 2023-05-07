<?php
require_once "../../app/controllers/Router.php";
    $new = new Router("GET","home", 'homepage');
    var_dump($new->useRoute());
?>