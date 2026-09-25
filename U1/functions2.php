<?php
//Biblioteca de funciones

//compara palabras a y b. Si la longitud de a>b, un numero positivo.
//                        Si la longitud de a<b, devuelve un numero negativo.
//                        Si son iguales, devuelve 0.


function comparar( $a, $b):int{ //return strlen($a) - strlen($b)
    $numero = 0;
    if(strlen($a) >strlen($b)){
        $numero = 2;
    }
    if(strlen($a)<strlen($b)){
        $numero = -3;
    }
    if(strlen($a)==strlen($b)){
        $numero = 0;
    }
    return $numero;
}

//cuentaLetras: recibe la palabra a y la letra x. Cuenta cuantas letras hay en esa palabra
//si no se indica la letra, devuelve el numero de aes
//ej: cuentaLetras("hola que tal", "l"); //2 (hay 2 l)
//ej: cuentaLetras("hola que tal"); //2 (hay 2 a)


/*
    $cadena = "hola";
    for($i=0; $i<strlen($cadena);i++){
    var_dump($cadena[$i]);
    }
*/
function contadorLetras(string $palabra, string $letra):int{
    $numero = 0;
    for($i=0; $i<=strlen($palabra);$i++){
        explode($palabra, $letra);

        
    }
    return $numero;
    
}



function aumenta(/*&*/$a){ 
    $a++;
    return $a;
}


//Tampoco se pone el simbolo de cierre de PHP