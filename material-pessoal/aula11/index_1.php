<?php

// MÉTODOS ESTÁTICOS

/*
    Métodos estáticos são métodos de uma classe que podem ser evocados diretamente sem que seja necessário criar um objeto a partir dessa classe.

    Vejamos um exeplo:
*/

class matematica{
    public static function adicionar($a, $b){
        return $a+$b;
    }
}
    
/*
    Podemos chamar o método chamando o nome da classe
    Em seguida, :: e o nome do método com os respectivos parametros.
*/

echo matematica::adicionar(1,2);

