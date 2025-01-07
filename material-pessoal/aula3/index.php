<?php

// Nessa aula nós veremos sobre os _construct();

class pessoa{
    private $nome;
    private $sobrenome;

    public function __construct($n, $s){
        $this->nome = $n;
        $this->sobrenome = $s;
    }

    public function get_nome_completo(){
        return $this->nome . " " . $this->sobrenome;
    }
}

$user = new pessoa("Ana", "Carla");
echo $user->get_nome_completo();