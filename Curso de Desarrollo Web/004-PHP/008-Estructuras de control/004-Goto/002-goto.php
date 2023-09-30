<?php
    
goto principio;

    mifinal:
        echo "Esto es el final<br>";
    medio:
        echo "Esto es el medio<br>";
    principio:
        echo "Esto es el principio<br>";
        goto medio;
    finalfinal:
        echo "ya";
?>