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
    //number_format(1234567.891, 2, ',', '.') // "1.234.567,89"

    function formatPrice(float $precio):string{  
       return sprintf("%.2f €", $precio);
    }

    $colacao = 899;
    var_dump(formatPrice($colacao));
?>