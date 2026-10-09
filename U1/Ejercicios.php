<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid;
            border-collapse: collapse;
        }

        .x {
            background-color: aqua;
        }

        .rows {
            background-color: green;
        }

        .columns {
            background-color: lawngreen;
        }

        .tablita {
            background-color: bisque;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Ejercicios de clase</h1>
    <h2>Ejercicio 1</h2>
    <table>
        <tr>
            <th>a</th>
            <th>b</th>
            <th>resultado</th>
        </tr>
        <?php
        $number = 7;
        for ($i = 0; $i <= 10; $i++) :
        ?>
            <tr>
                <td><?= $number ?></td>
                <td><?= $i ?></td>
                <td><?= $i * $number ?></td>
            </tr>
        <?php
        endfor;
        ?>
    </table>

    <h2>Ejercicio 2</h2>
    <?php
    //0 1 1 2 3 5 8 13 21 ...
    $fibonacci = [0, 1];
    for ($i = 2; $i < 20; $i++) {
        /*$a = $fibonacci[$i - 2];
        $b = $fibonacci[$i - 1];
        $suma = $a + $b;
        $fibonacci[] = $suma;*/
        $fibonacci[] = $fibonacci[$i - 2] + $fibonacci[$i - 1];
    }
    echo implode(", ", $fibonacci);
    ?>

    <h2>Ejercicio 3</h2>
    <?php
    $rows = 3;
    $colums = 5;

    for ($i = 0; $i < $rows; $i++) {
        echo "<br>";
        for ($j = 0; $j < $colums; $j++) {
            echo "*";
        }
    }
    ?>

    <h2>Ejercicio 4</h2>
    <?php
    $number = 5;
    for ($i = 2; $i <= $number + 1; $i++) {
        for ($j = 1; $j <= $number && $j < $i; $j++) {
            echo $j . " ";
        }
        echo "<br>";
    }

    //Otra forma:
    $num = 7;
    $cont = 1;
    for ($i = 1; $i <= $num; $i++) {
        while ($cont != $i) {
            echo $cont . " ";
            $cont++;
        }
        $cont = 1;
        echo $i;
        echo "<br>";
    }

    ?>

    <h2>Ejercicio 5</h2>
    <table class="tablita">
        <tr>
            <td class="x">X</td>
            <?php
            for ($i = 0; $i <= 9; $i++) {
                echo "<td class='rows'>" . $i . "</td>";
            }
            ?>
        </tr>
        <?php
        for ($i = 0; $i <= 9; $i++) {
            echo "<tr>";
            echo "<td class='columns'>$i</td>";
            for ($j = 0; $j <= 9; $j++) {
                echo "<td>" . $i * $j . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

    <h2>Ejercicio 6</h2>
    <?php
    $random = [];

    //Crea el array
    for ($i = 0; $i <= 20; $i++) {
        $random[] = rand(10, 50);
    }
    ?>
    <p>
        <?php
        //Imprime el array
        for ($i = 0; $i <= 20; $i++) {
            echo ($random[$i] . ", ");
        }
        echo "</br>";
        //Más abreviado:
        echo implode(", ", $random);
        echo "</br>";

        ?>
    </p>
    <?php
    //Suma
    $suma = 0;
    for ($i = 0; $i <= 20; $i++) {
        $suma = $suma + $random[$i];
    }
    echo $suma;
    echo "</br>";

    //Más abreviado:
    $suma = array_sum($random);

    /*$suma = 0;
    for ($i = 0; $i <= 20; $i++) {
        $suma = $suma + $random[$i];
    }*/
    $media = $suma / count($random);

    echo "Media: $media";
    echo "</br>";
    echo "Mínimo: " . min($random);
    echo "</br>";
    echo "Máximo: " . max($random);
    echo "</br>";
    ?>

    <h2>Ejercicio 7</h2>
    <?php
    $students = [
        ["nombre" => "Ana García", "matematicas" => 8.5, "historia" => 7.0, "programacion" => 9.0],
        ["nombre" => "Luis Martínez", "matematicas" => 6.0, "historia" => 8.5, "programacion" => 7.5],
        ["nombre" => "Marta Rodríguez", "matematicas" => 9.0, "historia" => 6.5, "programacion" => 8.0],
        ["nombre" => "Carlos López", "matematicas" => 7.5, "historia" => 9.0, "programacion" => 6.5],
        ["nombre" => "Elena Torres", "matematicas" => 8.0, "historia" => 7.5, "programacion" => 9.5]
    ];
    //Calcular la media: Con un for (no foreach) para introducir el campo.
    for ($i = 0; $i < count($students); $i++) {
        $sumM = $students[$i]["matematicas"] + $students[$i]["historia"] + $students[$i]["programacion"];
        $promM = $sumM / 3;
        //Introducir el campo "media" => nota.
        $students[$i]["media"] = $promM;
    }
    var_dump($students);

    //Guarda en un array las notas medias de cada alumno
    $alta = [];
    foreach ($students as $x) {
        $alta[] = $x["media"];
    }
    var_dump($alta);
    echo "<p>" . "MAX" . "<br>";
    echo "<strong>" . max($alta) . "</strong>";

    //Cuántos estudiantes sacaron >= 7
    $mates = 0;
    $historiaM = 0;
    $programacioM = 0;
    foreach ($students as $x) {
        if ($x["matematicas"] >= 7) {
            $mates++;
        }
        if ($x["historia"] >= 7) {
            $historiaM++;
        }
        if ($x["programacion"] >= 7) {
            $programacioM++;
        }
    }
    echo '<br>';
    echo "Mates&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: $mates'<br>'";
    echo "Historia: $historiaM'<br>'";
    echo "Programacion: $programacioM'<br>'";

    //4. 

    //5. Pista: Array asociativo con los nombres como claves y la nota media como valor

    ?>