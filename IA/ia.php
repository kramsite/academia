<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia  - Modalidades</title>
    <link rel="stylesheet" href="ia.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
       
    </style>
</head>
<body>
    <header>
        <div class="logo">Vortex</div>
        <nav>
            <ul>
                <li><a href="../inicio/inicio.php">Home <i class="fas fa-home"></i> </a></li>
                <li><a href="../modalidade/modali.php">Modalidades <i class="fas fa-dumbbell"></i> </a></li>
                <li><a href="../plano/plano.php">Planos <i class="fas fa-tag"></i> </a></li>
                <li><a href="../prof/prof.php">Professores <i class="fas fa-chalkboard-teacher"></i> </a></li>
                <li><a href="../quiz/quiz.php">Quiz <i class="fas fa-question"></i></a></li>
            </ul>
        </nav>
    </header>
    <div class="chatbot-wrapper">
    <div class="chatbot-container">
        <div class="chatbot-header">FitTech Personal Trainer</div>
        
        <div class="chat-display" id="chat-display">
            <div class="message ai-message">Olá! Sou seu Personal Trainer Virtual. Estou aqui para ajudar com seus treinos, nutrição e objetivos de fitness! Como posso te motivar hoje?</div>
        </div>

        <div class="input-area">
            <input type="text" class="user-input" id="user-input" placeholder="Pergunte sobre treinos, dieta, motivação...">
            <button class="send-button" id="send-button">Enviar</button>
        </div>
        
        <div class="typing-indicator" id="typing-indicator">FitTech Personal Trainer está digitando...</div>
    </div>
</div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const chatDisplay = document.getElementById('chat-display');
            const userInput = document.getElementById('user-input');
            const sendButton = document.getElementById('send-button');
            const typingIndicator = document.getElementById('typing-indicator');

            // Respostas pré-definidas focadas em academia
            const responses = {
                "olá": "Olá! Pronto para o treino de hoje? Como posso te ajudar a atingir seus objetivos?",
                "oi": "E aí, guerreiro(a)! O que podemos fazer para otimizar seu treino?",
                "tudo bem?": "Estou motivado e pronto para te ajudar! E você, como está seu foco?",
                "qual seu nome?": "Eu sou o FitTech Personal Trainer, seu parceiro virtual para um corpo mais forte!",
                "quem é você?": "Sou seu Personal Trainer Virtual! Minha missão é te guiar em seus treinos, nutrição e te manter motivado.",
                "obrigado": "De nada! O importante é você continuar focado(a)! Se precisar de mais dicas, é só chamar.",
                "tchau": "Até a próxima sessão! Não se esqueça de beber água e descansar bem.",
                "ajuda": "Claro! Posso te dar dicas de treino, nutrição, rotinas de exercícios ou motivação. O que você precisa?",
                "treino": "Qual o seu objetivo? Ganho de massa, emagrecimento, força? Me diga para eu te dar a melhor dica de treino!",
                "dieta": "Para uma dieta eficaz, o ideal é focar em alimentos ricos em proteínas, carboidratos complexos e gorduras saudáveis. Qual sua maior dificuldade na alimentação?",
                "nutrição": "A nutrição é a chave! Quer dicas de pré-treino, pós-treino ou planos alimentares gerais?",
                "motivacao": "Lembre-se do seu objetivo! Cada gota de suor é um passo em direção ao seu melhor. Acredite em você e continue firme!",
                "exercicios para braços": "Para braços fortes, experimente bíceps com halteres, tríceps testa e flexões. Não esqueça da execução correta!",
                "exercicios para pernas": "Agachamento, leg press, e levantamento terra são excelentes para pernas e glúteos. Priorize a forma para evitar lesões!",
                "como ganhar massa muscular": "Para ganhar massa, foque em treino de força com sobrecarga progressiva, alta ingestão de proteínas e um bom descanso. Consistência é tudo!",
                "como perder peso": "Para perda de peso, combine déficit calórico com exercícios cardiovasculares e treino de força. Mantenha a disciplina e os resultados virão!",
                "pre-treino": "Um pré-treino ideal inclui carboidratos complexos (como banana ou aveia) para energia e um pouco de proteína. Consuma cerca de 1 hora antes do treino.",
                "pos-treino": "No pós-treino, é crucial repor as energias com proteínas (frango, ovos) e carboidratos simples (batata doce, arroz) para recuperação muscular.",
                "alongamento": "Sempre faça alongamento antes e depois do treino para prevenir lesões e melhorar a flexibilidade! Foco nos principais grupos musculares trabalhados.",
                "aquecimento": "O aquecimento é essencial! Comece com 5-10 minutos de cardio leve e depois alguns alongamentos dinâmicos para preparar o corpo.",
                "suplementos": "Suplementos como whey protein, creatina e BCAA podem ser úteis, mas sempre consulte um nutricionista para saber o que é melhor para você!",
                "descanso": "O descanso é tão importante quanto o treino! Seus músculos crescem e se recuperam enquanto você dorme. Priorize 7-9 horas de sono de qualidade.",
                "água": "Hidratação é fundamental! Beba bastante água antes, durante e depois do treino para manter seu corpo funcionando no máximo.",
                "criar imagem": "Como um personal trainer virtual, minha especialidade é texto e dicas de fitness, não consigo criar imagens. Mas posso descrever um treino incrível para você! 💪",
                // Adicione mais perguntas e respostas focadas em academia aqui!
            };

            function addMessage(message, isUser) {
                const messageDiv = document.createElement('div');
                messageDiv.classList.add('message');
                messageDiv.classList.add(isUser ? 'user-message' : 'ai-message');
                messageDiv.textContent = message;
                chatDisplay.appendChild(messageDiv);
                chatDisplay.scrollTop = chatDisplay.scrollHeight;
            }

            function getAIResponse(userMessage) {
                const lowerCaseMessage = userMessage.toLowerCase().trim();

                // Procura por uma resposta exata primeiro
                if (responses[lowerCaseMessage]) {
                    return responses[lowerCaseMessage];
                }

                // Se não houver resposta exata, procura por palavras-chave
                for (const key in responses) {
                    if (lowerCaseMessage.includes(key)) {
                        return responses[key];
                    }
                }
                
                return "Hmm, essa é uma ótima pergunta para um atleta como você! Não tenho essa informação pronta, mas posso te dar outras dicas sobre treinos ou nutrição.";
            }

            function sendMessage() {
                const userText = userInput.value.trim();
                if (userText === "") return;

                addMessage(userText, true);
                userInput.value = "";

                typingIndicator.style.display = 'block';
                chatDisplay.scrollTop = chatDisplay.scrollHeight;

                setTimeout(() => {
                    const aiResponse = getAIResponse(userText);
                    addMessage(aiResponse, false);
                    typingIndicator.style.display = 'none';
                }, 1000); // Simula um tempo de resposta de 1 segundo
            }

            sendButton.addEventListener('click', sendMessage);

            userInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    sendMessage();
                }
            });
        });
    </script>
</body>
</html>