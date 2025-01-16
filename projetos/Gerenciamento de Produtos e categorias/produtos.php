<?php

abstract class Produto{
    protected $categoria;
    protected $nome;
    protected $preco;

    public function __construct($dados){
        $this->categoria = $dados[0];
        $this->nome = $dados[1];
        $this->preco = $dados[2];
    }

    public function get_categoria(){
        return $this->categoria;
    }

    public function get_nome(){
        return $this->nome;
    }

    public function get_preco(){
        return $this->preco;
    }

    abstract public function exibir_detalhes();
}

class Eletronico extends Produto{
    public function exibir_detalhes(){
        return "Produto: {$this->nome}, Gategoria: {$this->categoria}, Preço: BRL {$this->preco}";
    }
}

class Movel extends Produto{
    public function exibir_detalhes(){
        return "Produto: {$this->nome}, Gategoria: {$this->categoria}, Preço: BRL {$this->preco}";
    }
}

class Livro extends Produto{
    public function exibir_detalhes(){
        return "Produto: {$this->nome}, Gategoria: {$this->categoria}, Preço: BRL {$this->preco}";
    }
}

class Brinquedo extends Produto{
    public function exibir_detalhes(){
        return "Produto: {$this->nome}, Gategoria: {$this->categoria}, Preço: BRL {$this->preco}";
    }
}

class Eletrodomestico extends Produto{
    public function exibir_detalhes(){
        return "Produto: {$this->nome}, Gategoria: {$this->categoria}, Preço: BRL {$this->preco}";
    }
}