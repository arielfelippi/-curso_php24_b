<?php

/**
 * CPF: ###.###.###-## = 14
 * CPF: 12345678910 = 11
 * CPF: 123.456.789-10 = 14
 */

$maskCPF = "###.###.###-##";
$maskCNPJ = "##.###.###/####-##";
$maskCEL = "+## (##) # ####-####"; // +55 (54) 9 99991-2933 => 5554999912933

function addMask($texto, $mascara) {

    $a =0;
    $valorMascarado = "";
    
    for ($i=0; $i <= strlen($mascara); $i++) {

        if ($mascara[$i] == '#') {
            $valorMascarado .=  $texto[$a];
            $a++;
        } else {
            $valorMascarado .= $mascara[$i];
        }

    }

    return $valorMascarado;
}

function isValidCel($celular) {
    $padrao = "/[^0-9]/is";
    $celular = preg_replace($padrao, "", $celular);

    $tamanho = strlen($celular);

    if ($tamanho != 13) {
        return false;
    }

    $pais = substr($celular, 0, 2); // 55 - 5554999912933
    $ddd = substr($celular, 2, 2); // 54 - 5554999912933

    if ($pais != 55) {
        return false;
    }

    // $listDDD = array(11, 12, 13, 14, 54);
    $listDDD = [11, 12, 13, 14, 54];

    $dddValido = in_array($ddd, $listDDD); // TRUE || FALSE

    return $dddValido;
}

$celular = "5500999912933";
$celular = addMask($celular, $maskCEL);
$celularValido = isValidCel($celular);

if ($celularValido) {
    echo "O celular informado $celular é um numero válido.";
} else {
    echo "O celular informado $celular é um numero <b>inválido.</b>";
}
