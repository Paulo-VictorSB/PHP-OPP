<?php

// AUTOLOAD DE CLASSES

// No PHP, o autoload é uma metodologia que permite carregar automaticamente classes ou interfaces sem precisar incluir manualmente os arquivos que as contêm com require ou include. Isso facilita o gerenciamento de projetos maiores e melhora a organização do código.

// Por que usar Autoload?
// Redução de código repetitivo: Não é necessário usar require ou include para cada classe.
// Organização: Estimula uma estrutura de arquivos limpa e modular.
// Desempenho: As classes são carregadas apenas quando realmente necessárias.
// Manutenção: Se a estrutura de arquivos mudar, o ajuste do autoload é centralizado.

// Quando você tenta usar uma classe que ainda não foi carregada, o PHP permite que você defina uma função para localizar e carregar o arquivo da classe automaticamente. Isso é feito com o auxílio de funções como spl_autoload_register.

// /projeto
// |-- /classes
// |   |-- Usuario.php
// |   |-- Produto.php
// |-- autoload.php
// |-- index.php

// <?php
// class Usuario {
//     public function __construct() {
//         echo "Classe Usuario carregada!<br>";
//     }
// }

// <?php
// class Produto {
//     public function __construct() {
//         echo "Classe Produto carregada!<br>";
//     }
// }

// <?php
// spl_autoload_register(function($class) {
//     $file = __DIR__ . '/classes/' . $class . '.php';
//     if (file_exists($file)) {
//         require_once $file;
//     }
// });


// <?php
// require_once 'autoload.php';

// $usuario = new Usuario(); Classe Usuario será carregada automaticamente
// $produto = new Produto(); Classe Produto será carregada automaticamente

// Explicação do código:
// spl_autoload_register: É uma função do PHP usada para registrar uma função ou método responsável por carregar automaticamente as classes.
// Callback: No exemplo, o callback usa o nome da classe $class para localizar o arquivo correspondente dentro da pasta classes/.
// Verificação de arquivo: A função verifica se o arquivo existe com file_exists antes de incluí-lo, evitando erros.
