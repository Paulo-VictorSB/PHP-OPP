<?php

// PROPIEDADES ESTÁTICAS

/*
    E Também como nos métodos, as propiedades estáticas podem ser acedidas de uma classe mãe usando a expressão PARENT::
*/

class humano{
    public static $valor = "Classe principal.";
}

class homem extends humano{
    public function executar(){
        return parent::$valor;
    }
}

$homem = new homem();
echo $homem->executar();