<?php

    function autoload($loader){
        $dirFolder = array("../");
        foreach($dirFolder as $key => $dirs){
            $paths =  $dirs.'/'.$loader.'.php';
            if(file_exists($paths)){
                require "{$paths}";
                return true;
            }
        }
        return false;
    }
    spl_autoload_register('autoload');
?>