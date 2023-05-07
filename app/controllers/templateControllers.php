<?php

class templateControllers extends Router{
    public $template;
    public $getLink;
    public function __construct($template){
        $this->template = $template;
    }
    public function loadPage(){
        if($this->template == 'header'){
            echo<<<HEADER
                <header>
                    <div class="header-start">TSmartWeb</div>
                    <div class="header-end">|||</div>
                </header>
                <nav>
                <ul>
                    <li><a href="{$this->getLink("home")}">หน้าแรก</a></li>
                    <li><a href="{$this->getLink("register")}">สมัครสมาชิก</a></li>
                    <li><a href="{$this->getLink("about")}">เกี่ยวกับเรา</a></li>
                    <li><a href="#">Link1</a></li>
                    <li><a href="#">Link1</a></li>
                    <li><a href="#">Link1</a></li>
                </ul>
                </nav>

            HEADER;

        }elseif ($this->template == 'footer') {
            echo "footer";
        }
    }
}


?>