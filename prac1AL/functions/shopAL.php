<?php
$productos = [
    'prod1' => [
        'nombre' => 'portátil gaming',
        'precio' => 899.99,
        'stock' => 15,
        'categoria' => 'electrónica'
    ],
    'prod2' => [
        'nombre' => 'mesa escritorio',
        'precio' => 120.50,
        'stock' => 8,
        'categoria' => 'hogar'
    ],
    'prod3' => [
        'nombre' => 'ratón inalámbrico',
        'precio' => 25.99,
        'stock' => 0,
        'categoria' => 'electrónica'
    ]
];
    //funcion predefinida ---> sprintf("%.2f €", 19.5)  // "19.50 €" — formato

    function formatPrice(float $precio):string{  
       return sprintf("%.2f €", $precio);
    }
    /*
    $colacao = 899;
    echo "<pre>";
    var_dump(formatPrice($colacao)); //899.00€
    echo "</pre>";
    */
    function calculateIVA(float $precio, float $iva =0.21):float{
        return $precio*(1+$iva);
    }
    /*
    echo "<pre>";
    var_dump(calculateIVA(100, 0.19)); //119
    echo "</pre>";
    */
    function getStock(array $productos):array{
        $existencias = [];
        foreach($productos as $prod => $stock){
            if($stock["stock"]>0){
                array_push($existencias,$prod);
            }
        }
        return $existencias;
    }
    /*
    echo "<pre>";
    var_dump(getStock($productos)); //["prod1", "prod2]
    echo "</pre>";
    */
?>