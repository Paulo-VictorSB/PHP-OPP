<?php

class numero{
    private $numero;
    private $tabuada;

    public function __construct($numero){
        $this->numero = $numero;
    }

    public function get_numero(){
        return $this->numero;
    }

    public function par_ou_impar(){
        if($this->numero % 2 == 0){
            return 'par';
        } else {
            return 'impar';
        }
    }

    public function tabuada(){
        $this->tabuada = [];
        for($i = 1; $i < 10; $i++){
            $dados = $this->numero . " x " . $i . " = " . $this->numero * $i;
            $this->tabuada[] = $dados;
        }
        return $this->tabuada;
    }

    public function raiz_quadrada(){
        return sqrt($this->numero);
    }
}