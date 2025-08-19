<?php
session_start();

// Função para inicializar chat
function iniciarChat() {
    $_SESSION['chat'] = [];
    $_SESSION['chat'][] = ['ia', 'Olá! Sou a IA da Academia 💪. Como posso ajudar?'];
}

// Resetar chat
if (isset($_GET['reset'])) {
    iniciarChat(); // Inicializa novamente o chat
    header('Location: index.php');
    exit;
}

// Inicializa chat caso não exista
if (!isset($_SESSION['chat']) || empty($_SESSION['chat'])) {
    iniciarChat();
}

// Função de respostas pré-programadas
function perguntarParaIA($mensagem) {
    $respostas = [
        // Cumprimentos
        "ola" => "Olá! Sou a IA da Academia 💪. Como posso ajudar?",
        "oi" => "Oi! Precisa de ajuda com treinos, planos ou informações gerais?",
        "bom dia" => "Bom dia! Que tal começar o dia com um treino? 💪",
        "boa tarde" => "Boa tarde! Preparado para manter a forma hoje? 🏋️‍♂️",
        "boa noite" => "Boa noite! Ainda dá tempo de treinar ou se planejar para amanhã!",

        // Planos
        "plano 1" => "Plano 1: Mensalidade básica, acesso à academia de segunda a sexta, 6h às 22h. Valor: R$150/mês.",
        "plano 2" => "Plano 2: Mensalidade completa, acesso à academia todos os dias, participação em aulas coletivas inclusa. Valor: R$250/mês.",
        "plano 3" => "Plano 3: Premium, inclui aulas personalizadas, consultoria nutricional e acesso ilimitado. Valor: R$400/mês.",
        "planos" => "Temos três planos disponíveis: Plano 1 (básico), Plano 2 (completo) e Plano 3 (premium). Se quiser detalhes de algum, me pergunte!",
        "quero saber mais sobre o plano 1" => "Plano 1: Mensalidade básica, acesso à academia de segunda a sexta, 6h às 22h, valor R$150/mês. Ideal para quem quer treinar regularmente sem extras.",

        // Personal trainers
        "personal" => "Temos personal trainers disponíveis para acompanhamento individual. Se quiser, posso te mostrar os perfis e valores.",
        "quero saber sobre os personais" => "Nossos personal trainers estão disponíveis para treinos individuais. Valor médio: R$80 a R$120 por sessão. Podemos agendar uma avaliação gratuita!",

        // Treinos e objetivos
        "treino" => "Posso te sugerir treinos de acordo com seu objetivo! Quer hipertrofia, emagrecimento ou condicionamento físico?",
        "objetivo hipertrofia" => "Para hipertrofia, indicamos treinos de musculação focados em grandes grupos musculares, 4 a 5x por semana, combinados com alimentação adequada.",
        "objetivo emagrecimento" => "Para emagrecimento, recomendamos treinos aeróbicos combinados com musculação leve, 3 a 5x por semana, e acompanhamento nutricional.",
        "objetivo condicionamento" => "Para condicionamento físico, sugerimos treinos funcionais e aeróbicos de 3 a 5x por semana, focando resistência e flexibilidade.",

        // Horários
        "horario" => "Nosso atendimento é de segunda a sexta, das 6h às 22h, e sábado das 8h às 18h.",
        "horarios de aula" => "Temos aulas de spinning, funcional, yoga e pilates. Os horários variam entre 7h e 20h de segunda a sexta.",
        "aulas coletivas" => "Oferecemos spinning, funcional, yoga, pilates, zumba e crossfit. Cada aula tem duração média de 50 minutos.",
        "horarios aulas" => "Segunda a sexta: 7h, 9h, 17h e 19h. Sábado: 9h e 11h.",

        // Estrutura e localização
        "estrutura" => "Nossa academia conta com equipamentos modernos de musculação, cardio, área de funcional, sala de aulas coletivas e vestiários completos.",
        "localizacao" => "Estamos localizados na Rua Exemplo, 123. Temos estacionamento gratuito para alunos.",

        // Nutrição
        "nutricao" => "Temos nutricionistas disponíveis para ajudar você a montar uma dieta personalizada de acordo com seus objetivos.",

        // Promoções
        "promocao" => "Confira nossas promoções: 10% de desconto na primeira mensalidade e pacotes trimestrais com benefícios exclusivos!",

        // Avaliação e saúde
        "avaliacao" => "Oferecemos avaliação física completa para ajudar a definir seu plano de treino ideal.",
        "dicas" => "Lembre-se de se hidratar, alongar antes dos treinos e manter uma alimentação equilibrada!",

        // Pagamentos e contratos
        "pagamento" => "Aceitamos cartão de crédito, débito, pix e dinheiro. Também temos planos familiares com desconto.",
        "contrato" => "Para fechar um contrato, você precisa preencher nosso formulário na recepção ou online. Podemos te enviar o link se quiser.",
        "cancelamento" => "O cancelamento pode ser feito presencialmente ou online com aviso prévio de 30 dias.",

        // Motivação
        "motivacao" => "Treinar é difícil no começo, mas lembre-se: suor hoje, resultado amanhã! 💪",

        // Default
        "default" => "Desculpe, não entendi sua pergunta. Pergunte sobre planos, personal trainers, treinos, horários ou promoções."
    ];

    $mensagemLower = strtolower(trim($mensagem));

    foreach ($respostas as $chave => $resposta) {
        if (strpos($mensagemLower, $chave) !== false) {
            return $resposta;
        }
    }

    return $respostas["default"];
}

// Recebe mensagem do usuário
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['mensagem'])) {
    $msg = trim($_POST['mensagem']);
    if ($msg !== '') {
        $_SESSION['chat'][] = ['user', htmlspecialchars($msg)];
        $resposta = perguntarParaIA($msg);
        $_SESSION['chat'][] = ['ia', nl2br(htmlspecialchars($resposta))];
    }
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8" />
<title>Chat IA Academia</title>
<link rel="stylesheet" href="chat.css" />
</head>
<body>
<div class="chat-container">
    <h2>💬 IA da Academia</h2>
    <div class="chat-box">
        <?php foreach ($_SESSION['chat'] as $mensagem): ?>
            <div class="msg <?= $mensagem[0] ?>">
                <strong><?= strtoupper($mensagem[0]) ?>:</strong> <?= $mensagem[1] ?>
            </div>
        <?php endforeach; ?>
    </div>
    <form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <input type="text" name="mensagem" placeholder="Digite sua mensagem..." required />
        <button type="submit">Enviar</button>
    </form>
    <div class="reset">
        <a href="?reset=1">🔄 Reiniciar conversa</a>
    </div>
</div>
</body>
</html>
