<?php

    class Fruto{
        public $nome;
    }

    $laranja = new Fruto();

    $laranja->nome = "Laranja";
    $ananas = new Fruto();
    $ananas->nome = "Ananás";
    
    echo $laranja->nome;
    echo $ananas->nome;

?>