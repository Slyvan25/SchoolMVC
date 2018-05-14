<?php

public function run(){
    spl_autoload_register(
        function ($class){
            $class = strtolower(str_replace("\\","/",$class));
            include '/core/classes/'.$class.'.class.php';
        }
    );
    spl_autoload_extensions('.class.php');
}

?>