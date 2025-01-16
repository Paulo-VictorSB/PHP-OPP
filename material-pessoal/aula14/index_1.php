<?php

// STRICT TYPES

/*
    A Linguagem PHP é muito conhecida por ser fracamente tipada. Na realidade, muitos programadores atualmete ainda usam o PHP com variaveis, métodos e parâmetros que não define que tipo de valores aceitam ou retornam.

    Com a evolução da linguagem, e apesar de não ser obrigatório o seu uso, a definição de tipos das propiedades de uma classe, parâmetros e retorno de funções e métodos passou a ser possível.

    Neste vídeo vamos ver rapidamente alguns exemplos:
*/

function apresentar_1($mensagem){
    echo "Mensagem: $mensagem<br>";
}

function apresentar_2(String $mensagem){
    echo "Mensagem: $mensagem<br>";
}

apresentar_1("Mensagem do tipo string");
apresentar_2(100);