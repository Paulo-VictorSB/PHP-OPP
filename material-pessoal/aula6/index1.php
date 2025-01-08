<?php

// --------------------------SOBREPOSICAO DE METODOS HEREDITARIOS------------------------------

/* 
    O conceito de 'sobreposicao' é uma tradução simples de um outro conceito mais conhecido como 'override'
    Na prática, significa que podemos ter uma classe 'mãe' onde um determinado método é definido e podemos alterar o seu código dentro de uma classe filha.

    Vejamos o exemplo:
*/

class pessoa{
    public $nome;
    public function indentificacao(){
        echo "O nome é {$this->nome} e este é o método da classe mãe.";
    }
}

class cliente{
    public function indentificacao(){
        echo "O nome é {$this->nome} e este é o método da nova implementacao da classe filha.";
    }
}

$cliente_1 = new pessoa();
$cliente_1->nome = 'Joao';

$cliente_2 = new cliente();
$cliente_2->nome = 'Ana';

$cliente_1->indentificacao();
echo "<br>";
$cliente_2->indentificacao();