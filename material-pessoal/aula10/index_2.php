<?php

// O Que são TRAITS e como UTILIZAR?

trait movimentos_terrestres{
    public function correr(){

    }
    public function caminhar(){

    }
    public function para(){

    }
}
trait movimentos_aereos{
    public function voar(){

    }
    public function planar(){

    }
    public function pousar(){

    }
}
class ser_vivo{
    public $nome;
    public $especie;
    public $tipo;
}
class homem extends ser_vivo {
    use movimentos_terrestres;
}
class leao extends ser_vivo {
    use movimentos_terrestres;
}
class codorna extends ser_vivo {
    use movimentos_terrestres, movimentos_aereos;
}