<?php

abstract class Veiculos{
    protected $tipo;
    protected $marca;
    protected $ano;

    public function __constructor($tipo, $marca, $ano){
        $this->tipo = $tipo;
        $this->marca = $marca;
        $this->ano = $ano;
    }

    public function get_tipo(){
        return $this->tipo;
    }
}

class automovel extends Veiculos{
    public function apresentar(){
        return "Este objeto guarda os dados de um automóvel de marca ${$this->marca}, do ano ${$this->ano}";
    }
}

class aviao extends Veiculos{
    public function apresentar(){
        return "Este objeto guarda os dados de um aviao de marca ${$this->marca}, do ano ${$this->ano}";
    }
}

class barco extends Veiculos{
    public function apresentar(){
        return "Este objeto guarda os dados de um barco de marca ${$this->marca}, do ano ${$this->ano}";
    }
}