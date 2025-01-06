<?php

echo "Seja bem vindo a PBank! Seu banco favorito do momento!";
echo "<br>";

class ContaBancaria{
    private $saldo = 0;
    public $titular;

    public function depositar($valor){
        $this->saldo += $valor;
        return "Saldo depositado: $valor, saldo atual: {$this->saldo}";
    }

    public function sacar($valor){
        if($valor > $this->saldo){
            return "Saldo insuficiente para saque!, saldo atual: {$this->saldo}";
        } else {
            $this->saldo -= $valor;
            return "Valor sacado: $valor, saldo atual: {$this->saldo}";
        }
    }

    public function verSaldo(){
        return "Saldo atual: {$this->saldo}";
    }
}

$paulo = new ContaBancaria();
$paulo->titular = "Paulo Victor";
echo "Titular da conta: $paulo->titular";
echo "<br>";
echo $paulo->depositar(500);
echo "<br>";
echo $paulo->sacar(300);
echo "<br>";
echo $paulo->verSaldo();