<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Quiz de Treino - IA Academia</title>
<link rel="stylesheet" href="quiz.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>

<header>
    <div class="logo">Vortex</div>
    <nav>
        <ul>
            <li><a href="../inicio/inicio.php">Home <i class="fas fa-dumbbell"></i> </a></li>
            <li><a href="../IA/ia.php">IA <i class="fas fa-robot"></i> </a></li>
            <li><a href="../modalidade/modali.php">Modalidades <i class="fas fa-dumbbell"></i> </a></li>
            <li><a href="../plano/plano.php">Planos <i class="fas fa-tag"></i> </a></li>
            <li><a href="../prof/prof.php">Professores <i class="fas fa-chalkboard-teacher"></i> </a></li>
        </ul>
    </nav>
</header>

<div class="container">
    <h1>Quiz de Treino</h1>
    <p>Responda algumas perguntas e a IA vai indicar a melhor aula para você!</p>

    <!-- Pergunta 1 -->
    <div class="quiz-step active" id="step1">
        <h2>1. Qual seu objetivo principal?</h2>
        <label><input type="radio" name="objetivo" value="emagrecer"> Emagrecer</label>
        <label><input type="radio" name="objetivo" value="musculacao"> Ganhar Massa Muscular</label>
        <label><input type="radio" name="objetivo" value="flexibilidade"> Melhorar Flexibilidade</label>
        <label><input type="radio" name="objetivo" value="cardio"> Melhorar Condicionamento / Cardio</label>
        <button onclick="nextStep(1)">Próximo</button>
    </div>

    <!-- Pergunta 2 -->
    <div class="quiz-step" id="step2">
        <h2>2. Quantas vezes por semana você pretende treinar?</h2>
        <label><input type="radio" name="frequencia" value="1-2"> 1-2 vezes</label>
        <label><input type="radio" name="frequencia" value="3-4"> 3-4 vezes</label>
        <label><input type="radio" name="frequencia" value="5+"> 5 ou mais vezes</label>
        <button onclick="nextStep(2)">Próximo</button>
    </div>

    <!-- Pergunta 3 -->
    <div class="quiz-step" id="step3">
        <h2>3. Qual intensidade você prefere?</h2>
        <label><input type="radio" name="intensidade" value="leve"> Leve / Moderada</label>
        <label><input type="radio" name="intensidade" value="media"> Média</label>
        <label><input type="radio" name="intensidade" value="alta"> Alta</label>
        <button onclick="nextStep(3)">Próximo</button>
    </div>

    <!-- Pergunta 4 -->
    <div class="quiz-step" id="step4">
        <h2>4. Prefere treinar sozinho ou em grupo?</h2>
        <label><input type="radio" name="grupo" value="grupo"> Grupo</label>
        <label><input type="radio" name="grupo" value="individual"> Individual</label>
        <button onclick="nextStep(4)">Próximo</button>
    </div>

    <!-- Pergunta 5 -->
    <div class="quiz-step" id="step5">
        <h2>5. Que tipo de treino você gosta?</h2>
        <label><input type="radio" name="tipo" value="dinamico"> Dinâmico / Cardio</label>
        <label><input type="radio" name="tipo" value="relaxante"> Relaxante / Equilíbrio</label>
        <label><input type="radio" name="tipo" value="forca"> Força / Musculação</label>
        <button onclick="nextStep(5)">Próximo</button>
    </div>

    <!-- Pergunta 6 -->
    <div class="quiz-step" id="step6">
        <h2>6. Você prefere dança ou luta?</h2>
        <label><input type="radio" name="estilo" value="danca"> Dança / Ritmo</label>
        <label><input type="radio" name="estilo" value="luta"> Boxe / Combate</label>
        <label><input type="radio" name="estilo" value="nenhum"> Nenhum / Outro</label>
        <button onclick="nextStep(6)">Ver Resultado</button>
    </div>

    <!-- Resultado -->
    <div class="resultado" id="resultado"></div>
</div>

<script>
let respostas = {};

function nextStep(step) {
    const stepDiv = document.getElementById('step'+step);
    const inputs = stepDiv.querySelectorAll('input[type="radio"]');
    let selecionado = false;
    inputs.forEach(input => {
        if (input.checked) {
            respostas[input.name] = input.value;
            selecionado = true;
        }
    });
    if (!selecionado) { alert("Escolha uma opção antes de continuar!"); return; }

    stepDiv.classList.remove('active');
    const proximoStep = step + 1;
    const nextDiv = document.getElementById('step'+proximoStep);
    if(nextDiv) nextDiv.classList.add('active');
    else mostrarResultado();
}

function mostrarResultado() {
    const {objetivo, frequencia, intensidade, grupo, tipo, estilo} = respostas;
    let sugestao = "";

    // Lógica de decisão de modalidade
    if(objetivo === "musculacao" || tipo === "forca") sugestao = "Musculação";
    else if(objetivo === "flexibilidade" || tipo === "relaxante") sugestao = "Yoga ou Pilates";
    else if(objetivo === "emagrecer" && tipo === "dinamico") sugestao = estilo === "danca" ? "Bump ou Dança" : "Spinning ou Boxe";
    else if(objetivo === "cardio") sugestao = estilo === "luta" ? "Boxe" : "Spinning";
    else sugestao = "Body Balance";

    // Ajuste frequência
    if(frequencia === "1-2") sugestao += " 2x por semana";
    else if(frequencia === "3-4") sugestao += " 3-4x por semana";
    else sugestao += " 5x ou mais por semana";

    // Intensidade
    if(intensidade === "leve") sugestao += ", intensidade leve";
    else if(intensidade === "media") sugestao += ", intensidade média";
    else sugestao += ", intensidade alta";

    
    // Mostra a div de resultado
    const resultadoDiv = document.getElementById("resultado");
    resultadoDiv.style.display = "block"; // agora aparece
    resultadoDiv.innerHTML = "💪 Sua aula ideal é: <br>" + sugestao;
}
</script>
</body>
</html>
