<?php    
    spl_autoload_register('autoload');
    function autoload($loader){
        $dirFolder  = array(
            "class",
            "models",
            "controllers",
            "..\models",
            "..\controllers",
            "..\..\models",
            "..\..\..\models",
            "..\..\controllers",
            "..\..\..\controllers",
            "..\..\config\connection",
            "..\..\..\config\connection",
            '..\..\app\controllers',
            '..\..\..\app\controllers',
            '..\app\controllers',
            '..\app\models',
            '..\..\app\models',
            '..\..\..\app\models'
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