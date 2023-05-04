<?php

class templateControllers {
    public $template;
    public function __construct($template){
        $this->template = $template;
    }
    public function loadPage(){
        if($this->template == 'header'){
            echo<<<HEADER
                <header>
                    <div class="header-start">Header</div>
                    <div class="header-end">Header</div>
                </header>
            HEADER;

        }elseif ($this->template == 'footer') {
            echo "footer";
        }
    }
}


?>