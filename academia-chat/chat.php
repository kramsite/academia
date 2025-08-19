<?php
session_start();

// Inicializa chat
if (!isset($_SESSION['chat'])) {
    $_SESSION['chat'] = [];
}

// Inicializa menu
if (!isset($_SESSION['menu'])) {
    $_SESSION['menu'] = 'principal';
}

// Resetar chat
if (isset($_GET['reset'])) {
    $_SESSION['chat'] = [];
    $_SESSION['menu'] = 'principal';
    $_SESSION['chat'][] = ['ia', 'Olá! Sou a IA da Academia 💪. Como posso ajudar?'];
    header('Location: index.php');
    exit;
}

// Função para enviar resposta e registrar no chat
function enviarMensagemIA($mensagem) {
    $_SESSION['chat'][] = ['ia', $mensagem];
}

// Processa clique do usuário
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['opcao'])) {
    $opcao = $_POST['opcao'];
    $_SESSION['chat'][] = ['user', $opcao];

    switch($_SESSION['menu']) {
        case 'principal':
            if ($opcao === 'Planos') {
                $_SESSION['menu'] = 'planos';
                enviarMensagemIA("Temos três planos disponíveis. Qual você quer ver?");
            } elseif ($opcao === 'Personal') {
                enviarMensagemIA("Temos personal trainers disponíveis. Valor médio: R$80 a R$120 por sessão.");
            } elseif ($opcao === 'Horários') {
                enviarMensagemIA("Nosso atendimento é de segunda a sexta, das 6h às 22h, e sábado das 8h às 18h.");
            } else {
                enviarMensagemIA("Desculpe, não entendi sua pergunta.");
            }
            break;

        case 'planos':
            if ($opcao === 'Plano 1') {
                enviarMensagemIA("Plano 1: Mensalidade básica, acesso de segunda a sexta, 6h às 22h. Valor: R$150/mês.");
            } elseif ($opcao === 'Plano 2') {
                enviarMensagemIA("Plano 2: Mensalidade completa, acesso todos os dias, aulas coletivas inclusas. Valor: R$250/mês.");
            } elseif ($opcao === 'Plano 3') {
                enviarMensagemIA("Plano 3: Premium, aulas personalizadas, consultoria nutricional, acesso ilimitado. Valor: R$400/mês.");
            }
            // Volta ao menu principal
            $_SESSION['menu'] = 'principal';
            break;
    }

    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Chat IA Academia</title>
<style>
.chat-box { border: 1px solid #ccc; padding: 10px; height: 300px; overflow-y: scroll; margin-bottom: 10px; }
.msg { margin-bottom: 8px; }
.user { color: blue; }
.ia { color: green; }
button { margin: 2px; }
</style>
</head>
<body>
<h2>💬 IA da Academia</h2>
<div class="chat-box">
<?php foreach ($_SESSION['chat'] as $mensagem): ?>
    <div class="msg <?= $mensagem[0] ?>">
        <strong><?= strtoupper($mensagem[0]) ?>:</strong> <?= $mensagem[1] ?>
    </div>
<?php endforeach; ?>
</div>

<form method="post">
<?php
// Mostra opções de acordo com o menu
if ($_SESSION['menu'] === 'principal') {
    echo '<button type="submit" name="opcao" value="Planos">Planos</button>';
    echo '<button type="submit" name="opcao" value="Personal">Personal</button>';
    echo '<button type="submit" name="opcao" value="Horários">Horários</button>';
} elseif ($_SESSION['menu'] === 'planos') {
    echo '<button type="submit" name="opcao" value="Plano 1">Plano 1</button>';
    echo '<button type="submit" name="opcao" value="Plano 2">Plano 2</button>';
    echo '<button type="submit" name="opcao" value="Plano 3">Plano 3</button>';
}
?>
</form>

<div class="reset">
    <a href="?reset=1">🔄 Reiniciar conversa</a>
</div>
</body>
</html>
