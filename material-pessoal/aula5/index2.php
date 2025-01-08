<?php

class animal_de_estimacao{
    protected $nome;
    protected $especie;
    protected $raca;

    function __construct($nome, $especie, $raca){
        $this->nome = $nome;
        $this->especie = $especie;
        $this->raca = $raca;
    }
}

class cao extends animal_de_estimacao{
    function ladrar($vezes){
        echo "O {$this->nome} ladrou $vezes vezes!<br>";
    }
}

class gato extends animal_de_estimacao{
    function miar($vezes){ 
        echo "O {$this->nome} ladrou $vezes vezes!<br>";
    }
}

$cao = new cao("Fred", "Canis Lupus", "Schitzu");
$gato = new gato("Nick", "Felis Catus", "SRD");

echo $cao->ladrar(10);
echo "<br>";
echo $gato->miar(10);