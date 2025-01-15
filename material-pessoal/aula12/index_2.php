<?php

// PROPIEDADES ESTÁTICAS

/*
    As classes podem ter propiedades estáticas e não estática tal como acontece nos métodos. As propiedades estáticas podem ser acedidas a partir de qualquer método da classe usando a expressão SELF.

    Exeplo a seguir:
*/

class humano{
    public static $nome;

    public function definir_nome($n){
        self::$nome = $n;
    }

    public function exibir_nome(){
        return "O meu nome é " . self::$nome;
    }
}

$humano = new humano();
$humano->definir_nome("Paulo Victor");

echo $humano->exibir_nome();