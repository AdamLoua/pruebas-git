<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    
    <p><?php
        //0 1 1 2 3 5 8 13
        $fibonacci = [0, 1];
        for($i =2; $i<20;$i++){
            
            $a = $fibonacci[$i -2];
            $b = $fibonacci[$i -1];
            $suma = $a + $b;
            $fibonacci[] = $suma;
        }
        echo implode(" ,",$fibonacci);
        
    ?>
    </p>

    <h2>Ejercicio 3</h2>
    <?php
        $rows = 3;
        $columns =5;
        for($i=0;$i<$rows;$i++){
            for($j=0;$j<$columns;$j++){
                echo "*";
            }   
            echo "<br>";
        }
    ?>
    <h2>Ejercicio 4</h2>
    <?php
    $number = 5;
        for($i=1;$i<=$number;$i++){
            for($j=1;$j<=$i;$j++){
                echo $j;
            }
            echo "<br>";
        }
        
    ?>
    

</body>
</html>