<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <h1>Funciones</h1>
    <?php
        //funcion que reciba un array de notas y devuelve la cantidad de personas aprobadas
        function aprobados($notas):int{
            $apro = 0;
            foreach($notas as $n){
                if($n>=5){
                    $apro++;
                }
            }
            return $apro;
        }

        echo aprobados([9.0,3.1,5.1,10,4.9]);
        echo "<hr> <br>";

        //funcion que reciba dos strings y devulva la concatenacion de los dos

        function concatenar(string $s1, string $s2): string{
            return "$s1 $s2";
        }
        echo concatenar("Buenos", "dias");
        echo "<hr> <br>";


        //parametros con valores por defecto
        //funcion saludar: si recibe un parametro (el nombre: XXXX) que diga "Hola, XXXXX";
        //                 Si recibe dos parametros (nombre: XXXX y saludo: YYYY), que devuelva "YYYY, XXXX";

        /*function saludar($nombre, $saludo = "Hola"): string{
            return "$saludo, $nombre";
        }*/

        echo saludar("Juan"); //Hola, Juan
        echo "<hr> <br>";
        echo saludar("Juan", "Que tal"); //Que tal, Juan

        //funcion que reciba un array indexado de numeros, y un segundo parametro de tipo bool
        //si es true, que lo devuelva ordenado de mayor a menor
        //si es false, o no existe, que devuelva ordenado de menor a mayor

        function ordenar(array $numeros, bool $condicion = true): array{
            if($condicion){
                rsort($numeros);
            }else{
                sort($numeros); 
            }
            return $numeros;
        }

        var_dump(ordenar([2,5,1], true));
        var_dump(ordenar([2,5,1], false));
        var_dump(ordenar([2,5,1]));

        function saludar($nombre, $saludo = "Hola", $separador = ""): string{
            return "$saludo$separador $nombre";
        }
        echo saludar("Juan", "Que tal", "-"); //Que tal- Juan
        echo "<hr> <br>";

        
        //funcion que recibe una cantidad indeterminada de numeros y devuelve la suma de todos ellos
        echo suma(1,2,3);
        echo " <br>";
        echo suma(1,2,3,8 ,32);
        echo " <br>";
        echo suma(32);
        echo " <br>";

        
        function suma(...$nums){  //dentro de la funcion se comportan como array
            return array_sum($nums);
        }
        //echo suma([1,2,3]); //error: son varios parametros, no un array

        
    ?>

    
    
</body>
</html>