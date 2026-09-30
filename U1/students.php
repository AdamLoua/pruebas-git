<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <?php
        $students = [
            ["nombre" => "Ana García", "matematicas" => 8.5, "historia" => 7.0, "programacion" => 9.0],
            ["nombre" => "Luis Martínez", "matematicas" => 6.0, "historia" => 8.5, "programacion" => 7.5],
            ["nombre" => "Marta Rodríguez", "matematicas" => 9.0, "historia" => 6.5, "programacion" => 8.0],
            ["nombre" => "Carlos López", "matematicas" => 7.5, "historia" => 9.0, "programacion" => 6.5],
            ["nombre" => "Elena Torres", "matematicas" => 8.0, "historia" => 7.5, "programacion" => 9.5]
        ]; 

        //tabla con nombre y nota de matematicas.
        //Si la nota es >=8: que la celda salga en verde y si es >= 9 que la letra este negrita

    ?>
    
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Nota matemáticas</th>
                <th>Nota historia</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($students as $alumno) :
                
            ?>
            <tr>
                <td>
                    <?php
                        echo $alumno["nombre"];  //<?= $alumno["nombre"]; 
                    ?>
                </td>
                <td class="
                <?php
                    if($alumno["matematicas"]>=8){
                        echo "green ";
                    }else{
                        echo '""';
                    }
                    if($alumno["matematicas"] >= 9){
                        echo "negrita ";
                    }
                ?>
                
                ">
                <?= $alumno["matematicas"]?>    
                </td>

                <td class="<?= $alumno["historia"] >= 8 ? "greenHist " :""?>
                    <?= $alumno["historia"] >= 8.5 ? "negrita " :""?>
                    <?= $alumno["historia"] >= 9 ? "cursiva " :""?>
                    <?= $alumno["historia"] <=7 ? "peque " :""?>

                    ">

                    <?= $alumno["historia"]?>

                </td>
                
                <!-- <td class="greenHist negrita">...</td>-->
            </tr>
            <?php
            endforeach;
            ?>
 
        </tbody>
    </table>

</body>
</html>
