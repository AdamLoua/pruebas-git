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

    <?php
        var_dump(operations([15, 6, 8.3, 4],"sum"));
    ?>

    <h3>Ejercicio 4</h3>

    <?php
        include "employees.php";
    ?>
    <ol>
        <?php
            foreach($employees as $valor):
        ?>
            
            <?php
                if($valor["department"] == "Sales"){
                echo "<li>";
                echo "{$valor["name"]} : {$valor["salary"]}";
                echo "</li>";
                }
            ?>
            
        <?php
            endforeach;
        ?>
    </ol>

    <?php
        $sumIT =0;
        $cantidadIT=0;
        $sumSales =0;
        $cantidadSales=0;

        foreach($employees as $valor){
            if($valor["department"] == "IT"){
                $sumIT += $valor["salary"];
                $cantidadIT++;
            }
            if($valor["department"] == "Sales"){
                $sumSales += $valor["salary"];
                $cantidadSales++;
            }
        }

    ?>
    <p>El salario medio de IT es <?=$sumIT/$cantidadIT?></p>
    <p>El salario medio de Sales es <?=$sumSales/$cantidadSales?></p>

    <?php
    $nombres = [];
    foreach($employees as $valor){
        if($valor["department"] == "IT"){
            $nombres[] = $valor["name"];
        }
    }

    sort($nombres);

    echo "<ul>";
        foreach($nombres as $name){
            echo "<li>".$name."</li>";
        }
    echo "</ul>";
    ?>
</body>
</html>