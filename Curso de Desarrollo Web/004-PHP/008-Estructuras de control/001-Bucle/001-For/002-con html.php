<!doctype html>
<html>
    <head>
        <style>
            .dia{
                width:20px;
                height:20px;
                border:1px solid black;
                float:left;
            }
        </style>
    </head>
    <body>
    
    <?php

        for($dia = 1;$dia<=31;$dia++){
            echo "<div class='dia'>".$dia."</div>";
        }

    ?>
        
    </body>
</html>