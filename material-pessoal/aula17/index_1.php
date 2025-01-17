<?php

// CONSTANTES DENTRO DE UMA CLASSE

/*
  Por vezes podem ter necessidade de definir uma constante que é para ser usadaapenas dentro da classe. Bom, na realidade, isto é possivel, mas as constantes não por natureza, públicas.
  
    usa-se self::const para acessar a constante.

  Vejamos como funcionam.
*/

class Matematica{
    const VALOR_FIXO = 10;

    public function calcular($numero){
        return $numero * self::VALOR_FIXO;
    }
}

$n = new Matematica();
echo $n->calcular(100);
echo "<br>";
echo $n::VALOR_FIXO;