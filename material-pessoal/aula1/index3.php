<?php

class fruto{
    public $nome;
    public $cor;
    public $peso;

    public function apresentar_fruto(){
        return "O meu nome é {$this->nome}, minha cor é {$this->cor} e meu peso é {$this->peso} gramas";
    }
};
$laranja = new fruto();
$laranja->nome = "Laranja";
$laranja->cor = "laranja";
$laranja->peso = 176;

$morango = new fruto();
$morango->nome = "Morango";
$morango->cor = "Vermelho";
$morango->peso = 34;

echo $laranja->apresentar_fruto();
echo "<br>";
echo $morango->apresentar_fruto();