<?php
session_start();

if (!isset($_SESSION['chat'])) {
    $_SESSION['chat'] = [];
    $_SESSION['chat'][] = ['ia', 'Olá! Sou a IA da Academia 💪. Como posso ajudar?'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msg = trim($_POST['mensagem']);
    if ($msg !== '') {
        $_SESSION['chat'][] = ['user', $msg];

        $msg_lower = strtolower($msg);
        $resposta = "Desculpe, não entendi. Pode repetir?";

        if (strpos($msg_lower, 'plano') !== false || strpos($msg_lower, 'planos') !== false) {
            $resposta = "Temos 3 planos:\n1️⃣ Básico - R$100/mês\n2️⃣ Intermediário - R$150/mês\n3️⃣ Premium - R$200/mês\nDigite o número para mais detalhes.";
        } elseif (strpos($msg_lower, '1') !== false) {
            $resposta = "Plano Básico: Acesso livre das 8h às 17h, sem personal.";
        } elseif (strpos($msg_lower, '2') !== false) {
            $resposta = "Plano Intermediário: Acesso das 6h às 22h + 2 aulas com personal.";
        } elseif (strpos($msg_lower, '3') !== false) {
            $resposta = "Plano Premium: Acesso total + personal ilimitado + nutrição.";
        } elseif (strpos($msg_lower, 'marcar') !== false || strpos($msg_lower, 'horário') !== false) {
            $resposta = "Claro! Que dia e horário você gostaria de agendar?";
        } elseif (strpos($msg_lower, 'contrato') !== false || strpos($msg_lower, 'fechar') !== false) {
            $resposta = "Ótimo! Para fechar o contrato, informe seu nome completo e CPF.";
        } elseif (preg_match('/\d{3}\.\d{3}\.\d{3}-\d{2}/', $msg_lower)) {
            $resposta = "Contrato gerado! Enviaremos por e-mail em breve. Seja bem-vindo(a)!";
        }

        $_SESSION['chat'][] = ['ia', nl2br($resposta)];
    }

    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Academia Smart IA</title>
</head>
<body>
    <div class="chat-container">
        <h2>Chat com a IA da Academia 💪</h2>
        <div class="chat-box" id="chatBox">
            <?php foreach ($_SESSION['chat'] as $mensagem): ?>
                <div class="msg <?= $mensagem[0] ?>">
                    <strong><?= strtoupper($mensagem[0]) ?>:</strong> <?= $mensagem[1] ?>
                </div>
            <?php endforeach; ?>
        </div>

        <form method="post">
            <input type="text" name="mensagem" placeholder="Digite sua mensagem..." required>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>
