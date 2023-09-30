<?php
    
    class Persona{
        private $edad;
        function __construct(){
            $this->edad = 0;
        }
        function getEdad(){
            return $this->edad;
        }
    }

    $Juan = new Persona();
    echo $Juan->getEdad()."<br>";
    
    
?>