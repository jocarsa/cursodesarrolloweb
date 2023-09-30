<?php
    
    class Persona{
        private $edad;
        function __construct(){
            $this->edad = 0;
        }
        function getEdad(){
            return $this->edad;
        }
        function setEdad($nuevaedad){
            $this->edad = $nuevaedad;
        }
    }

    $Juan = new Persona();
    echo $Juan->getEdad()."<br>";
    $Juan->setEdad(1);
    echo $Juan->getEdad()."<br>";
    
?>