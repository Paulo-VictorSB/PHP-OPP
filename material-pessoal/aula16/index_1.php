<?php

// COMO CHAMAR UM CONSTRUCTOR DE UMA CLASSE MÃE

/*
    Vamos ver um cenário em que temos uma classe de onde deriva outra classe.
*/

class Humano{
    public $nome;
    public $perfil;
    public function __construct($nome){
        $this->nome = $nome;
    }
}

class Funcionario extends Humano{
    public function __Construct(){
        $this->perfil = "administrador";
    }
}

$funcionario = new Funcionario();

/*
    Funcionário é uma classe que tem herança de humano. Mas como foi implementado um __construct() na classe Funcionario, a herança esquece a assinatura da classe mãe, e assume a implementação da classe filho.

    O código é executado sem qualquer problema.
*/