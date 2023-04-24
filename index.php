<?php
require_once "./config/router.php";
route('GET', 'http://localhost/application_oop/list', function(){
    echo '1';
    include "./get.html";
});
?>