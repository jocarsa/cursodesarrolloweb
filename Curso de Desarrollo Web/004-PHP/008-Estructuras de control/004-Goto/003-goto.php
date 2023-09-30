<?php
    
    goto principio;

    mifinal:
        echo "Esto es el final<br>";
        goto finalfinal;
    medio:
        echo "Esto es el medio<br>";
        goto mifinal;
    principio:
        echo "Esto es el principio<br>";
        goto medio;
    finalfinal:
        echo "ya";
?>