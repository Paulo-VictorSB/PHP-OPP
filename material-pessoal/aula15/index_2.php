<?php

// PROPIEDADES READONLY

class Usuario{
    public readonly string $nome;
    public function __construct($u){
        $this->nome = $u;
    }
    public function alterar(){
        $this->nome = 'Joaquim';
    }
}

$usuario = new Usuario("Paulo");
echo $usuario->nome;

$usuario->alterar();
echo $usuario->$nome;