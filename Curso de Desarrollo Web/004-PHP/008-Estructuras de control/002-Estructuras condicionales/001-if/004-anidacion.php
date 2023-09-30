<?php
    $edad = 12;
    if($edad < 30){
        if($edad < 15){
            echo "Eres un niño";
        }else{
            echo "Eres un joven";
        }
        
    }else{
         if($edad < 50){
            echo "Ya no eres tan joven";
        }else{
            echo "Decididamente ya no eres joven";
        }
    }

?>