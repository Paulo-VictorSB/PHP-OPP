<?php

// MÉTODOS ESTÁTICOS

/*
    Podemos ainda ter uma classe mãe, com um método estático, e uma classe filha chamar esse método usando a expressão PARENT;
    Veja exemplos:
*/

class operacoes{
    protected static function operacao1(){
        return 'operacao 1';
    }
}

class matematica extends operacoes{
    public function executar(){
        return parent::operacao1();
    }
}

$matematica = new matematica();
echo $matematica->executar();