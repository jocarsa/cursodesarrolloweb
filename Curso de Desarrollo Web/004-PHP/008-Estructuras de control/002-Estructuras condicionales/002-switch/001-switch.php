<?php
    $diadelasemana = "martes";

    switch($diadelasemana){
        case "lunes":
            echo "Hoy es el peor día de la semana";
            break;
        case "martes":
            echo "Hoy es el segundo peor día de la semana";
            break;
        case "miercoles":
            echo "Ya estamos a mitad de semana";
            break;
        case "jueves":
            echo "Casi es viernes";
            break;
        case "viernes":
            echo "Por fin es viernes";
            break;
        case "sabado":
            echo "Hoy es el mejor día de la semana";
            break;
        case "domingo":
            echo "Mañana ya es lunes";
            break;
        default:
            echo "Lo que has escrito no es un día";
    }

?>