<?php

// FUNÇÕES ÚTEIS PARA VERIFICAÇÃO DE CLASSES

/*
    Podemos verificar se uma classe existe, se ela possui um determinado método ou propiedade, vejamo sa seguir:
*/

class Humano{
    public $nome;
    public function falar($mensagem){
        // ... 
    }
}

class Pessoa {
    // ...
}

// Verificar se uma classe existe:
echo class_exists('Pessoa') ? 'Sim' : 'Não';
// Verificar se um método existe:
echo method_exists('Humano', 'falar') ? 'Sim' : 'Não';
// Verificar se uma propiedade existe:
echo property_exists('Humano', 'apelido') ? 'Sim' : 'Não';