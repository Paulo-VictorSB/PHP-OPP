<?php

// PROPIEDADES READONLY

/*
    Já vimos que, dentro de uma classe, podemos ter as nossas propiedades protegidas. Mas a partir do php8.1 passou a ser possível a existência de propiedade só de leitura readonly.

    A principal caracteristica das propiedades readonly é o fato de só poderem ser iniciadas dentro da class e, depois de iniciadas, não podem ter o seu valor alterado.

    Por exemplo, esta construção simples, não é possível definir a propiedade $usuario, apesar de ser pública, gera um erro.
*/

// class usuario1{
//     public readonly string $usuario;
// }

// $usuario = new usuario1();
// $usuario->usuario = "joao";

class usuario2{
    public readonly string $usuario;
    public function __construct($n){
        $this->usuario = $n;
    }
}

$usuario2 = new usuario2('joao');
echo $usuario2->usuario;