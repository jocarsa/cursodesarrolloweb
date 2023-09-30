<?php
    try{
        echo 1/0;
    }catch(Exception $e){
        echo $e->getMessage();
    }

    echo "El programa continúa";

?>