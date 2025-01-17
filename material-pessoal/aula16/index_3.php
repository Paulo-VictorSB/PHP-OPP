<?php

// COMO CHAMAR O CONSTRUCTOR DE UMA CLASSE MÃE

/*
    Esta funcionalidade não está apenas destinada ao constructor. Se quiseres criar um novo método dentro da classe filha e ainda assim quiseres executar o que está na implementação original, podes usar o parent:: 

    E isto aplica-se à chamada de método com o mesmo nome, como o método com outro nome.
*/

class Veiculo{
    public $marca;
    public function apresentar(){
        echo "Sou da mara {$this->marca}";
    }

    public function teste(){
        // ...
    }
}

class Automovel extends Veiculo{
    public function apresentar(){
        parent::apresentar();
        echo "<br>";
        echo "Chamei a função da classe mãe e ainda adicionei este código!";
    }
}

$a = new Automovel();
$a->marca = "Ferrari";
$a->apresentar();