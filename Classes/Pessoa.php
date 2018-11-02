<?php

class Pessoa{
    
    private $nome;
    public $endereco;

    public function setNome($valor){
        $this->nome = $valor;
    }

    public function getNome(){
        $nome = $this->nome;
        return $this->transformUpperCase($nome);
    }

    public function setEndereco($valor)
    {
        $this->endereco = $valor;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    private function transformUpperCase($palavra){
        return strtoupper($palavra);
    }


}

/**** Basta descomentar para testar ****/

/*
$pessoa = new Pessoa();
$pessoa->setEndereco('Rua Magento');
echo $pessoa->getEndereco();
*/