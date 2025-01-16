<?php

// STRICT TYPES

/*
    Para que o PHP obrigue a passar argumentos que correspondem ao tipo de lado esperado, temos que ativar o strict_types = 1
*/

declare(strict_types = 1);

function apresentar_1($mensagem){
    echo "Mensagem: $mensagem<br>";
}

function apresentar_2(String $mensagem){
    echo "Mensagem: $mensagem<br>";
}

apresentar_1("Mensagem do tipo string");
apresentar_2(100);