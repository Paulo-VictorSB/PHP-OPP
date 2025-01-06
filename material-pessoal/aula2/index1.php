<?php

class pessoa{
    public $nome;
    protected $apelido;
    private $cor_do_cabelo;
};

$homem = new pessoa();
$homem->nome = "José";
$homem->apelido = "Baixinho";
$homem->$cor_do_cabelo = "Azul";

echo $homem;