<?php

// O Que são TRAITS e como UTILIZAR?

/*
    O PHP só suporta heranças únicas, o que significa isso? Uma classe só pode herdar de outra classe.

    Imagina que queres que a classe seja derivada de outra e, ao mesmo tempo, possa "herdar" outras funcionalidades a partir de outras estruturas.

    É neste contexto que as TRAITS surgem.

    Basicamente, as TRAITS permitem declarar métodos que podem ser usados em múltiplas classes. Na sua vertente mais avançada, os TRAITS podem conter métodos abstratos que podem ser usados em múltiplas classes, e esses métodos podem ter qualquer tipo de access modifier.

    Iremos perceber agora, através de um conceito bem siples.

    // trait nome{
        ...métodos
    };

    // class nome{
        use trait
    };
*/

trait funcoes_matematicas{
    public function somar($a, $b){
        return $a + $b;
    }
    public function subtrair($a, $b){
        return $a - $b;
    }
    public function dividir($a, $b){
        return $a / $b;
    }
    public function multiplicar($a, $b){
        return $a * $b;
    }
}

class matematica{
    use funcoes_matematicas;
}

$calculadora = new matematica();
echo $calculadora->somar(1, 2);
echo "<br>";
echo $calculadora->subtrair(1, 2);
echo "<br>";
echo $calculadora->dividir(1, 2);
echo "<br>";
echo $calculadora->multiplicar(1, 2);
echo "<br>";