<?php
class Router {
    public $RouterPath;
    public $path;
    public $method;
    public $callback;
    public $usePath;

    public function __construct($method,$path,$fileName)
    {

        $pathFull  = $_SERVER['PHP_SELF'];
        $pathArray = explode("/",$pathFull);
        $pathPOP   = array_pop($pathArray);
        $pathPOP2   = array_pop($pathArray);
        $pathCapsule = __DIR__.$pathFull;
        $pathRepace = str_replace("\\","/",$pathCapsule);
        $usePath  = "";
        $usePath .= "../../app/views/";
        $usePath .= $fileName.".php";
        $this->usePath = $usePath;
        $this->method   = $method;
        $this->path     = isset($path) ? $path : '';

        if(empty($this->usePath)){
            return false;
        }
            $this->RouterPath = array(
                $this->method=>array(
                    $this->path => function(){
                       include($this->usePath);
                }
                )
                
            );
            
            if($this->RouterPath[$this->method][$this->path]){
                $redirectPath = $this->RouterPath[$this->method][$this->path];
                $redirectPath();
            }else{
                http_response_code(404);
                return false;
            }
           
            return true;
    }
    public function url($method,$path,$callback){
        
            
    }
        
// new Router("GET","/home","./app/views/homepage.php");
   

}

// new Router("GET","/", "../views/homepage.php");

?>