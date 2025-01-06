<?php

class pessoa {

    private $nome;

    function set_nome($n){
        $nomes_proibidos = [
            'Paulo', 'José', 'Pedro', 'Augusto', 'Ítalo'
        ];

        if(in_array($n, $nomes_proibidos)){
            return "ERRO: nome proíbido";
        } else {
            return;
        }

        $this->nome = $n;
    }

    public function get_nome() {
        if (empty($this->nome)) {
            return "ERRO: nome não setado";
        } else {
            return $this->nome;
        }
    }

};

$joao = new pessoa();

$joao->set_nome("João");

echo "Olá! Tudo bem? Meu nome é {$joao->get_nome()}";