<?php
function textStats(...$palabras){
    if(empty($palabras)){
        return false;
    }
    $asoc=[];
    $total = count($palabras);
    $longest = $palabras[0];
    $maxletras =0;
    $shortest = $palabras[0];
    $minletras = $palabras[0];
    for ($i=0; $i < count($palabras); $i++) { 
        if(strlen($palabras[$i])>$maxletras){
            $maxletras = strlen($palabras[$i]);
            $longest = $palabras[$i];
        }
        if(strlen($palabras[$i])<$minletras){
            $minletras = strlen($palabras[$i]);
            $shortest = $palabras[$i];
        }

    }
    $chars =0;
    $contador=0;
    for ($i=0; $i < count($palabras); $i++) { 
       $contador= strlen($palabras[$i]);
       $chars +=$contador;
    }
    $avg = $chars/count($palabras);


    return $asoc = [
        "total" => $total,
        "longest" => $longest,
        "shortest" => $shortest,
        "chars" => $chars,
        "avg" => $avg
    ];
}

function filterNumber($numbers, $filter = "even", $limit = null ){
    if($filter == "even" || $filter == "odd" || $filter == "positive"){
    
    $resultado = [];
    for ($i=0; $i <count($numbers) ; $i++) { 
        switch($filter){
            case "even":
                if($limit == null){
                    if($numbers[$i]%2 == 0){
                        array_push($resultado,$numbers[$i]);
                    }
                }else{
                    if($numbers[$i]%2 == 0){
                        if($i>$limit){
                            break;
                        }
                        array_push($resultado,$numbers[$i]);
                    }
                    
                }
                break;

            case "odd":
                if($limit == null){
                    if($numbers[$i]%2 != 0){
                        array_push($resultado,$numbers[$i]);
                    }
                }else{
                    if($numbers[$i]%2 != 0){
                        if($i>$limit){
                            break;
                        }
                        array_push($resultado,$numbers[$i]);
                    }
                    
                }
                break;    
            case "positive":
                if($limit == null){
                    if($numbers[$i]> 0){
                        array_push($resultado,$numbers[$i]);
                    }
                }else{
                    if($numbers[$i]> 0){
                        if($i>$limit){
                            break;
                        }
                        array_push($resultado,$numbers[$i]);
                    }
                    
                }
            break; 
        }
    }
    }else{
        return false;
    }

    return $resultado;
}
?>