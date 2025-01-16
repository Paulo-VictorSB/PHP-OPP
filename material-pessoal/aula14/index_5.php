<?php

// STRICT TYPES

declare(strict_types = 1);

class pessoa{
    public string $nome;
    public string $apelido;
    public int $altura;

    public function falar(string $mensagem): string{
        return "O Meu nome é {$this->nome} e a mensagem é: $mensagem";
    }
}

$p = new pessoa();
$p->nome = "Paulo Victor";
$p->falar('Bom dia!');

// Estes conceitos são importantes numa linguagem de programação, uma vez que permitem evitar erros incovenientes. A maior parte das linguagens de programação de alto nivel usam váriaveis tipadas. Este é o caminho a seguir para alcançar no PHP as melhores práticas como programador.