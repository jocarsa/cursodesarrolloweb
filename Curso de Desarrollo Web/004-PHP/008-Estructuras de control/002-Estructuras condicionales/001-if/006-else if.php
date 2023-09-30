<?php
    $diadelasemana = "longaniza";

    if($diadelasemana == "lunes"){
        echo "Hoy es el peor día de la semana";
    }else if($diadelasemana == "martes"){
        echo "Hoy es el segundo peor día de la semana";
    }else if($diadelasemana == "miercoles"){
        echo "Ya estamos a mitad de semana";
    }else if($diadelasemana == "jueves"){
        echo "Casi es viernes";
    }else if($diadelasemana == "viernes"){
        echo "Por fin es viernes";
    }else if($diadelasemana == "sabado"){
        echo "Hoy es el mejor día de la semana";
    }else if($diadelasemana == "domingo"){
        echo "Mañana ya es lunes";
    }else{
        echo "Lo que has escrito no es un día";
    }

?>