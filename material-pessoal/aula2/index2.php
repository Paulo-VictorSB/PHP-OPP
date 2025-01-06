<?php

class pessoa{
    public $nome;
    public $sobrenome;
    public $cor_do_cabelo;

    public function metodo1(){
        echo "metodo 1";
    }

    protected function metodo2(){
        echo "metodo 2";
    }

    private function metodo3(){
        echo "metodo 3";
    }
}

$mulher = new pessoa();

$mulher->metodo1();
$mulher->metodo2();
$mulher->metodo3();