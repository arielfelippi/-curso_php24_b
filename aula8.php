<?php

$vetorAlfa = ['B', 'A', 'C', 'E', 'D'];  // Exemplo de array

// Resultado esperado: A, B, C, D, E

// GITHUB: ARIELFELIPPI

// Ordenar os elementos em ordem crescente
$tamanho = count($vetorAlfa);
$maxIndice = $tamanho - 1;

for ($i = 0; $i < $maxIndice; $i++) {

    $maxIndice_J = $tamanho - $i - 1;

    for ($j = 0; $j < $maxIndice_J; $j++) {

        if ($vetorAlfa[$j] > $vetorAlfa[$j + 1]) {
            // Troca os elementos para ordenar corretamente
            $temp = $vetorAlfa[$j];
            $vetorAlfa[$j] = $vetorAlfa[$j + 1];
            $vetorAlfa[$j + 1] = $temp;
        }
    }
}

echo implode(", ", $vetorAlfa);

// function implodeX($separator, $array) {

//     for ($i = 0; $i < count($array); $i++) {
//         // echo $array[$i] . ",";

//         if ($i == count($array) -1) {
//             echo $array[$i];
//             break;
//         }

//         echo $array[$i] . $separator;
//     }
// }

// echo implodeX(", ", $vetorAlfa);



/*
 Identificar o tipo de triangulo conforme os dados passados pelo usuario.
 Sendo três medidas: $lado1, $lado2, $lado3.
 Com estas medidas efetuar o calculo e informar ao usuario qual o tipo
 de triangulo que é formado pelas medidas que ele passou.
 
 Trinagulos a considerar: Equilatero, Isoceles ou escaleno.
*/ 

$lado1 = 0;
$lado2 = 0;
$lado3 = 0;

