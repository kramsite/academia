<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Trainer Virtual</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;800;900&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Orbitron', sans-serif;
            background-color: #0d0d0d;
            color: #fff;
            line-height: 1.6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        
        .chatbot-container {
            width: 100%;
            max-width: 500px;
            background: #1a0026;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 8px 20px rgba(43, 10, 111, 0.3);
            border: 1px solid #4b4fff;
            display: flex;
            flex-direction: column;
        }

        .chatbot-header {
            text-align: center;
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            color: #9b8cff;
            font-weight: 800;
            text-shadow: 0 0 10px #9b8cff;
        }

        .chat-display {
            background: #0d001a;
            border-radius: 10px;
            padding: 1rem;
            height: 350px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-bottom: 1rem;
            border: 1px solid #2e0a6f;
        }

        .message {
            max-width: 80%;
            padding: 0.8rem 1rem;
            border-radius: 12px;
            line-height: 1.5;
        }

        .ai-message {
            background: linear-gradient(135deg, #2e0a6f, #1a0033);
            align-self: flex-start;
            border-bottom-left-radius: 4px;
        }

        .user-message {
            background: linear-gradient(135deg, #4b4fff, #2e0a6f);
            align-self: flex-end;
            border-bottom-right-radius: 4px;
        }

        .input-area {
            display: flex;
            gap: 10px;
        }

        .user-input {
            flex: 1;
            padding: 0.8rem 1rem;
            border-radius: 20px;
            border: none;
            background: #0d001a;
            color: white;
            font-family: 'Orbitron', sans-serif;
            border: 1px solid #4b4fff;
            outline: none;
        }

        .send-button {
            padding: 0.8rem 1.2rem;
            border-radius: 20px;
            border: none;
            background: linear-gradient(135deg, #4b4fff, #2e0a6f);
            color: white;
            cursor: pointer;
            font-family: 'Orbitron', sans-serif;
            font-weight: bold;
            transition: all 0.3s;
            outline: none;
        }

        .send-button:hover {
            background: linear-gradient(135deg, #2e0a6f, #4b4fff);
            box-shadow: 0 0 10px #4b4fff;
        }

        .typing-indicator {
            display: none;
            color: #9b8cff;
            font-style: italic;
            margin-top: 10px;
            text-align: center;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
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