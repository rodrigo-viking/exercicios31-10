<?php 

Class Conta
{
    private $numero;
    private $cliente;
    private $saldo;

    public function __construct(float $saldo = 0 ) 
    {
        $this->setSaldo($saldo);
    }

    public function setNumero($valorNumero)
    {
        $this->numero = $valorNumero;
    }

    public function getNumero(): int
    {
        return $this->numero;
    }

    public function setcliente($valorCliente)
    {
        $this->cliente = $valorCliente;
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    public function setSaldo($valorSaldo)
    {
        $this->saldo = $valorSaldo;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function sacar($valorSacado)
    {
        $this->saldo -= $valorSacado;
    }

    public function depositar($valorDepositado)
    {
        $this->saldo += $valorDepositado;
    }

} 

/**** Basta descomentar para testar ****/

/*
$conta = new Conta();
$conta->setNumero('123');
$conta->setCliente('Rodrigo');
$conta->setSaldo('300.5');
echo "Numero: {$conta->getNumero()}";
echo "<br>";
echo "Cliente: {$conta->getCliente()}";
echo "<br>";
echo "Saldo: R$ {$conta->getSaldo()}";
echo "<br>";
$conta->sacar('100');
echo "Saque feito de 100 reais";
echo "<br>";
echo "Saldo depois do saque: R$ {$conta->getSaldo()}";
echo "<br>";
$conta->depositar('200');
echo "Deposito feito de 200 reais";
echo "<br>";
echo "Saldo depois do deposito: R$ {$conta->getSaldo()}";
*/