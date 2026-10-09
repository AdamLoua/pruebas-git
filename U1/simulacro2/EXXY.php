<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h3>Ejercicio 1</h3>
    <?php
        $parImpar = [];
        $rows = 4;
        $cols = 5;
        for ($i=0; $i <$rows; $i++) { 
            for ($j=0; $j < $cols; $j++) { 
                if(($i+$j)%2 == 0){
                    $parImpar[$i][$j] = "par";
                }else{
                    $parImpar[$i][$j] = "impar";
                }
            }
        }

        foreach($parImpar as $filas){
            echo implode(" ,", $filas). "<br>";
        }
    ?>
    <h3>Ejercicio 2</h3>
    <?php
        include "functions/funcXY.php";
        $imprimir = basicStatistics(1, 2, 3, -2, 9, -3);
    ?>
    <ul>
        <?php
            foreach($imprimir as $key => $valor){
                if($key == "odd"){
                    echo "<li>".$key. " : ".implode(" ,",$valor)."</li>";

                }else{
                    echo "<li>".$key. " : ".$valor."</li>";
                }
            }
            
        ?>
    </ul>
    <h3>Ejercicio 3</h3>

</body>
</html>