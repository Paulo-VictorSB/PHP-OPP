<?php

//---------------------------IMPEDIR HERANÇA DE CLASSE OU MÉTODO-------------------------------

/*
    Imagina que você vai criar um bloco de código que vai ser usado por outro programador. Você vai querer a estrutura da tua classe contenha mecanismos que impessam determinados tipos de ações.
    Por exemplo, você pode querer que uma determinada classe não possa ser herdada por outra. Ou simplismente, um determinado método dessa classe não deverá pode ser sobreposto (overrido) por outro dentro da classe filha.

    Vejamos como alcançar determinado resultado:
*/

// Usando a palavra reservada FINAL no começo da classe. EX: FINAL CLASS CLASSEunica, podemos usar também para métodos, FINAL PUBLIC FUNCTION NOMEFUNCAO(){};

final class pessoa{
    public $nome;
}

class aluno extends pessoa{
    // fatal error
}