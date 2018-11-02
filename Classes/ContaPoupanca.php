<?php

require_once('Conta.php');

Class ContaPoupanca extends Conta
{
    private $Juros;

    public function setJuros($valorJuros)
    {
        $this->juros = $valorJuros;
    }

    public function getJuros()
    {
        return $this->juros;
    }

    public function rendimento()
    {
        $saldo = parent::getSaldo();
        return $saldo * $this->juros / 100;
    }

    public function addJuros()
    {
        $saldo = parent::getSaldo();
        return $saldo + $this->rendimento();
    }
}

/**** Basta descomentar para testar ****/

$conta = new ContaPoupanca();
$conta->setNumero('123');
$conta->setCliente('Rodrigo');
$conta->setSaldo('300.5');
$conta->setJuros('10');
echo "Numero: {$conta->getNumero()}";
echo "<br>";
echo "Cliente: {$conta->getCliente()}";
echo "<br>";
echo "Saldo: R$ {$conta->getSaldo()}";
echo "<br>";
echo "A sua poupança rendeu: R$ {$conta->rendimento()}";
echo "<br>";
echo "O seu saldo total é de: R$ {$conta->addJuros()}";