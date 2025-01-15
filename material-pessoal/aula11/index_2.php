<?php

// MÉTODOS ESTÁTICOS

/*
    Uma classe pode conter métodos estáticos e não estáticos.
    Segue explos:
*/

class matematica{
    public static function adicionar($a,$b){
        return $a+$b;
    }

    public function executar_operacao(){
        $resultado = self::adicionar(1,2);
        // Self é usado para usar um método do própio objeto
        return $this->metodo_interno($resultado);
    }

    private function metodo_interno($valor){
        return $valor*2;
    }
}

echo matematica::adicionar(1,2);
echo "<br>";

$matematica = new matematica();
echo $matematica->executar_operacao();