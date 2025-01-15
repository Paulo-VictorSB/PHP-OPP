<?php

// Podemos importar os dois scripts que tem namespaces diferentes e usar as duas classes com o mesmo nome, mas que pertencem a classes distintas.

require_once('index_3.php');
require_once('index_4.php');

$operacoes_loja = new loja\operacoes();
$operacoes_armazem = new armazem\operacoes();

$operacoes_loja->operacao_1();
echo "<br>";
$operacoes_loja->operacao_2();
echo "<br>";
$operacoes_armazem ->operacao_1();
echo "<br>";
$operacoes_armazem ->operacao_2();
echo "<br>";