<?php
$nome = "Pedro";
$sobrenome = "Brasil";
echo "Seja bem vindo ".$nome." ".$sobrenome."!<br>";

echo strlen($nome);
echo "<br>";
echo strlen($sobrenome);
echo "<br>";
echo strlen($nome." ".$sobrenome);
echo "<br>";
echo strtoupper($nome);
echo "<br>";
echo strtolower("TEXTO CAIXA ALTA!");
echo "<br>";
echo strrev("anotaram a data da maratona | avon | amor");
echo "<br>";

echo "Tudo sobre a data atual<br>";
echo date("d/m/Y");
echo "<br>";
echo date("H:i:s");
echo "<br>";
echo date("d/m/Y H:i:s A");
echo "<br>";
echo date("w");//0 Domingo - 6 Sábado
echo "<br>";
// Crie uma variavel para armazenar o valor da função date("w")
// Utilize IF para validar qual é o dia da semana e exibir para
// o usuário, sendo que 0 é domingo, e 6 é sábado
$diaDaSemana = date("w");
if($diaDaSemana == 0){
    echo "é domingo";
}elseif($diaDaSemana == 1){
    echo "é segunda";
}elseif($diaDaSemana == 2){
    echo "é terça";
}elseif($diaDaSemana == 3){
    echo "é quarta";
}elseif($diaDaSemana == 4){
    echo "é quinta";
}elseif($diaDaSemana == 5){
    echo "é sexta-feiraaaaaaaaaaaaaaaaaaa";
}elseif($diaDaSemana == 6){
    echo "é sábado";
}

echo "<br>";

switch ($diaDaSemana) {
    case 0:
        echo "é domingo";
        break;
    case 1:
        echo "é segunda";
        break;
     case 2:
        echo "é terça";
        break;       
    default:
        // Se chegou aqui foi porque não 'casou' com nenhum valor
        break;
}

echo "<br>Laços<br>";
$nomeCompleto="Marcos Infoserv";
for ($i=1; $i <= strlen($nomeCompleto) ; $i++) { 
    echo $i."<br>";
}
