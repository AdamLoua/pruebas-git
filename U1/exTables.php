<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/exTablesStyle.css">
</head>
<body>
    <table>
        <tr>
            <td>X</td>
        
        
        <?php
            for($i=0;$i<10;$i++){
                echo "<td>". $i. "</td>";

            }
        ?>
        </tr>
            <?php
                for($i=0;$i<10;$i++){
                    echo "<tr><td>". $i. "</td></tr>";

                }
            ?>
       
    </table>
</body>
</html>