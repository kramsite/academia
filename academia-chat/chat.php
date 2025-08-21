<?php
session_start();

$faq = [
    'Dúvida sobre Planos' => [
        'Quais tipos de planos vocês oferecem?',
        'Como funciona a adesão?',
        'Posso mudar de plano depois?',
    ],
    'Dúvida sobre Local' => [
        'Qual o endereço da academia?',
        'Tem estacionamento disponível?',
        'Quais são os horários de funcionamento?',
    ],
    'Dúvida sobre Empresa' => [
        'Há quanto tempo estão no mercado?',
        'Qual a missão da empresa?',
        'Quais serviços adicionais oferecem?',
    ],
    'Dúvida sobre Formas de Pagamento' => [
        'Quais os meios de pagamento aceitos?',
        'Posso parcelar o pagamento?',
        'Tem desconto para pagamento à vista?',
    ],
];

$personals = [
    'Plano Pessoal' => ['João', 'Maria', 'Carlos'],
    'Plano Familiar' => ['Ana', 'Pedro'],
];

$planos = ['Premium', 'Básico'];

if (!isset($_SESSION['chat'])) {
    $_SESSION['chat'] = [];
    $_SESSION['menu'] = 'principal';
    $_SESSION['chat'][] = ['ia', 'Olá! Sou a IA da Academia 💪. Como posso ajudar?'];
}

if (isset($_GET['reset'])) {
    $_SESSION['chat'] = [];
    $_SESSION['menu'] = 'principal';
    $_SESSION['chat'][] = ['ia', 'Olá! Sou a IA da Academia 💪. Como posso ajudar?'];
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

function enviarMensagemIA($mensagem) {
    $_SESSION['chat'][] = ['ia', $mensagem];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['opcao'])) {
        $opcao = $_POST['opcao'];
        $_SESSION['chat'][] = ['user', $opcao];

        switch ($_SESSION['menu']) {
            case 'principal':
                if ($opcao === 'Planos') {
                    $_SESSION['menu'] = 'tipo_plano';
                    enviarMensagemIA("Você deseja plano Pessoal ou Familiar?");
                } elseif ($opcao === 'Dúvidas') {
                    $_SESSION['menu'] = 'duvidas';
                    enviarMensagemIA("Sobre o que você tem dúvida?");
                } else {
                    enviarMensagemIA("Por favor, escolha Planos ou Dúvidas.");
                }
                break;

            case 'tipo_plano':
                if ($opcao === 'Plano Pessoal' || $opcao === 'Plano Familiar') {
                    $_SESSION['tipo_plano'] = $opcao;
                    $_SESSION['menu'] = 'escolha_plano';
                    enviarMensagemIA("Qual plano deseja? Premium ou Básico?");
                } else {
                    enviarMensagemIA("Escolha Plano Pessoal ou Plano Familiar.");
                }
                break;

            case 'escolha_plano':
                if (in_array($opcao, $planos)) {
                    $_SESSION['plano_escolhido'] = $opcao;
                    $_SESSION['menu'] = 'quer_personal';
                    enviarMensagemIA("Você escolheu o plano {$_SESSION['tipo_plano']} {$opcao}. Deseja personal trainer? (Sim / Não)");
                } else {
                    enviarMensagemIA("Escolha entre Premium ou Básico.");
                }
                break;

            case 'quer_personal':
                if ($opcao === 'Sim') {
                    $_SESSION['menu'] = 'principal'; // volta ao menu principal
                    // Envia mensagem com botão que abre o link
                    enviarMensagemIA('<button onclick="window.open(\'http://localhost/academia/prof/prof.php\', \'_blank\')" type="button" style="padding:8px 16px; font-size:16px; cursor:pointer;">Veja os Personais aqui</button>');
                } elseif ($opcao === 'Não') {
                    $_SESSION['menu'] = 'formulario_contrato';
                    enviarMensagemIA("Por favor, preencha o formulário para contratar o plano.");
                } else {
                    enviarMensagemIA("Por favor, responda com Sim ou Não.");
                }
                break;

            case 'escolhe_personal':
                $tipo = $_SESSION['tipo_plano'];
                if (in_array($opcao, $personals[$tipo])) {
                    enviarMensagemIA("Você escolheu o personal trainer: $opcao. Entraremos em contato em breve para finalizar a contratação do seu plano.");
                    $_SESSION['menu'] = 'principal';
                } else {
                    enviarMensagemIA("Por favor, escolha um personal trainer válido.");
                }
                break;

            case 'formulario_contrato':
                if (isset($_POST['nome'], $_POST['telefone']) && $_POST['nome'] !== '' && $_POST['telefone'] !== '') {
                    $nome = strip_tags($_POST['nome']);
                    $telefone = strip_tags($_POST['telefone']);
                    enviarMensagemIA("Obrigado $nome! Entraremos em contato pelo telefone $telefone para concluir seu plano.");
                    $_SESSION['menu'] = 'principal';
                } else {
                    enviarMensagemIA("Por favor, preencha todos os campos.");
                }
                break;

            case 'duvidas':
                if (array_key_exists($opcao, $faq)) {
                    $_SESSION['menu'] = 'duvidas_perguntas';
                    $_SESSION['categoria_duvida'] = $opcao;
                    enviarMensagemIA("Aqui estão as perguntas frequentes sobre \"$opcao\":");
                } elseif ($opcao === 'Outras dúvidas') {
                    $_SESSION['menu'] = 'duvida_personalizada';
                    enviarMensagemIA("Por favor, escreva sua dúvida no campo abaixo e envie.");
                } else {
                    enviarMensagemIA("Por favor, escolha uma opção válida.");
                }
                break;

            case 'duvidas_perguntas':
                $categoria = $_SESSION['categoria_duvida'] ?? null;
                if ($categoria && in_array($opcao, $faq[$categoria])) {
                    enviarMensagemIA("Resposta para \"$opcao\":\nEsta é uma resposta padrão, você pode ajustar aqui para perguntas específicas.");
                } else {
                    enviarMensagemIA("Por favor, escolha uma pergunta válida.");
                }
                break;

            case 'duvida_personalizada':
                if (!empty(trim($_POST['texto_duvida'] ?? ''))) {
                    $duvida = strip_tags($_POST['texto_duvida']);
                    enviarMensagemIA("Sua dúvida foi recebida: \"$duvida\". Em breve responderemos.");
                    $_SESSION['menu'] = 'principal';
                } else {
                    enviarMensagemIA("Por favor, escreva sua dúvida antes de enviar.");
                }
                break;

            default:
                enviarMensagemIA("Opção inválida. Voltando ao menu principal.");
                $_SESSION['menu'] = 'principal';
                break;
        }
    }

    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <title>Chat IA Academia</title>
  <link rel="stylesheet" href="chat.css" />
</head>

<body>
<div class="chat-container" role="main" aria-label="Chat IA Academia">
    <h2>💬 IA da Academia</h2>

    <div class="chat-box" id="chat-box" aria-live="polite" aria-atomic="false">
        <?php foreach ($_SESSION['chat'] as $mensagem): ?>
            <div class="msg <?= $mensagem[0] ?>">
                <strong><?= strtoupper($mensagem[0]) ?>:</strong>
                <?php 
                    if ($mensagem[0] === 'ia') {
                        // Mensagem da IA: permite HTML (botão)
                        echo nl2br($mensagem[1]);
                    } else {
                        // Mensagem do usuário: escapa para segurança
                        echo nl2br(htmlspecialchars($mensagem[1]));
                    }
                ?>
            </div>
        <?php endforeach; ?>
    </div>

    <?php if ($_SESSION['menu'] === 'formulario_contrato'): ?>
        <form method="post" class="formulario" aria-label="Formulário para contratar plano">
            <input type="text" name="nome" placeholder="Seu nome" required autocomplete="name" />
            <input type="tel" name="telefone" placeholder="Telefone" required autocomplete="tel" />
            <button type="submit">Enviar</button>
        </form>

    <?php elseif ($_SESSION['menu'] === 'duvida_personalizada'): ?>
        <form method="post" class="formulario" aria-label="Formulário para enviar dúvida personalizada">
            <textarea name="texto_duvida" rows="4" placeholder="Escreva sua dúvida aqui..." required></textarea>
            <button type="submit">Enviar</button>
        </form>

    <?php else: ?>
        <form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" aria-label="Opções de resposta">
            <div class="buttons">
                <?php
                switch ($_SESSION['menu']) {
                    case 'principal':
                        echo '<button type="submit" name="opcao" value="Planos">Planos</button>';
                        echo '<button type="submit" name="opcao" value="Dúvidas">Dúvidas</button>';
                        break;

                    case 'tipo_plano':
                        echo '<button type="submit" name="opcao" value="Plano Pessoal">Plano Pessoal</button>';
                        echo '<button type="submit" name="opcao" value="Plano Familiar">Plano Familiar</button>';
                        break;

                    case 'escolha_plano':
                        foreach ($planos as $plano) {
                            echo "<button type='submit' name='opcao' value='$plano'>$plano</button>";
                        }
                        break;

                    case 'quer_personal':
                        echo '<button type="submit" name="opcao" value="Sim">Sim</button>';
                        echo '<button type="submit" name="opcao" value="Não">Não</button>';
                        break;

                    case 'escolhe_personal':
                        $tipo = $_SESSION['tipo_plano'];
                        foreach ($personals[$tipo] as $p) {
                            echo "<button type='submit' name='opcao' value='$p'>$p</button>";
                        }
                        break;

                    case 'duvidas':
                        foreach (array_keys($faq) as $categoria) {
                            echo "<button type='submit' name='opcao' value='$categoria'>$categoria</button>";
                        }
                        echo '<button type="submit" name="opcao" value="Outras dúvidas">Outras dúvidas</button>';
                        break;

                    case 'duvidas_perguntas':
                        $categoria = $_SESSION['categoria_duvida'] ?? '';
                        if ($categoria && isset($faq[$categoria])) {
                            foreach ($faq[$categoria] as $pergunta) {
                                echo "<button type='submit' name='opcao' value='$pergunta'>$pergunta</button>";
                            }
                        }
                        break;

                    default:
                        echo '<button type="submit" name="opcao" value="Planos">Planos</button>';
                        echo '<button type="submit" name="opcao" value="Dúvidas">Dúvidas</button>';
                        break;
                }
                ?>
            </div>
        </form>
    <?php endif; ?>

    <div class="reset" role="navigation">
        <a href="?reset=1" aria-label="Reiniciar conversa">🔄 Reiniciar conversa</a>
    </div>
</div>

<script>
    // Auto-scroll para baixo do chat
    const chatBox = document.getElementById('chat-box');
    chatBox.scrollTop = chatBox.scrollHeight;
</script>
</body>
</html>
