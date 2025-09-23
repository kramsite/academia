<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia Tech - IA Personalizada</title>
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
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        /* Header */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background: linear-gradient(90deg, #2e0a6f, #1a0033);
            box-shadow: 0 0 15px #2e0a6f;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .logo {
            font-size: 2rem;
            letter-spacing: 2px;
            color: #9b8cff;
            text-shadow: 0 0 10px #9b8cff;
            font-weight: 800;
        }
        
        .logo span {
            color: #4b4fff;
            font-weight: 900;
            text-shadow: 0 0 15px #4b4fff;
        }
        
        nav ul {
            display: flex;
            list-style: none;
        }
        
        nav ul li {
            margin-left: 30px;
        }
        
        nav ul li a {
            text-decoration: none;
            color: #ccc;
            font-weight: bold;
            transition: 0.3s;
            position: relative;
            padding: 0.6rem 1rem;
            border-radius: 6px;
            font-size: 1.05rem;
        }
        
        nav ul li a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: #9b8cff;
            bottom: -4px;
            left: 0;
            transition: width 0.3s;
        }
        
        nav ul li a:hover::after {
            width: 100%;
        }
        
        nav ul li a:hover {
            color: #9b8cff;
            transform: translateY(-2px);
        }
        
        /* Banner */
        .banner {
            background: linear-gradient(rgba(13, 0, 26, 0.85), rgba(13, 0, 26, 0.9)), url('https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 6rem 1.5rem;
            margin-bottom: 3rem;
            border-radius: 0 0 20px 20px;
            position: relative;
            overflow: hidden;
        }
        
        .banner::before {
            content: '';
            position: absolute;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            box-shadow: 0 0 60px #4b4fff, 0 0 120px #4b4fff;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1;
            animation: pulse 3s infinite;
        }
        
        @keyframes pulse {
            0%, 100% { transform: translate(-50%, -50%) scale(1); opacity: 0.7; }
            50% { transform: translate(-50%, -50%) scale(1.2); opacity: 1; }
        }
        
        .banner h2 {
            font-size: 2.8rem;
            margin-bottom: 1.2rem;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.6);
            letter-spacing: 0.5px;
            color: #9b8cff;
            text-shadow: 0 0 15px #9b8cff, 0 0 30px #4b4fff;
            position: relative;
            z-index: 2;
        }
        
        .banner p {
            font-size: 1.3rem;
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.8;
            color: #aaa;
            position: relative;
            z-index: 2;
        }
        
        /* IA Section */
        .ia-section {
            padding: 4rem 0;
        }
        
        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #9b8cff;
            position: relative;
            padding-bottom: 1rem;
            font-weight: 800;
            text-shadow: 0 0 10px #9b8cff;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 150px;
            height: 5px;
            background: linear-gradient(90deg, #4b4fff, #9b8cff);
            border-radius: 3px;
            box-shadow: 0 0 10px #4b4fff;
        }
        
        .ia-container {
            display: flex;
            flex-direction: column;
            gap: 2rem;
            background: #1a0026;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 8px 20px rgba(43, 10, 111, 0.3);
            border: 1px solid #4b4fff;
        }
        
        .ia-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }
        
        .ia-avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: linear-gradient(135deg, #4b4fff, #2e0a6f);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            box-shadow: 0 0 20px #4b4fff;
        }
        
        .ia-info h3 {
            font-size: 1.8rem;
            color: #9b8cff;
            margin-bottom: 0.5rem;
        }
        
        .ia-info p {
            color: #ccc;
        }
        
        .chat-container {
            background: #0d001a;
            border-radius: 15px;
            padding: 1.5rem;
            height: 400px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }
        
        .message {
            max-width: 80%;
            padding: 1rem;
            border-radius: 15px;
            line-height: 1.6;
        }
        
        .ai-message {
            background: linear-gradient(135deg, #2e0a6f, #1a0033);
            align-self: flex-start;
            border-bottom-left-radius: 5px;
        }
        
        .user-message {
            background: linear-gradient(135deg, #4b4fff, #2e0a6f);
            align-self: flex-end;
            border-bottom-right-radius: 5px;
        }
        
        .input-container {
            display: flex;
            gap: 1rem;
        }
        
        .message-input {
            flex: 1;
            padding: 1rem;
            border-radius: 30px;
            border: none;
            background: #0d001a;
            color: white;
            font-family: 'Orbitron', sans-serif;
            border: 1px solid #4b4fff;
        }
        
        .send-btn {
            padding: 1rem 1.5rem;
            border-radius: 30px;
            border: none;
            background: linear-gradient(135deg, #4b4fff, #2e0a6f);
            color: white;
            cursor: pointer;
            font-family: 'Orbitron', sans-serif;
            font-weight: bold;
            transition: all 0.3s;
        }
        
        .send-btn:hover {
            background: linear-gradient(135deg, #2e0a6f, #4b4fff);
            box-shadow: 0 0 15px #4b4fff;
        }
        
        .typing-indicator {
            display: none;
            color: #9b8cff;
            font-style: italic;
            margin-top: 10px;
        }
        
        .api-key-container {
            margin-top: 1rem;
            padding: 1rem;
            background: #0d001a;
            border-radius: 10px;
            border: 1px solid #4b4fff;
        }
        
        .api-key-input {
            width: 100%;
            padding: 0.8rem;
            border-radius: 5px;
            border: none;
            background: #1a0026;
            color: white;
            font-family: 'Orbitron', sans-serif;
            margin-bottom: 0.5rem;
            border: 1px solid #2e0a6f;
        }
        
        .api-key-info {
            font-size: 0.8rem;
            color: #9b8cff;
        }
        
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 4rem;
        }
        
        .feature-card {
            background: #1a0026;
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 8px 20px rgba(43, 10, 111, 0.3);
            border: 1px solid #4b4fff;
            transition: all 0.3s;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 18px 35px rgba(75, 79, 255, 0.4), 0 0 30px #4b4fff;
        }
        
        .feature-icon {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            color: #4b4fff;
        }
        
        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #9b8cff;
        }
        
        .feature-card p {
            color: #ccc;
            line-height: 1.6;
        }
        
        /* Footer */
        footer {
            background-color: #0d001a;
            color: #666;
            text-align: center;
            padding: 2.5rem 0;
            border-top: 1px solid #2e0a6f;
            margin-top: 4rem;
        }
        
        /* Responsividade */
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                text-align: center;
                gap: 1rem;
                padding: 15px;
            }
            
            nav ul {
                margin-top: 1rem;
                justify-content: center;
                flex-wrap: wrap;
                gap: 0.5rem;
            }
            
            nav ul li {
                margin: 0;
            }
            
            .banner h2 {
                font-size: 2.2rem;
            }
            
            .banner p {
                font-size: 1.1rem;
            }
            
            .section-title {
                font-size: 2.2rem;
            }
            
            .ia-header {
                flex-direction: column;
                text-align: center;
            }
            
            .message {
                max-width: 90%;
            }
        }
        
        @media (max-width: 576px) {
            .banner {
                padding: 4rem 1rem;
            }
            
            .banner::before {
                width: 150px;
                height: 150px;
            }
            
            .features {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">FIT<span>TECH</span></div>
        <nav>
            <ul>
                <li><a href="#">Início</a></li>
                <li><a href="#">Planos</a></li>
                <li><a href="#">Treinos</a></li>
                <li><a href="#">Nutrição</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
    </header>

    <div class="banner">
        <h2>REVOLUCIONE SEUS TREINOS COM IA</h2>
        <p>Conheça nosso personal trainer virtual que cria planos de exercícios personalizados baseados em seus objetivos e condicionamento físico.</p>
    </div>

    <section class="ia-section">
        <div class="container">
            <h2 class="section-title">PERSONAL TRAINER VIRTUAL</h2>
            <div class="ia-container">
                <div class="ia-header">
                    <div class="ia-avatar">AI</div>
                    <div class="ia-info">
                        <h3>FitTech Assistant</h3>
                        <p>Especialista em treinos e nutrição</p>
                    </div>
                </div>

                <div class="chat-container" id="chat-container">
                    <div class="message ai-message">
                        Olá! Sou seu personal trainer virtual. Posso ajudar com planos de treino, dicas de nutrição e responder suas perguntas sobre fitness. Como posso ajudar você hoje?
                    </div>
                </div>

                <div class="input-container">
                    <input type="text" class="message-input" id="user-input" placeholder="Digite sua mensagem aqui...">
                    <button class="send-btn" id="send-btn">Enviar</button>
                </div>
                
                <div class="typing-indicator" id="typing-indicator">
                    FitTech Assistant está digitando...
                </div>
                
                <div class="api-key-container">
                    <p class="api-key-info">Para usar o assistente de IA, você precisa de uma chave API da OpenAI. Insira abaixo:</p>
                    <input type="password" class="api-key-input" id="api-key-input" placeholder="Cole sua chave API da OpenAI aqui">
                    <p class="api-key-info">Sua chave é armazenada apenas localmente no seu navegador e nunca é enviada para nossos servidores.</p>
                </div>
            </div>

            <div class="features">
                <div class="feature-card">
                    <div class="feature-icon">💪</div>
                    <h3>Planos Personalizados</h3>
                    <p>Receba planos de treino adaptados ao seu nível de condicionamento e objetivos específicos.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">🍎</div>
                    <h3>Orientação Nutricional</h3>
                    <p>Obtenha conselhos alimentares para maximizar seus resultados e melhorar sua saúde.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">📊</div>
                    <h3>Acompanhamento Inteligente</h3>
                    <p>Monitore seu progresso e receba ajustes automáticos em seus treinos conforme evolui.</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2023 FitTech - Todos os direitos reservados</p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const chatContainer = document.getElementById('chat-container');
            const userInput = document.getElementById('user-input');
            const sendBtn = document.getElementById('send-btn');
            const typingIndicator = document.getElementById('typing-indicator');
            const apiKeyInput = document.getElementById('api-key-input');
            
            // Carregar a chave API salva localmente, se existir
            const savedApiKey = localStorage.getItem('openai-api-key');
            if (savedApiKey) {
                apiKeyInput.value = savedApiKey;
            }
            
            // Salvar a chave API quando o usuário digitar
            apiKeyInput.addEventListener('change', function() {
                localStorage.setItem('openai-api-key', apiKeyInput.value);
            });
            
            // Função para adicionar mensagem ao chat
            function addMessage(message, isUser) {
                const messageDiv = document.createElement('div');
                messageDiv.classList.add('message');
                messageDiv.classList.add(isUser ? 'user-message' : 'ai-message');
                messageDiv.textContent = message;
                chatContainer.appendChild(messageDiv);
                chatContainer.scrollTop = chatContainer.scrollHeight;
            }
            
            // Função para mostrar/ocultar o indicador de digitação
            function showTypingIndicator(show) {
                typingIndicator.style.display = show ? 'block' : 'none';
                if (show) {
                    chatContainer.scrollTop = chatContainer.scrollHeight;
                }
            }
            
            // Função para enviar mensagem para a API da OpenAI
            async function sendMessageToAI(message) {
                const apiKey = apiKeyInput.value.trim();
                
                if (!apiKey) {
                    addMessage("Por favor, insira uma chave API válida da OpenAI para usar o assistente.", false);
                    return;
                }
                
                showTypingIndicator(true);
                
                try {
                    // Montar o histórico da conversa
                    const conversationHistory = [];
                    const messages = chatContainer.querySelectorAll('.message');
                    
                    messages.forEach(msg => {
                        const isUser = msg.classList.contains('user-message');
                        conversationHistory.push({
                            role: isUser ? "user" : "assistant",
                            content: msg.textContent
                        });
                    });
                    
                    // Adicionar a nova mensagem do usuário
                    conversationHistory.push({
                        role: "user",
                        content: message
                    });
                    
                    // Fazer a requisição para a API da OpenAI
                    const response = await fetch('https://api.openai.com/v1/chat/completions', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Authorization': `Bearer ${apiKey}`
                        },
                        body: JSON.stringify({
                            model: "gpt-3.5-turbo",
                            messages: [
                                {
                                    role: "system",
                                    content: "Você é um personal trainer especializado em fitness, nutrição e exercícios físicos. Responda de forma motivacional, técnica mas acessível, e sempre focada em ajudar o usuário a alcançar seus objetivos de saúde e condicionamento físico. Forneça informações precisas e seguras sobre treinamento e nutrição."
                                },
                                ...conversationHistory
                            ],
                            max_tokens: 500,
                            temperature: 0.7
                        })
                    });
                    
                    const data = await response.json();
                    
                    if (data.error) {
                        throw new Error(data.error.message);
                    }
                    
                    const aiResponse = data.choices[0].message.content;
                    addMessage(aiResponse, false);
                    
                } catch (error) {
                    console.error('Erro ao chamar a API da OpenAI:', error);
                    addMessage(`Desculpe, ocorreu um erro: ${error.message}`, false);
                } finally {
                    showTypingIndicator(false);
                }
            }
            
            // Event listener para o botão enviar
            sendBtn.addEventListener('click', function() {
                const message = userInput.value.trim();
                if (message) {
                    addMessage(message, true);
                    userInput.value = '';
                    sendMessageToAI(message);
                }
            });
            
            // Event listener para pressionar Enter no campo de entrada
            userInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    sendBtn.click();
                }
            });
        });
    </script>
</body>
</html>