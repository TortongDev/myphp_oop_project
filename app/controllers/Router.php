<?php
class Router {
    public $RouterPath;
    public $path;
    public $method;
    public function __construct()
    {
        $this->method = $_GET['url'];
        $this->path = $_GET['url'];

        $this->RouterPath = array(
            '/' => function(){
                echo "Home Page";
            },
            '/page1' => function(){
                echo "Page 1";
            }
        );

    }
}

?>