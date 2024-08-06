<?php
$vetor = array ();
$vetor = [1,2,3,4,5];

//$i =0,1,2,3,4
$tamanho = count($vetor);
echo  $vetor [5]."<br>";

for ($i =0; $i < $tamanho; $i++){
    echo $vetor [$i]. "<br>";
}

echo "<br>";
echo "<br>";

$vetor = array();
//$tamanho = count ($vetor);
$vetorPar = [];
$vetorImpar = [];
//$somaDosImpares = 0;
//$somaDosPares = 0;
//$i =0,1,2,3,4
//$tamanho = count($vetor);

//echo  $vetor [5]."<br>";

for ($i =1; $i <= 100; $i++){
    if ($i % 2 == 0){
        //$somaDosPares += $i;
       //$vetorPar = array_push($vetorPar, $i);
        $vetorPar[] =$i;       
    
    }else{
    //$somaDosImpares += $i;
        //$vetorImpar = array_pusch($vetorImpar,$i);
        $vetorImpar[] = $i;       
    }
    
}


// Arrays de exemplo
$vetorPar = [2, 4, 6, 8, 10];  // Exemplo de array de números pares
$vetorImpar = [1, 3, 5, 7, 9];  // Exemplo de array de números ímpares

// Ordenar os números pares em ordem decrescente
$tamanhoPar = count($vetorPar);
$maxIndicePar = $tamanhoPar - 1;

for ($i = 0; $i < $maxIndicePar; $i++) {
    $maxIndicePar_J = $tamanhoPar - $i - 1;
    for ($j = 0; $j < $maxIndicePar_J; $j++) {
        if ($vetorPar[$j] < $vetorPar[$j + 1]) {
            // Troca os elementos para ordenar corretamente
            $temp = $vetorPar[$j];
            $vetorPar[$j] = $vetorPar[$j + 1];
            $vetorPar[$j + 1] = $temp;
        }
    }
}

// Ordenar os números ímpares em ordem decrescente
$tamanhoImpar = count($vetorImpar);
$maxIndiceImpar = $tamanhoImpar - 1;

for ($i = 0; $i < $maxIndiceImpar; $i++) {
    $maxIndiceImpar_J = $tamanhoImpar - $i - 1;
    for ($j = 0; $j < $maxIndiceImpar_J; $j++) {
        if ($vetorImpar[$j] < $vetorImpar[$j + 1]) {
            // Troca os elementos para ordenar corretamente
            $temp = $vetorImpar[$j];
            $vetorImpar[$j] = $vetorImpar[$j + 1];
            $vetorImpar[$j + 1] = $temp;
        }
    }
}

// Imprimir os números pares ordenados
echo "PARES <br>";
for ($i = 0; $i < $tamanhoPar; $i++) {
    echo $vetorPar[$i] . ",";
}

echo "<br>";

// Imprimir os números ímpares ordenados
echo "IMPARES <br>";
for ($i = 0; $i < $tamanhoImpar; $i++) {
    echo $vetorImpar[$i] . ",";
}
