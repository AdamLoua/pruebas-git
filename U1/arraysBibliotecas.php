<?php
include "infoArrays/Bibliotecas.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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
                foreach($valor as $titulo){
                    var_dump($titulo["titulo"]);
                }
            }

        ?>
    </p>



</body>

</html>