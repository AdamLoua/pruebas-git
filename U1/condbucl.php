<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales y bucles</title>
</head>
<body>
    <h2>Condicionales</h2>
    <?php
        // si la edad es menor a 18 que muestre "eres menor de edad" y si no "eres mayor de edad"
        $age = 17;
        if($age >=18){
            echo "eres mayor de edad";
        }elseif ($age < 5){
            echo "eres un niño";
        } else{

            echo "eres menor de edad";
        }

        //ternario: (comparacion) ? true: false
        $mensaje = $age >= 18 ? "eres mayor" : "eres menor";
        echo "<br>";
        echo $mensaje;
        echo "<br>";

        /*switch: si $dia = 1 entonces lunes
                si $dia = 2 entonces martes
                si $dia = 3 entonces miercoles
                si no que diga otros
                */
        echo "<hr>";
        $dia = 1;
        switch($dia){
            case 1: echo "lunes";
                break;
            case 2 : echo "martes";
                break;
            case 3 : echo "miercoles";
                break;
            default : echo "otro";         
        } 
        echo "<hr>";  
        
        /*$a=*/echo match($dia){
            1 => "lunes",
            2 => "martes",
            3 => "miercoles",
            default => "otro"
        };
        /*echo $a;*/

    ?>

    <h2>bucles</h2>
    <?php 
        //haz un bucle del 1 al 10 que imprima los numeros separados por comas
        //1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
        //for(declaracion e inicializacion;condición;incremento)
        for($i = 1; $i<=10; $i++){
            echo " $i";
            if($i < 10){
                echo ", ";
            }
        }
        echo "<hr>";

        //cada bloque del for puede tener varias operaciones
        for($i = 1, $x = 9; $i<=10; $i++, $x-=3){
            echo "$i __ $x";
            if($i < 10){
                echo ", ";
            }
        }
        echo "<hr>";
        echo "<br>";

        // recorre del 1 al 100 e imprime solamente los numeros multiplos de 5 y 7;
        for($i = 1; $i<=100;$i++){
            if($i % 5 == 0 && $i % 7 == 0 ){
                echo "$i, ";
            }
            
        }
        echo "<hr>";
        echo "<br>";

        //traduce el for de arriba en un while
        $i = 1;
        while($i <=100){
            if($i % 5 == 0 && $i % 7 == 0 ){
                echo "$i, ";
            }
            $i++;

        }
    ?>
    
</body>
</html>