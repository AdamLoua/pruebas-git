<?php
include "functions2.php";
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
    <?php
        echo comparar("Hola", "Adios");
        echo "<br>";

        echo comparar("Palabraaaaaaa","a");

           
    ?>

    <?php
        $numero = 5;
        aumenta($numero);
        echo "--->$numero<br>";

        echo $dasa[3];
    ?>

    
</body>
</html>