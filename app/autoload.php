<?php    
    spl_autoload_register('autoload');
    function autoload($loader){
        $dirFolder  = array(
            "models",
            "controllers",
            "..\models",
            "..\controllers",
            "..\..\models",
            "..\..\controllers",
            "..\..\config\connection"
        );
        $classname = $loader;
        // $loadSubArr = explode("\\",$loader);
        // $classname  = array_pop($loadSubArr);
        // $namespaces = implode("\\",$loadSubArr);
        foreach($dirFolder as $dirs){
            $pathFile =  $dirs .  DIRECTORY_SEPARATOR . $classname . '.php';
            if(file_exists($pathFile)){
                require_once $pathFile;

            }
        }
    }

?>