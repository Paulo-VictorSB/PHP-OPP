<?php
// Verifica se o cookie 'nome' está definido
if (empty($_COOKIE['nome'])) {
    header("Location: index.php"); // Redireciona para a página inicial
    exit();
}

class ContaBancaria{
    private $saldo = 0.00;
    public $titular;
    public $mensagem;

    public function __construct($titular) {
        $this->titular = $titular;  // Inicializa a variável titular
    }

    public function depositar($valor){
        $this->saldo += $valor;
        return $valor;
    }

    public function sacar($valor){
        if ($valor > $this->saldo) {
            $this->mensagem = "Você não pode sacar um valor maior do que você tem.";
            return $this->saldo;
        } else {
            $this->saldo -= $valor;
            return $this->saldo;
        }
    }

    public function verSaldo(){
        return number_format($this->saldo, 2, ',', '.');
    }
}

// Cria o objeto e inicializa o titular a partir do cookie
$pessoa = new ContaBancaria($_COOKIE['nome']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['adicionarValor'])) {
        $pessoa->depositar($_POST['adicionarValor']);
    }

    if (!empty($_POST['sacarValor'])) {
        $pessoa->sacar($_POST['sacarValor']);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pbank - Seu banco favorito do Momento</title>
    <link rel="shortcut icon" href="banner.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container containerConta">
        <header id="banner">
            <nav>
                <i class="fa-solid fa-bars"></i>
                <h3>PBANK</h3>
                <i class="fa-solid fa-location-pin"></i>                
            </nav>
            <div id="boasVindas">
                <p>Olá, <?=$pessoa->titular?></p>
                <span>Ag 4022 Cc 01091792-9</span>
            </div>
        </header>
        <div id="saldo">
            <i class="fa-solid fa-sack-dollar"></i>
            <p>Saldo disponível</p>
            <i class="fa-solid fa-chevron-down" id="chevron"></i>
        </div>
        <div id="saldoMostrar">
            <h1>R$ <?=$pessoa->verSaldo()?></h1>
        </div>
        <p>
            <?php if (!empty($pessoa->mensagem)): ?>
                <?php echo $pessoa->mensagem; ?>
            <?php endif; ?>
        </p>
        <div class="footer">
            <form method="post">
                <input type="number" name="adicionarValor" id="adicionarValor" placeholder="Valor..">
                <input type="submit" value="Adicionar Valor">
            </form>
            <form method="post">
                <input type="number" name="sacarValor" id="sacarValor" placeholder="Valor..">
                <input type="submit" value="Sacar Valor">
            </form>
        </div>
    </div>

    <script src="a.js"></script>
</body>
</html>
