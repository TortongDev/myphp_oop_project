<?php

class ListJsonController {
    public function getJsonUsers(){
       $json = new ListUsers;
       $json->queryJson();
    }
}


?>