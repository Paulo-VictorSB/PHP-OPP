<?php

// -----------------------------------CLASSES ABSTRATAS----------------------------------------

/*
    Um outro conceito muito importante na programação orientada a objetos é o conceito de Classes abstradas.

    Uma classe abstrata, com métodos abstratos, implica que a classe tenham métodos que estão declarados, mas cuja funcionalidade vai ter que ser implementada nas classes derivadas.

    Vejamos um exemplo:
*/

abstract class pessoa{
    abstract public function identificar();
    abstract public function falar();
    abstract public function saltar();
}

// Como podes ver, os métodos estão declarados, mas não tem implementação.
// As classes derivadas vão ter que definir essa implementação.
// NOTA: TODA CLASSE QUE ESTENDER A ABSTRADA TEM A OBRIGATORIEDADE DE IMPLEMENTAR OS MÉTODOS!

class homem extends pessoa{
    public function identificar(){
        // ...
    }
    public function falar(){
        // ...
    }
    public function saltar(){
        // ...
    }
}

/*
    CONCEITOS

    Ao herdar de uma classe abstrata, o método da classe filha deve ser definido com o mesmo nome, e um access modifier com restrição igual ou menor.

    Por exemplo, se o método abstrato for definido com protected o método da classe filha deve ser definida como protected ou public. Não pode ser privado.

    Além disso, o tipo e o número de argumentos exigidos devem ser os mesmos. No entanto, as classes filhas podem ser argumentos opcionais.

    Assim, quando uma classe filha é herdada de uma classe abstrata, temos as seguintes regras:
    > o método da classe filha deve ser definido com o mesmo nome;
    > o método da classe filha deve ser definido com o mesmo access modifier ou outro menos restritos.
    > o número de argumentos necessários deve ser o mesmo. No entanto, a classe filha pode ter argumentos opcionais e adicionais.
*/

abstract class teste{
    abstract public function mensagem($mensagem);
}

class teste1 extends teste{
    public function mensagem($mensagem, $autor = 'undefined'){
        echo "$mensagem - $autor";
    }
}

$cliente = new teste1();
$cliente->mensagem("Mensagem criada por", "Admin");