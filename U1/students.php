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
                <td class=
                <?php
                    if($alumno["matematicas"]>=8){
                        echo "green";
                    }else{
                        echo '""';
                    }
                ?>
                >
                    <?php
                        echo $alumno["nombre"];  
                    ?>
                </td>

                <td class=<?= $alumno["historia"] >=8 ? "green" :""?>>
                    <?= $alumno["historia"]?>
                </td>
                
            </tr>
            <?php
            endforeach;
            ?>
 
        </tbody>
    </table>

</body>
</html>
