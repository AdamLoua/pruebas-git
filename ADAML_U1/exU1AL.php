<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <?php
        $grid = [];
        for ($i=0; $i < 5 ; $i++) { 
            for ($j=0; $j < 5; $j++) { 
                if($i == $j){
                    $grid[$i][$j] = "D";
                }
                if($j>$i){
                    $grid[$i][$j] = "A";
                }
                if($j<$i){
                    $grid[$i][$j] = "B";
                }
            }
        }

        foreach($grid as $valor){
            echo implode(", ", $valor) . "<br>";
        }
    ?>

    <table>
        <tr>
            <?php
                foreach($grid as $filas):
            ?>
            
                <?php
                    foreach($filas as $columnas):
                ?>

                <td><?=$columnas?></td>
                <?php
                endforeach;
                ?>

            </tr>
            <?php
               endforeach;
            ?>
    </table>

    <h2>Ejercicio 2</h2>
    <?php
        require_once "functions/functionsAL.php";

        $imprimir = textStats("PHP","server","Laravel","web","arrays","Madrid");
        
    ?>

    <ul>
        <?php
        //por el array
            foreach($imprimir as $key => $valor){
                echo "<li>$key: $valor </li>";
            }
        ?>
    </ul>

    <?php
        $prueba = textStats();
        var_dump($prueba);
    ?>

    <h2>Ejercicio 3</h2>

    <?php
        $nums = [7,-4,12,0,-9,3,8];
        var_dump(filterNumber($nums));
        var_dump(filterNumber($nums,"odd"));
        var_dump(filterNumber($nums,"positive"));
        var_dump(filterNumber($nums,"even",2));
        var_dump(filterNumber($nums,"odd",10));
        var_dump(filterNumber($nums,"positive",6));
        var_dump(filterNumber($nums,"prime"));




    ?>

    <h2>Ejercicio 4</h2>
    <?php
        require_once "data/products.php";
        
    ?>
    <ol>
        <?php
        foreach($products as $valor):
        ?>
            <?php
                if($valor["stock"]<5){
                    echo "<li>".$valor["name"]." - ".$valor["price"]."€ (stock: ".$valor["stock"].")"."</li>";
                }
            ?>
        <?php
        endforeach;
        ?>
    </ol>

    <?php
    $valorElec=0;
    $valorBook=0;
    $valorHome=0;
    

    foreach($products as $valor):
    ?>
        <?php
            if($valor["category"]=="Electronics"){
                $valorElec += $valor["price"]*$valor["stock"];
            }
            if($valor["category"]=="Books"){
                $valorBook += $valor["price"]*$valor["stock"];
            }
            if($valor["category"]=="Home"){
                $valorHome += $valor["price"]*$valor["stock"];
            }
        ?>
    <?php
    endforeach;
    ?>

    <p>El valor del inventario de Electronics es <?=$valorElec?>€</p>
    <p>El valor del inventario de Books es <?=$valorBook?>€</p>
    <p>El valor del inventario de Home es <?=$valorHome?>€</p>


    <?php
    arsort($products);
    ?>
    <ul>
    <?php
    foreach($products as $valor):
    ?>
        <?php 
            if($valor["category"] == "Electronics"){
                echo "<li>".$valor["name"]." (".$valor["price"].")"."</li>";
            }
        ?>
           
    <?php
    endforeach;
    ?>
    </ul>   



</body>
</html>