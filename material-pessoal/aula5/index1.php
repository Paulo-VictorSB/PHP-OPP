<?php

// ---------------------------------<|-HEREDITARIEDADE-|>-------------------------------------

// Um dos aspectos mais importantes da programação orientada a objetos é a possibilidade da gente usar as classes para herdarem propiedades e métodos de outras classes.
// Dessa mesma forma, podemos ter um código mais limpo e bem estruturado sem repetições desnecessárias no código.

// Segue um exemplo simples.

class veiculo{
    public $tipo;

    public function ligar(){
        // ...
    }

    public function desligar(){
        // ...
    }
}

// Agora a classe veiculo vai ser usada para criar duas classes
class automoveis extends veiculo{
    // Além das propiedades e métodos da classe veículo, vai ainda ter as propiedades especificas de cada classe
    public $marca;
    public $ano;
}

class aviao extends veiculo{
    // Além das propiedades e métodos da classe veículo, vai ainda ter as propiedades especificas de cada classe
    public $altitude_maxima;
    public $autonomia;
    public $construtora;
    public $ano_de_fabricacao;
}

// Então..

$caminhao = new automoveis();
$caminhao->tipo = "Veículo Terrestre";
$caminhao->marca = "SCANIA";
$caminhao->ano = 2025;

$aviao = new aviao();
$aviao->tipo = "Veículo aéreo";
$aviao->altitude_maxima = 33000;
$aviao->autonomia = 6000;
$aviao->ano_de_fabricacao = 2022;
$aviao->construtora = "BOING";

$caminhao->ligar();
$aviao->ligar();


