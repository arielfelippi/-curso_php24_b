<?php

require_once "../database/Conexao.php";

abstract class BaseModel {

    public $fieldsSTR = '';
    public $valuesSTR ='';
    private $conexao = null;

    public $fieldsCommon = [
        'id',
        'excluido',
        'usuario_alteracao',
        'data_criacao',
        'data_atualizacao',
    ];

    public function __construct()
    {
        global $conexao; // acessamos (global) a variavel $conexao do arquivo Conexao.php
        $this->conexao = $conexao;        
    }

    public function createAdjust($fields, $values) {

        $this->fieldsSTR = implode(',', $fields) . ", excluido"; // cpf, email, senha, excluido

        foreach($values as $key => $value) {
            $this->valuesSTR .= "'{$value[$key]}',";
            // cpf = '123456789', email = 'novoEmail@trallala.com', senha = '1234', excluido = '0',
        }

        // remove a virgula extra no final.
        $this->valuesSTR = str_replace(',', '', $this->valuesSTR, -1);
    }

    public function readAdjust($fields) {
        $arrayFields = array_merge($this->fieldsCommon, $fields);
        $this->fieldsSTR = implode(",", $arrayFields);
    }

    public function updateAdjust($values) {

        foreach($values as $key => $value) {
            $this->fieldsSTR .= "$key = '{$value[$key]}',";
            // cpf = '123456789', email = 'novoEmail@trallala.com', senha = '1234', excluido = '0',
        }

        // remove a virgula extra no final.
        $this->fieldsSTR = str_replace(',', '', $this->fieldsSTR, -1);
    }


    private function getData($result) {

        $dados = [];

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $dados[] = $row;
            }
        }

        return $dados;
    }

    public function execute($sql) 
    {
        $result = $this->conexao->query($sql);

        $result = $this->getData($result);

        return $result ?? [];
    }
}
