<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello world</title>
</head>
<body>
    <p>La siguiente página está hecha con PHP:</p>

    <?php
        print "<p>hello world!</p>";
    ?>

    <!-- Comentario HTML -->

    <p>Esta linea también</p>
    <p>
        <?php
            echo "hola mundo";
            echo "<br>";
            echo "otra cosa";
            echo "<br>";
            echo("otra mas");

            // VARIABLES:
            /*comentario de
            varias lineas*/

            //String:
            //String name = "adsa";
            $name = "adsa";
            $surname = 'ruiz';

            echo "<br>";
            echo $name;
            echo "<br>";
            //para concatenar usamos el .
            echo $name . " - " . $surname;
            echo "<br>";
            echo "$name $surname"; //si interpreta las variables
            echo "<br>";
            echo '$name $surname'; //asi no interpreta las variables
            echo "<br>";

            //numericas
            $age = 21;
            echo "<p>Tengo $age años</p>";
            var_dump($age);
            //las variables pueden cambiar de tipos
            $age = 2.3;
            var_dump($age);
            $age = "23";
            var_dump($age);
            $age = null;
            var_dump($age);

            //Constantes 
            define("IVA_GENERAL", 0.21);
            const IVA_REDUCIDO  = 0.08;
            $precio = 20.3;
            echo "<p>El IVA es: " . $precio * IVA_GENERAL . "</p>";
            echo "<p>EL precio final con IVA es: " . $precio + $precio * IVA_GENERAL . "</p>";
            echo "<p>EL precio final con IVA reducido es: " . $precio + $precio * IVA_REDUCIDO . "</p>";

            var_dump(PHP_VERSION);
            var_dump(__FILE__);
            var_dump(__LINE__);

            $precio = 29.3;

            //OPERADORES
            $a = 5;
            $b = $a ** 3; //elevado
            var_dump($b);

            $a = 7;
            $mod = $a % 2; //1 resto de la division entera)
            $a = 11;
            $mod = $a % 4; // 3

            $a = 1;
            $a++; // $a = $a + 1;
            $a +=4; // $a = $a + 4;
            $a /=9; //$a = $a / 9;

            $b = 5;
            $suma = ++$b + 2; 
            echo $suma; 
            echo "<br>$b";

            $a = 5;
            $b = "5";
            $bool = $a == $b; 
            var_dump($bool); //true

            $a = 5;
            $b = "5";
            $bool = $a === $b; 
            var_dump($bool); //false

        ?>
    </p>


</body>
</html>