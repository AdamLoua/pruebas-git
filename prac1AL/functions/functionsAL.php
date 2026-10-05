<?php
    function filterByType(array $arraydoso, string $tipo):array{
        $resultado = [];
        for($i=0;$i<count($arraydoso);$i++){
            switch($tipo){
                case "par":
                        if($arraydoso[$i] % 2 ==0){
                            array_push($resultado, $arraydoso[$i]);
                        }
                    break;
                    
                case "impar":
                        if($arraydoso[$i] % 2 !=0){
                            array_push($resultado, $arraydoso[$i]);
                        }
                    break;

                case "primo":
                        /*if($arraydoso[$i] >1){
                        $esPrimo = true;

                            for ($j = 2; $j < $arraydoso[$i]; $j++) {
                                if ($arraydoso[$i] % $j == 0) {
                                    $esPrimo = false;
                                    break;
                                }
                            }

                            if ($esPrimo) {
                                array_push($resultado, $arraydoso[$i]);
                            }
                                
                        }   */ // que?
                        break;

                case "positivo":
                    if($arraydoso[$i] >=0){
                            array_push($resultado, $arraydoso[$i]);
                        }
                    break;
                        
                case "negativo":
                    if($arraydoso[$i] <0){
                            array_push($resultado, $arraydoso[$i]);
                        }
                    break;
            }
        }
        return $resultado;
    }

    $array = [11,-23,7,4,5,-6,-73,81,9,-10];
    var_dump(filterByType($array,"primo"));

    function calculateStatistics(array $numeros):array{
        $asoc = [];
        $media = 0;
        $suma = 0;
        $mediana = 0;
        $moda = 0;
        //media
        foreach($numeros as $valor){
            $suma += $valor;  
        }
        $media = $suma/count($numeros);

        //mediana
        sort($numeros);
        if(count($numeros)%2 == 0){
            $posicion = count($numeros)/2;
            $mediana = ($numeros[$posicion] + $numeros[$posicion -1])/2;
        }else{
            $posicion = count($numeros)/2;
            $mediana = $numeros[$posicion];
        }

        //moda 
        $unicos = array_count_values($numeros);
        
        $maxrepeticiones = 0;
        foreach($unicos as $unico => $repeticiones){
            if($repeticiones > $maxrepeticiones){
                $maxrepeticiones = $repeticiones;
                $moda = $unico;
            }
        }
        
        
        $asoc["media"] = $media;
        $asoc["mediana"] = $mediana;
        $asoc["moda"] = $moda;

        return $asoc;
    }

    $prueba = [5,10,20,2,6,5,2,4,4,2];
    var_dump(calculateStatistics($prueba));


    function analyzeWords(String $texto):array{
        $analisis=[];
        $maxletras = 0;
        $minletras =0;
        $palabramaslarga ="";
        $palabramascorta ="";

        $arrayTexto = explode(" ", $texto);
        foreach($arrayTexto as $palabras){
            if(strlen($palabras)>$maxletras){
                $maxletras = strlen($palabras);
                $palabramaslarga = $palabras;

            }
            /*if(strlen($palabras)<palabramaslarga){
                $minletras = strlen($palabras);
                $palabramascorta = $palabras;
                    ?
            } */
        }
        
        $analisis["number_of_words"] = count($arrayTexto);
        $analisis["longest_word"] = $palabramaslarga;
        $analisis["shortest_word"] = $palabramascorta;


        return $analisis;
        
        
    }

    $texto = "Hola me llamo Adam y en quince minutos tendré clase de inglés";
    var_dump(analyzeWords($texto));
    
?>