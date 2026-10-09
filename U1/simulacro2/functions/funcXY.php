<?php
    function basicStatistics(...$numeros){
        if(empty($numeros)){
            return false;
        }else{

       
        $suma = array_sum($numeros);
        $max = max($numeros);
        $min = min($numeros);
        $avg = $suma/count($numeros);
        $neg =0;
        for ($i=0; $i <count($numeros) ; $i++) { 
            if($numeros[$i]<0){
                $neg++;
            }
        }
        $odd = [];
          for ($i=0; $i <count($numeros) ; $i++) { 
            if($numeros[$i]%2 != 0){
                array_push($odd, $numeros[$i]);
            }
        }

        return $asoc = [
            "suma" => $suma,
            "max" => $max,
            "min" => $min,
            "avg" => $avg,
            "neg" => $neg,
            "odd" => $odd
        ];
        }

        
    }

    function operations($numbers){

    }
?>