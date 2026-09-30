<?php
include "infoArrays/Bibliotecas.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>1</h2>
    <p>1)
        <?php
        echo $biblioteca["Ciencia Ficción"][1]["titulo"];
        echo "<br>";
        ?>
    </p>
    <p>2)
        <?php
        echo $biblioteca["Historia"][0]["autores"][0];
        echo "<br>";
        ?>
    </p>
    <p>3)
        <?php

        echo $biblioteca["Ciencia Ficción"][0]["ejemplares"]["Norte"];
        echo "<br>";
        ?>
    </p>
    <p>4)
        <?php
        echo $biblioteca["Historia"][0]["resenas"][1]["nota"];
        echo "<br>";
        ?>
    </p>
    <p>5)
        <?php
        if (isset($biblioteca["Ciencia Ficción"][1]["resenas"])) {
            echo $biblioteca["Ciencia Ficción"][1]["resenas"];
        } else {
            echo "no tiene";
        }
        ?>
    </p>

    <p>6)
        <?php
        //voy a añadir un campo al array
        
        if (isset($biblioteca["Poesía"][0]["ejemplares"])) {
            var_dump( $biblioteca["Poesía"][0]["ejemplares"]);
        } else {
            $biblioteca["Poesía"][0]["ejemplares"]["central"] = 0;
            var_dump( $biblioteca["Poesía"][0]["ejemplares"]["central"]);
        }

        ?>
    </p>

    <p>7)
        <?php
        $biblioteca["Ciencia Ficción"][1]["anio"] = 1985;
        echo $biblioteca["Ciencia Ficción"][1]["anio"];

        ?>
    </p>

    <p>8)
        <?php
            foreach($biblioteca as $key => $valor){
                foreach($valor as $keys2){
                    echo "$key" ."-->".$keys2["titulo"]."<br>";
                }
            }

        ?>
    </p>

    <p>9)
        <?php
            foreach($biblioteca as $key => $valor){
                foreach($valor as $keys2){
                   if($keys2["anio"]<=1980){
                        echo "$key" ."-->".$keys2["titulo"]."<br>";
                   }
                }
            }
        ?>
    </p>

    <p>10)
        <?php
           foreach($biblioteca as $key => $valor){
                foreach($valor as $keys2){
                   if(isset($keys2["ejemplares"]) && array_sum($keys2["ejemplares"])!==0){
                       echo $keys2["titulo"] ." : ". array_sum($keys2["ejemplares"])." ejemplares en total"."<br>";
                   }else{
                        echo $keys2["titulo"] ." no tiene ejemplares";
                   }
                }
            } 
        ?>
    </p>

    <p>11)
        <?php
           foreach($biblioteca as $key => $valor){
                foreach($valor as $keys2){
                   if(isset($keys2["ejemplares"])){
                        foreach($keys2["ejemplares"] as $sede => $numero)
                            if($numero===0){
                                echo $keys2["titulo"]." no tiene ejemplares en " . $sede."<br>"; 
                        }
                   }
                }
            } 
        ?>
    </p>

    <p>12)
        <?php
            foreach($biblioteca as $key => $valor){
                foreach($valor as $keys2){
                    if(isset($keys2["resenas"])){
                        $suma = 0;
                        $cantidad=count($keys2["resenas"]);
                        foreach($keys2["resenas"] as $resenas){ 
                            $suma +=$resenas["nota"]; 
                        }
                        $media = $suma /$cantidad;
                        echo "<p>La media de {$keys2["titulo"]} es : $media </p>";        
                    }   
                }
            }  
        ?>
    </p>

    <p>13)
        <?php
            /*foreach($biblioteca as $key => $valor){
                foreach($valor as $keys2){
                    $numNotas = 0;
                    if(isset($keys2["resenas"])){
                        foreach($keys2["resenas"] as $resenas){                     
                            if ($resenas["nota"] >= 4){
                                $numNotas++;
                            }                        
                        }
                        echo "<p>El libro {$keys2["titulo"]} tiene $numNotas reseñas superiores a 4.</p>";       
                    }   
                }
            }
            //

            cantidadReseñas[] =[];
            foreach($biblioteca as $key => $valor){
                foreach($valor as $keys2){

                //$numNotas = 0;
                if(isset($keys2["resenas"])){
                    foreach($keys2["resenas"] as $resenas){
                      
                        if ($resenas["nota"] >= 4){
                            $numNotas++;
                        }
                        
                    }
                    echo "<p>El libro {$libro["titulo"]} tiene $numNotas reseñas superiores a 4.</p>";       
                }   
                }
            }
            */
            
        ?>
    </p>

    <p>14)
        <?php
           
            
        ?>
    </p>


</body>

</html>