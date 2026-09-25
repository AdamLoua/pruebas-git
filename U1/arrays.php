<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Arrays</h1>
    <h2>Arrays indexados</h2>
    <?php 
        $cars = array("Seat", "Audi", "BMW");
        $food = ["tomatoes", "avocados", "carrots"];

        //quiero añadir otra comida
        $food[3] = "aubergines";
        $food[3] = "eggplants"; //sobrescribe

        
        //quiero añadir calabacin
        $food[] = "zucchini";

        foreach($food as $f){
            echo "$f <br>";
        }

        echo "<hr>";
        $food[7] = "cucumbers"; 
        foreach($food as $f){
            echo "$f <br>";
        }
    ?>

    <h2>Array asociativo</h2>
    <?php
        $capitals = [
            "Ecuador" => "Quito",
            "Spain" => "Madrid",
            "Norway" => "Oslo"
        ];
        echo "<p>La capital de Noruega es " . $capitals['Norway'] . "</p>"; //oslo
        //echo "<p>La capital de Noruega es " . $capitals[2] . "</p>" error 
        //echo count($capitals) . "<br>";

        //meto un elemento nuevo: Colombia - Bogotá
        $capitals["Colombia"] = "Bogotá";
        $capitals["Portugal"] = 49;

        echo count($capitals) . "<br>"  ;

        //Meter en el array: Georgia - Tbilisi
        $capitals["Georgia"] = "Tbilisi";
        
        //Recorrer el array con un foreach
        foreach($capitals as $c){
            echo "$c <br>";
        }

        //recorrer claves y el valor
        foreach($capitals as $country => $c){
            echo "La capital de $country es $c <br>";
        } 

        echo "<hr><br>";

        //eliminar un elemento de un array asociativo
        unset($capitals["Portugal"]);
        var_dump($capitals);

        echo "<hr><br>";

        if(isset($capitals["Portugal"])){
            echo "La capital de Portugal es" . $capitals["Portugal"]. "<br>";
        }else{
            echo "No tengo la capital de Portugal";
        }
    ?>


    <h2>Funciones con array</h2>
    <?php
        echo "<hr><br>";

        $notas = [9.0, 6.9, 7.5, 8.2];

        //suma de valores
        $suma = array_sum($notas);
        $media = $suma/count($notas); 
        var_dump($media) ;
        echo "<hr><br>";


        //ordenar de menor a mayor
        sort($notas);
        var_dump($notas);

        echo "<hr><br>";

        //ordenar de mayor a menor
        rsort($notas);
        var_dump($notas);

        echo "<hr><br>";

        //revolver 
        shuffle($notas);
        var_dump($notas);

        //nota mas alta
        sort($notas);
        echo "La nota mas alta es " .$notas[count($notas) - 1]. "<br>";

        //buscar valor en array true false
        var_dump(in_array(9.0, $notas));
        var_dump(in_array(9.5, $notas));

        echo "<hr><br>";

        //implode: separa cada elemento de un array con un delimitador
        echo implode(", ", $notas);

        $nombres = "Juan#Alberto#Maria";
        $arrayNombres = explode("#", $nombres);
        var_dump($arrayNombres);





        //array asociativo:
        //politicos y cargos
        $p = [
            "Pedro" => "Presidente",
            "Pilar" => "Educación",
            "Oscar" => "Transporte",
            "Fernando" => "Interior"
        ];

        //no usar sort ni rsort en asociativos
        
        //ordenar por valor ascendente
        asort($p);
            var_dump($p);

        //ordenar por valor descendente
        arsort($p);
        var_dump($p);

        //ordenar por clave ascendente
        ksort($p);
            var_dump($p);

        //ordenar por clave descendente
        krsort($p);
        var_dump($p);

        /*mostrar claves
        foreach($p as $nombre => $puesto){
            echo "$nombre<br>";
        }*/

        //funcion para mostrar claves 
        $claves = array_keys($p);
        var_dump($claves);

        echo implode(", ", array_keys($p));

        //en que posicion esta un elemento:
        $resultado = array_search("Presidente", $p);
        var_dump($resultado);

        $resultado = array_search("adasw", $p);
        var_dump($resultado);

        var_dump($notas);
        $resultado = array_search(9.0, $notas);
        var_dump($resultado);
        
    ?>
    
</body>
</html>