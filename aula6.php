<?php
// Fazer um laço usando for ou while
// entre 1 e 100
// Somar os números pares e somar os números impares

// Declarando as variáveis que serão usadas
// para fazer a soma dos números
$somaDosPares = 0;
$somaDosImpares = 0;

for($i = 1; $i <= 100; $i++){
    // Armazena na variavel $imparoupar
    // o resultado da sobra da divisão por 2
    $imparoupar = $i % 2;

    if($imparoupar == 0){
        //echo "O número $i é PAR<br>";
        $somaDosPares = $somaDosPares + $i;
    }else{
        //echo "O número $i é IMPAR<br>";
        $somaDosImpares += $i;
    }
}
echo "A soma total dos PARES é de: $somaDosPares<br>
A soma total dos IMPARES é de: $somaDosImpares<br>";

// Zera o valor das variaveis usadas anteriormente no FOR
$somaDosPares = 0;
$somaDosImpares = 0;
// Usando o laço WHILE
while ($w <= 100) {
    if($w % 2 == 0){
        $somaDosPares += $w;
    }else{
        $somaDosImpares += $w;
    }
    $w++;
}
echo "Usando WHILE<br>
A soma dos PARES é: $somaDosPares<br>
A soma dos IMPARES é: $somaDosImpares<br>";


// A ideia da tabuada é ela fazer do 0 até 10 e mostrar o resultado
//  necessário que ela seja dinamica, e consiga multiplicar do 0 até o 10
echo "Tabuada legal<br><br>";
for ($tabuada=1; $tabuada <= 10; $tabuada++) {
    echo "<br> Tabuada do $tabuada <br>";
    // Inicia o laço interno para multiplicar a tabuada por 0-10
    for($n=0; $n <= 10; $n++){
        //echo "$tabuada x $n = ". $tabuada*$n ."<br>";
    }
}

// Matriz exemplo
for($linhas = 0; $linhas <= 3; $linhas++){
echo "[".$linhas;
    for($colunas = 0; $colunas <= 3; $colunas++){
        echo $colunas;
    }
    echo "]<br>";
}
?>