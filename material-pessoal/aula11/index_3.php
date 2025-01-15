<?php

// MÉTODOS ESTÁTICOS

/*
    Podemos também chamar métodos estáticos de uma classe dentro de outra classe
    Veja exemplos:
*/

class matematica{
    public static function adicionar($a,$b){
        return $a+$b;
    }
}

class operacoes{
    public function executar(){
        return matematica::adicionar(1,2);
    }
}

$operacoes = new operacoes();
echo $operacoes->executar();    