<?php

// COMO CHAMAR O CONSTRUCT DA CLASSE MÃE

/*
    Vejamos agora como fazer para chamar o método __construct() da mãe.
*/

class Humano{
    public $nome;
    public $perfil;
    public function __construct($nome){
        $this->nome = $nome;
    }
}

class Funcionario extends Humano{
    public function __construct($n){
        parent::__construct($n);
        $this->perfil = 'Administrador';
    }
}

$funcionario = new Funcionario("Paulo");
echo $funcionario->nome;
echo "<br>";
echo $funcionario->perfil;