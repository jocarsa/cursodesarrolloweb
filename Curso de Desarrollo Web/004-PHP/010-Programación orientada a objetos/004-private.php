<?php
    
    class Persona{
        public $edad;
        function __construct(){
            $this->edad = 0;
        }
    }

    $Juan = new Persona();
    echo $Juan->edad."<br>";
    $Juan->edad = 1;
    echo $Juan->edad."<br>";
    
?>