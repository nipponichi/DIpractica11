<!DOCTYPE html>
<html>
    <head>
        <title>Practica 1.1</title>
    </head>
    <body>
        <?php
        $nombre = "Javier";
        $arr_nombres[] = "Juan";
        $arr_nombres[] = "Pedro";
        echo "hola mundo".$nombre;

        for($i=0; $i <count($arr_nombres); $i++){
           echo "</br>".$arr_nombres[$i];
        }
        ?>
    </body>
</html>