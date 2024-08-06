<?php

$nome = "Pedro Brasil";
$idade = 18;
$cidade = "Bento Gonçalves - São Pedro";
echo "Seja bem vindo $nome à sua cidade $cidade, a qual recebe você de braços abertos, sua visita é muito importante para nós, consuma dos nossos restaurantes a melhor comida e carta de vinhos.";

echo "<br>";

if ($idade >= 18){
    echo "O $nome é maior de idade!";
}else{
    echo "O $nome, não pode dirigir carros!";
}

echo "<br>";
echo "Super calculadora avançada da NASA 4.0";
echo "<br>";
$valorA = 99;
$valorB = 3;
$operacao = "divisao";
$resultado="";

if($operacao == "soma" || $operacao == "adicao" || $operacao == "mais"){
    $resultado = $valorA + $valorB;
}elseif($operacao == "subtrair" || $operacao == "menos"){
    $resultado = $valorA - $valorB;
}elseif($operacao == "multiplicar" || $operacao == "vezes"){
    $resultado = $valorA * $valorB;
}elseif($operacao == "dividir" || $operacao == "divisao"){
    $resultado = $valorA / $valorB;
}else{
    echo "Somente são aceitos os seguintes parâmetros<br>
    soma<br>
    subtrair<br>
    multiplicar<br>
    dividir<br>";
}

if($resultado != ""){
    echo "A operação escolhida foi $operacao 
    com os valores $valorA e $valorB e o 
    resultado obtido é $resultado.";
}

echo "<br><br>";
// Testa se a pessoa pode fazer a carteira de motorista
// Precisa ser maior de 18 anos, e ter mais de R$ 1.000,00
// FALTA FAZER a validação da IDADE e do DINHEIRO
// Se não tiver idade informar que precisa ser maior de 18
// Se não tiver dinheiro precisa informar o valor de 1k
// Se não tiver idade e nem dinheiro informar.
$idadePessoa=18;
$dinheiroNaCarteira=1100;

echo "Idade: ".$idadePessoa."<br>";
echo "Dinheiro: ".$dinheiroNaCarteira."<br>";

if($idadePessoa >= 18 && $dinheiroNaCarteira >= 1000){
    echo "Parabéns, você pode fazer a carteira de
    motorista! Usando elseif<br>";
}elseif($idadePessoa < 18 && $dinheiroNaCarteira >= 1000){
    echo "Infelizmente você não tem a idade mínima de 18 anos
    para fazer a carteira! Usando elseif<br>";
}elseif($idadePessoa >= 18 && $dinheiroNaCarteira < 1000){
    echo "Para fazer a carteira você precisa economizar R$ 1.000,00,
    tente novamente! Usando elseif<br>";
}else{
    echo "Você não tem idade suficiente e nem economizou dineheiro. 
    Para de gastar no jogo do TIGRINHO! Usando elseif<br>";
}

echo "<br>Modelo 2 usando IF apenas <br>";

if($idadePessoa >= 18 && $dinheiroNaCarteira >= 1000){
    echo "Parabéns, você pode fazer a carteira de
    motorista! Usando if<br>";
}
if($idadePessoa < 18 && $dinheiroNaCarteira >= 1000){
    echo "Infelizmente você não tem a idade mínima de 18 anos
    para fazer a carteira! Usando if<br>";
}
if ($idadePessoa >= 18 && $dinheiroNaCarteira < 1000){
    echo "Para fazer a carteira você precisa economizar R$ 1.000,00,
    tente novamente! Usando if<br>";
}
if($idadePessoa < 18 && $dinheiroNaCarteira < 1000){
    echo "Você não tem idade suficiente e nem economizou dineheiro. 
    Para de gastar no jogo do TIGRINHO! Usando if<br>";
}

echo "<br>Modelo 3 usando TIO CHATGPT Falhando<br>";
$liberado=true;
$mensagem="";
if($idadePessoa < 18){
    $liberado=false;
    $mensagem="Você não tem idade para fazer";
}
if($dinheiroNaCarteira < 1000){
    $liberado=false;
    $mensagem="Você não economizou, precisa de 1k";
}
if($idadePessoa < 18 && $dinheiroNaCarteira < 1000){
    $liberado=false;
    $mensagem="Você não tem idade, e nem guardou dinheiro";
}
if($liberado == true){
    echo "Parabéns você vai fazer a carteira<br>";
}else{
    echo "Não é possível fazer a carteira. ".$mensagem;
}
?>