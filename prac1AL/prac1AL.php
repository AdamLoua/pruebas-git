<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Práctica</h1>
    <!-- 
        a -> (1 % 8) + 4 = 1 + 4 = 5
        l -> (12 % 6) + 5 = 0 + 5 = 5 
    -->
    
    <?php
        $nombre = ord('A') - ord('A') +1;
        $app = ord('L') - ord('A') +1;
        

        $rows = $nombre % 8 + 4;
        $cols = $app % 6 + 5;



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

    <?php
        for($i=0;$i<$rows;$i++){
            for($j=0;$j<$cols;$j++){
                if(($i+$j)%2 == 0){
                    echo "*&nbsp";
                }else{
                 echo "&nbsp&nbsp&nbsp";   
                }
            }
            echo "<br>";
        }
    ?>
    

    <h2>Ejercicio 2: Arrays bidimensionales</h2>

    //crear array
    <?php
        $temperaturas =[];
        for($i=0;$i<6;$i++){
            for($j=0;$j<7;$j++){
                $temperaturas[$i][$j] = rand(-10,45);
            }
        }
    ?>
    <table border="1">
        <tr>
            <td>Ciudad/Dia</td>
            <?php
                for($j=0;$j<7;$j++){
                echo "<td>Dia ".($j+1)."</td>";
                }
        
            ?> 
            <td>Media</td>
        </tr>  
        
        <?php
            echo "<tr>";
            for($i=0;$i<6;$i++){
                echo "<td>Ciudad ". ($i+1)."</td>";
                for($j=0;$j<7;$j++){
                    echo "<td>".$temperaturas[$i][$j]."</td>";
                }
                echo "</tr>";
            }  
        ?>
        

    
   
    </table>

    <?php

        $maxima = $temperaturas[0][0];
        $minima = $temperaturas[0][0];

        $diamax = 0;
        $ciudadmax = 0;
        $diamin = 0;
        $ciudadmin = 0;

        $media = 0;

        //temperatura max
        for($i=0;$i<6;$i++){
            for($j=0;$j<7;$j++){
               if($temperaturas[$i][$j]>$maxima){
                    $maxima = $temperaturas[$i][$j];
                    $ciudadmax = $i;
                    $diamax = $j;
               }
            }
        }

        //temperatura min

        for($i=0;$i<6;$i++){
            for($j=0;$j<7;$j++){
               if($temperaturas[$i][$j]<$minima){
                    $minima = $temperaturas[$i][$j];
                    $ciudadmin = $i;
                    $diamin = $j;
               }
            }
        }

        echo "<pre>";
        var_dump($temperaturas);
        echo "</pre>";
        
        echo "<pre>";
        echo "Temperatura maxima: $maxima (Dia " . ($diamax + 1) . ", Ciudad " . ($ciudadmax + 1) . ")";
        echo "</pre>";

        echo "<pre>";
        echo "Temperatura minima: $minima (Dia " . ($diamin + 1) . ", Ciudad " . ($ciudadmin + 1) . ")";
        echo "</pre>";

        //temperatura media ciudad
        foreach($temperaturas as $ciudad => $valores){
            $media = round(array_sum($valores)/count($valores),2);
            echo "<pre>";
            echo " Ciudad : ". ($ciudad+1) ." --> media : ". $media;
            echo "</pre>";

        }
        
        
    ?>

    
    
</body>
</html>