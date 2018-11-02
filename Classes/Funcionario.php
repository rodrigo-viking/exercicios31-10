<?php

require_once('Pessoa.php');

class Funcionario extends Pessoa{
    
    private $salario;
    private $departamento;

    public function __construct(float $salario = 0)
    {
        $this->salario = $salario;
    }

    public function setSalario(float $valor)
    {
        $this->salario = $valor;
    }

    public function getSalario(): float
    {
        return $this->salario;

    }

    public function setDepartamento($valor)
    {
        $this->departamento = $valor;
    }

    public function getDepartamento()
    {
        return $this->departamento;
    }

}

/**** Basta descomentar para testar ****/

$funcionario = new Funcionario();
$funcionario->setNome('Rodrigo Freitas');
$funcionario->setEndereco('Rua Magento');
$funcionario->setsalario(3500);
$funcionario->setDepartamento('TI');
echo "Nome: {$funcionario->getNome()}";
echo '<br>';
echo "Endereço: {$funcionario->getEndereco()}";
echo '<br>';
echo "Salário: R$ {$funcionario->getSalario()}";
echo '<br>';
echo "Departamento: {$funcionario->getDepartamento()}";
