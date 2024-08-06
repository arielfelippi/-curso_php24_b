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

///alterar a ordem decrescente numeros pares 

echo "<br>";
$n = count($vetorPar);

// ORDEM DE DECRESCENTE USANDO LAÇO FOR 

for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($vetorPar[$j] < $vetorPar[$j + 1]) {
            // Troca os elementos ordenando os mesmos na ordem correta 
            $vetor = $vetorPar[$j];
            $vetorPar[$j] = $vetorPar[$j + 1];
            $vetorPar[$j + 1] = $vetor;
        }
    }
}

///alterar a ordem decrescente impares
$n = count($vetorImpar);

// ORDEM DE DECRESCENTE USANDO LAÇO FOR 
for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($vetorImpar[$j] < $vetorImpar[$j + 1]) {
            // Troca os elementos ordenando os mesmos na ordem correta 
            $vetor = $vetorImpar[$j];
            $vetorImpar[$j] = $vetorImpar[$j + 1];
            $vetorImpar[$j + 1] = $vetor;
        }
    }
}

//fim tema de casa 
//........................................

echo "PARES <br>";
for ($i =0; $i < count($vetorPar); $i++) {
    echo  $vetorPar[$i]. ",";
}

echo "<br>";
echo "IMPARES <br>";

for ($i =0; $i < count($vetorImpar); $i++) {
    
    echo  $vetorImpar[$i]. ",";
}
