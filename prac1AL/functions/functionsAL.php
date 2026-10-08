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
                    $esPrimo = true;

                    if ($arraydoso[$i] < 2) {
                        $esPrimo = false;
                    }

                    for ($j = 2; $j < $arraydoso[$i]; $j++) {
                        if ($arraydoso[$i] % $j == 0) {
                            $esPrimo = false;
                        }
                    }

                    if ($esPrimo) {
                        array_push($resultado, $arraydoso[$i]);
                    }

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
        //media
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
        $unicos = array_count_values($numeros); //almacena un array asociativo con el numero y las veces que se repite
        
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
    
    function analyzeWords(String $texto):array{
        $analisis=[];
        $arrayTexto = explode(" ", $texto);
        $maxletras = 0;
        $minletras =$arrayTexto[0];
        $palabramaslarga ="";
        $palabramascorta ="";

        
        foreach($arrayTexto as $palabras){
            if(strlen($palabras)>$maxletras){
                $maxletras = strlen($palabras);
                $palabramaslarga = $palabras;

            }
            if(strlen($palabras)<$minletras){
                $minletras = strlen($palabras);
                $palabramascorta = $palabras;
            }
        }
        
        $analisis["number_of_words"] = count($arrayTexto);
        $analisis["longest_word"] = $palabramaslarga;
        $analisis["shortest_word"] = $palabramascorta;


        return $analisis;
        
        
    }
    
    function convertTemperature(float $grados, string $origen = "celsius", string $destino = "fahrenheit"):float|bool{
        $valido = false;
        if(($origen === "celsius" || $origen === "fahrenheit" || $origen === "kelvin") && ($destino === "celsius" || $destino === "fahrenheit" || $destino === "kelvin")){
            $valido = true;
        }
        if($valido){
            switch($origen){
                case "celsius":
                    if($destino === "fahrenheit"){
                        //celsius a fahrenheit
                        $grados = ($grados*1.8)+32;
                    }elseif($destino === "kelvin"){
                        //celsius a kelvin
                        $grados = $grados+273.15; 
                    }
                    break;

                case "fahrenheit":
                    if($destino === "celsius"){
                        //fahrenheit a celsius 
                        $grados = ($grados-32)/1.8;
                    }elseif($destino === "kelvin"){
                        //fahrenheit a kelvin
                        $grados = ($grados-32)/1.8+273.15; 
                    }
                    break;
                
                case "kelvin":
                    if($destino === "celsius"){
                        //kelvin a celsius 
                        $grados = $grados-273.15;
                    }elseif($destino === "fahrenheit"){
                        //kelvin a fahrenheit
                        $grados = ($grados-273.15)*1.8+32; 
                    }
                    break;  
            }
        }else{
            return $valido;
        }
        return $grados;
    }
    
?>