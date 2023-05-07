<?php
class Router {
    public $RouterPath;
    public $path;
    public $method;
    public $callback;
    public $usePath;
    public $fileName;

    public function __construct($method,$path,$fileName)
    {
        $this->method   = isset($method) ? $method : 'GET';
        $this->path     = isset($path) ? $path : '/';
        $this->fileName = isset($fileName) ? $fileName : 'home';

        $usePath  = "";
        $usePath .= "../../app/views/";
        $usePath .= $fileName.".php";
        $this->usePath = $usePath;

      
    }
    public function useRoute(){
        $pathFull  = $_SERVER['PHP_SELF'];
        $pathArray = explode("/",$pathFull);
        $pathPOP   = array_pop($pathArray);
        $pathPOP2   = array_pop($pathArray);
        $pathCapsule = __DIR__.$pathFull;
        $pathRepace = str_replace("\\","/",$pathCapsule);
        if(empty($this->usePath)){
            return false;
        }
            
        if($this->method === "GET" || $this->method === "get" || $this->method == "Get"){
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
        }elseif($this->method === "POST" || $this->method === "post" || $this->method == "Post"){
            http_response_code(400);
        }
        return true;
    }
        
// new Router("GET","/home","./app/views/homepage.php");
   

}

// new Router("GET","/", "../views/homepage.php");

?>