<?php
include "infoArrays/restaurants.php";
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
    <h1>Array de restaurantes</h1>
    <p>La direccion de Carpaccio es:
        <?php
        echo $pinoccio[0]["address"];
        ?>
    </p>

    <p>El numero de camareros de Luigi es:
        <?=
            $pinoccio[1]["employees"][1];
        ?>
    </p>

    <p>El numero de bebidas de Carpaccio es:
        <?php
        echo $pinoccio[0]["quantity"]["drinks"];
        ?>
    </p>

    <p>El nombre de los tres restaurantes obtenidos con un bucle es:
        <?php
        foreach ($pinoccio as $res) {
            echo $res["name"] . " ";
        }

        ?>
    </p>

    <ul>
        <?php
        $x = 1;
        foreach ($pinoccio as $res) {
            //echo "<li>".$res["name"]. "</li>";
            echo "<li>$x {$res["name"]} </li>";
            $x++;
        }
        ?>
    </ul>

    <p>Los empleados de ambos restaurantes:
        <?php
        /*Quiero que salga algo como esto (bucle)
            carpaccio: 4,7,2
            Luigi: 2,6,1
        */
        echo "<br>";

        foreach ($pinoccio as $res) {
            echo "{$res["name"]}: ";

            //necesito comprobar que existe $res["employees"]
            if (isset($res["employees"])) {
                /*foreach($res["employees"] as $workers){
                echo "$workers, ";
                */

                /*for($i=0;$i<=count($pinoccio);$i++){
                echo $res["employees"][$i]. ", ";
                }*/

                echo implode(" ,", $res["employees"]);
            } else {
                echo "No hay empleados";
            }
            echo "<br>";

        }
        ?>
    </p>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Cocina</th>
            <th>Camareros</th>
            <th>Otros</th>
        </tr>

        <?php
            foreach ($pinoccio as $res) {
                echo "<tr>";
                echo "<td>{$res["name"]}</td>"; //Primera celda nombre
                if(isset($res["employees"])){
                    foreach($res["employees"] as $nums){
                        echo "<td>$nums</td>";
                    }
                }else{
                    echo "<td></td><td></td><td></td>";
                }
                echo "</tr>";
            }      
        ?>
    </table>
   

<?php
     echo "<br>";
    //funcion que reciba un array asociativo, e imprima en una tabla 
            //las claves y el tipo del valor que tiene
            //por ejemplo:
            /*
            clave     | tipo
            name      | String
            address   | string
            employees | array
            quantity  | array
            */

            function tabla($asoc):string { 
                $ret = '<table border ="1">';
                $ret .= "<tr>
                <th>Clave</th>
                <th>Tipo</th></tr>";
                foreach($asoc as $restaurante){
                    foreach($restaurante as $key => $value){
                        $ret .= "<tr>
                        <td>$key</td>
                        <td>" .gettype($value). "</td>
                        </tr>";
                    }
                }
                $ret .= "</table>"; //$ret = $ret . "</table>

                return $ret;
            }
            echo tabla($pinoccio);


?>
<?php
//voy a añadir el campo address a mario bross
if(!isset($pinoccio[2]["address"])){
    $pinoccio[2]["address"] = "nueva direccion 56";
}
echo "---> {$pinoccio[2]["address"]}";
?>
       




</body>

</html>
