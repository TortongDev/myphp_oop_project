<?php    
    spl_autoload_register('autoload');
    function autoload($loader){
        $dirFolder  = array(

            "models",
            "..\models",
            "..\..\models",
            "..\..\..\models",
            '..\app\models',
            '..\..\app\models',
            '..\..\..\app\models',

            "controllers",
            "..\controllers",
            "..\..\controllers",
            "..\..\..\controllers",
            '..\app\controllers',
            '..\..\app\controllers',
            '..\..\..\app\controllers',

            "config",
            "config\connection",
            "..\config\connection",
            "..\..\config\connection",
            "..\..\..\config\connection",

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