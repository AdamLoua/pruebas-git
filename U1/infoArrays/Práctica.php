<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        a -> (1 % 8) + 4 = 1 + 4 = 5
        l -> (12 % 6) + 5 = 0 + 5 = 5 
    -->
    
    <?php
        $nombre = ord('A') - ord('A') +1;
        $app = ord('L') - ord('A') +1;
        var_dump($nombre);
        var_dump($app);

        $rows = $nombre % 8 + 4;
        $cols = $app % 6 + 5;

        var_dump($rows);
        var_dump($cols);

        for($i=0;$i<$rows;$i++){
            for($j=0;$j<$cols;$j++){
                echo "*&nbsp";
            }
            echo "<br>";
        }
    ?>
    <br>
    <br>

    <?php
       for($i=0;$i<$rows;$i++){
            echo "*&nbsp";
            if($i == $rows-1){
                echo "<br>";
                for($j=0;$j<$rows-2;$j++){
                    echo "*";
                    for($h=0;$h<=$cols*2-1;$h++){
                        echo "&nbsp";
                    }
                    echo "*";
                    echo "<br>";
                }    
            }   
        }
        for($i=0;$i<$rows;$i++){
            echo "*&nbsp";
        } 
    ?>

    <!--  
        for($i=0;$i<$rows;$i++){
            echo "*&nbsp";
            if($i == $rows-1){
                echo "<br>";
                for($j=0;$j<$rows-2;$j++){
                    echo "*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp*";
                    echo "<br>";
                }    
            }   
        }
        for($i=0;$i<$rows;$i++){
            echo "*&nbsp";
        }
    -->

    <br>
    <br>

    

    
    
</body>
</html>