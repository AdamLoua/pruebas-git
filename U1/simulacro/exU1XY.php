<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
    <h1>simulacro</h1>
    </header>
    <main>
        <article>
            <h2>ejercicio 1</h2>
            <?php
            /* EJERCICIO 1. (1,5 puntos) En exU1XY.php, crea el array bidimensional de 4 filas y 5
            columnas llamado $parImpar. En cada posición, pon el string "par" si la suma de fila +
            columna es par, e "impar" si es impar. Consideramos que filas y columnas empiezan por 0.
            Una vez creado el array, recórrelo e imprímelo para que aparezca:
            par, impar, par, impar, par
            impar, par, impar, par, impar
            par, impar, par, impar, par
            impar, par, impar, par, impar*/

            $bid=[];
            for ($i=0; $i < 4 ; $i++) { 
               for ($j=0; $j <5 ; $j++) { 
                    if (($i + $j)%2 == 0) {
                        $bid[$i][$j] = "par";
                    }else{
                        $bid[$i][$j] = "impar";

                    }
               }
            }
            foreach($bid as $valor){
                echo implode(", ", $valor) . "<br>";
            }
            

            for ($i=0; $i < sizeof($bid); $i++) { 
                for ($j=0; $j <sizeof($bid[$i]) ; $j++) { 
                    echo $bid[$i][$j] . ", ";
                }
                echo "<br>";
            }
            ?>
        </article>

         <article>
            <h2>ejercicio 2</h2>
            <?php
             /*JERCICIO 2. (2 puntos) En functionsXY.php, crea la unción basicStatistics. Recibe
            entre 0 y n parámetros. Devuelve un array asociativo con las siguientes claves:
            ● sum: la suma de todos los números
            ● max: el máximo
            ● min: el mínimo
            avg: la media
            ● neg: la cantidad de números negativos
            ● odd: un array con todos los números impares 
            */
            
            include "functions/functionsXY.php";

            $imprimir = basicStatistics(1, 2, 3, -2, 9, -3);
            //lo voy a imprimir fuera del php
            ?>

            <ul>
                <?php
                //por el array
                    foreach($imprimir as $key => $valor){
                        if($key == "odd"){
                            echo "<li>$key: " . implode(", ", $valor). "</li>";

                        }else{
                            echo "<li>$key: $valor </li>";
                        }
                    }
                ?>
            </ul>
        </article>

        <article>
            <h2>Ejercicio 3</h2>
            <?php
            var_dump(operations([15, 6, 8.3, 4])); // [4, 6, 8.3, 15]
            //operations([15, 6, 8.3, 4], "order", false); // [15, 8.3, 6, 4]
            //operations([15, 6, 8.3, 4], "sum"); // 33.3
            //operations([15, 6, 8.3, 4], "product"); // 2988
            ?>
        </article>

        <article>
            <h2>Ejercicio 4</h2>
            <?php
                /*Realiza las siguientes operaciones con el array $employees:
                1. (0,5 puntos) Recorre el array con un bucle e imprime en una lista ordenada <ol> el
                nombre y el salario de les empleades del departamento Sales:
                2. (0,7 puntos) Calcula el salario medio por departamento, e imprime cada uno en un
                párrafo <p>:
                3. (0,8 puntos) Recorre el array con un bucle e imprime en una lista no ordenada los
                nombres de les empleades del departamento de IT ordenados alfabéticamente. */

                include "employees.php";
                echo "<ol>";
                foreach($employees as $valor){
                    if($valor["department"] === "Sales"){
                        echo "<li>".$valor["name"]. " - ".$valor["salary"]."</li>";
                    }
                }
                echo "</ol>";

                $sumIT =0;
                $cantidadIT=0;
                $sumSales =0;
                $cantidadSales=0;
                foreach($employees as $valor){
                    if($valor["department"] === "Sales"){
                        $cantidadSales++;
                        $sumSales+= $valor["salary"];
                    }else{
                        $cantidadIT++;
                        $sumIT+= $valor["salary"];
                    }
                }
                
            ?>
            <p>El salario medio de IT es <?= $sumSales/$cantidadSales?></p>
            <p>El salario medio de IT es <?= $sumIT/$cantidadIT?></p>

            <?php
            /*Recorre el array con un bucle e imprime en una lista no ordenada los
            nombres de les empleades del departamento de IT ordenados alfabéticamente. */
            $it = [];
            foreach($employees as $valor){
                  if($valor["department"] == "IT"){
                    $it[] = $valor["name"];
                  }  
                }
                sort($it); 
            ?>
            <ul>
                <?php
                    foreach($it as $nomb):
                ?>
                <li>
                    <?= $nomb?>
                </li>

                <?php
                    endforeach;
                ?>
            </ul>
           
        </article>
        <footer>

        </footer>
    </main>
    
    
</body>
</html>