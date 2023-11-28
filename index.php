<!DOCTYPE html>
<html>
    <head>
        <title>Practica 1.1</title>
    </head>
    <body>
        <?php
            $rows = 6;
            $cols = 4;
        ?>
        <table>
            <thead>
                <tr>
                    <?php
                        for($i=0; $i < $cols; $i++){
                            echo "<th> Campo".($i+1)."</th>";
                        }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php
                    for($i = 0; $i < $rows; $i++){
                        echo "<tr>";

                        for($j = 0; $j < $cols; $j++){
                            echo "<td>Fila".($i+1)."Columna".($j+1)."</td>";
                        }
                    }
                ?>
            </tbody>
        </table>
    </body>
</html>