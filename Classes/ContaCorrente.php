<?php

require_once('Conta.php');

Class ContaCorrente extends Conta
{
    private $creditoPessoal;

    public function setCreditoPessoal($valorCreditoPessoal)
    {
        $this->creditoPessoal = $valorCreditoPessoal;
    }

    public function getCreditoPessoal()
    {
        return $this->creditoPessoal;
    }

    public function addCreditoPessoal()
    {
        $saldo = parent::getSaldo();
        return $saldo += $this->creditoPessoal;
    }

}

/**** Basta descomentar para testar ****/

/*
$conta = new ContaCorrente();
$conta->setNumero('123');
$conta->setCliente('Rodrigo');
$conta->setSaldo('300.5');
$conta->setCreditoPessoal('100');
echo "Numero: {$conta->getNumero()}";
echo "<br>";
echo "Cliente: {$conta->getCliente()}";
echo "<br>";
echo "Saldo: R$ {$conta->getSaldo()}";
echo "<br>";
echo "O seu crédito pessoal é de: R$ {$conta->getCreditoPessoal()}";
echo "<br>";
echo "O seu saldo total é de: R$ {$conta->addCreditoPessoal()}";
*/