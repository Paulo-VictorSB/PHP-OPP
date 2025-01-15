<?php

// PROPIEDADES ESTATICAS

/*
    À semelhança dos métodos, as classes também podem ter propiedades estáticas. Essas propiedades podem ser chamadas diretamente sem que seja necessário criar uma instância da classe.
    Exemplos a seguir:
*/

class matematica{
    public static $pi = 3.14;
}

echo matematica::$pi * 10;