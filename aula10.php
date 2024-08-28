<?php

/**
 * Criar duas funcoes(separadas) onde cada uma recebe um parametro(string)
 * e retorna um valor boolean (true || false, 1 || 0).
 * 
 * Objetivo: Validar CPF, CNPJ
 * 
 * Sugestao/Dica para o nome da funcao: isValidCPF, isValidCNPJ.
 * CPF: "00000000000" - 11 digitos
 * CNPJ: "00000000000000" - 14 digitos
 * 
*/

function isValidCPF($cpf) {
    $padrao = "/[^0-9]/is";
    $cpf = preg_replace($padrao, "", $cpf);

    // codigo aqui

    return true;
}

/**
 * CPF: ###.###.###-## = 14
 * CPF: 12345678910 = 11
 * CPF: 123.456.789-10 = 14
 */
function addMaskCPF($cpf) {
    $cpfMascarado = "";
    $maskCPF = "###.###.###-##"; // "491.582."

    $a =0;
    
    for ($i=0; $i <= strlen($maskCPF); $i++) {

        if ($maskCPF[$i] == '#') {
            $cpfMascarado .=  $cpf[$a];
            $a++;
        } else {
            $cpfMascarado .= $maskCPF[$i];
        }

    }

    return $cpfMascarado;
}

$maskCPF = "###.###.###-##";
$maskCNPJ = "##.###.###/####-##";

addMask("12345678910", $maskCNPJ);

function addMask($CpfCnpj, $mascara) {

    $a =0;
    $cpfMascarado = "";
    
    for ($i=0; $i <= strlen($mascara); $i++) {

        if ($mascara[$i] == '#') {
            $cpfMascarado .=  $CpfCnpj[$a];
            $a++;
        } else {
            $cpfMascarado .= $mascara[$i];
        }

    }

    return $cpfMascarado;
}


function isValidCNPJ($cnpj) {
    $padrao = "/^[0-9]*$/";
    $cnpj = preg_replace($padrao, "", $cnpj);

    // codigo aqui

    return true;
}

$cpf = "491.582.630-98aaa";


$cpfValido = isValidCPF($cpf);

$padrao = "/[^0-9]/is";
$cpf = preg_replace($padrao, "", $cpf); // 49158263098 => 491.582.630-98






if ($cpfValido) {
    echo "O CPF: $cpf é Valido."; // O CPF: 491.582.630-98aaa é válido.
} else {
    echo "O CPF: $cpf é Invalido.";
}

