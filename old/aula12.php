<?php

class FormatarDados {

    // Propriedades || atributos (variaveis da classe|objeto)
    public $texto;
    public $mascara;

    public function __construct($texto, $mascara)
    {
        $this->texto = $texto;
        $this->mascara = $mascara;
    }

    public function addMask($texto = "", $mascara = "") {
        
        // (1 == 1) ? true : false;

        // if (1 == 1) {
        //     true;
        // } else {
        //     false;
        // }

        $texto = $texto ? $texto : $this->texto;
        $mascara = $mascara ? $mascara : $this->mascara;

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

}

$maskCPF = "###.###.###-##";
$maskCNPJ = "##.###.###/####-##";

$texto = "5554999912933";
$mascara = "+## (##) # ####-####";

$formatarDados = new FormatarDados($texto, $mascara); // instanciar o objeto
echo $formatarDados->addMask();




// classe || objeto
class Somar {

    // Propriedade || atributo
    public $resultado = 0;

    // funcoes || metodos
    public function somar($valor = 0, $valor2 = 1 ) {
        $this->resultado = $valor + $valor2;
        $this->subtrair();
    }

    public function subtrair($valor = 0, $valor2 = 1, $resultado = 1) {
        $this->resultado = $valor - $valor2;
    }
}

$resultado = new Somar(); // instancia do objeto Somar
$resultado->somar(10, 20); // 30
$resultado->subtrair();
echo $resultado->resultado;







