<?php

// COMO USAR NAMESPACE E SUA UTILIDADE

/*
    O Conceito de namespace é muito importante na programação orientada a objetos.

    Permitem resolver dois problemas:
     - Organizar melhor as classes permitindo agrupa-las em "espaço"
     - Permitem que existam no mesmo projeto, classes com o mesmo nome. Mas em namespaces diferentes.

    Por exemplo: podes ter uma classe que definiste no teu código e juntar ao teu projeto uma outra classe criada por outro programador. Verifica que, afinal, ambas as classes tem o mesmo nome. Não necessitas alterar o nome das classes. Basta que estejam em namespaces diferentes e tens o problema resolvido.

    Usar namespace em projetos de média e larga escala, é uma forma de manter o código mais bem organizado.
*/

// A expressão NAMESPACE deve SER a primeira declaração no topo do script;
namespace classes_principais;

class matematica{
    public function adicionar($a,$b){
        return $a + $b;
    }

    public function subtrair($a,$b){
        return $a - $b; 
    }
}