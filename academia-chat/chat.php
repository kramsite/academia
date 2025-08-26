<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Quiz de Treino - IA Academia</title>
<style>
    body { font-family: Arial; background: #f0f0f0; margin: 0; padding: 20px; }
    .container { max-width: 600px; margin: 0 auto; background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px #ccc; }
    h1, h2 { text-align: center; }
    .quiz-step { display: none; margin-top: 20px; }
    .quiz-step.active { display: block; }
    label { display: block; margin: 10px 0 5px; }
    input[type="radio"] { margin-right: 10px; }
    button { margin-top: 15px; padding: 10px 15px; width: 100%; border: none; background: #4caf50; color: #fff; border-radius: 5px; cursor: pointer; }
    button:hover { background: #45a049; }
    .resultado { margin-top: 20px; padding: 15px; background: #e0e0e0; border-radius: 5px; text-align: center; font-weight: bold; }
</style>
</head>
<body>

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
        <button onclick="nextStep(3)">Ver Resultado</button>
    </div>

    <!-- Resultado -->
    <div class="resultado" id="resultado"></div>
</div>

<script>
let respostas = {};

// Avançar quiz
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

    if (!selecionado) {
        alert("Escolha uma opção antes de continuar!");
        return;
    }

    stepDiv.classList.remove('active');
    const proximoStep = step + 1;
    const nextDiv = document.getElementById('step'+proximoStep);
    if(nextDiv) {
        nextDiv.classList.add('active');
    } else {
        mostrarResultado();
    }
}

// Lógica simples de IA para sugerir aula
function mostrarResultado() {
    const objetivo = respostas.objetivo;
    const frequencia = respostas.frequencia;
    const intensidade = respostas.intensidade;

    let sugestao = "";

    if(objetivo === "emagrecer") {
        sugestao = "Circuito de Cardio + HIIT";
    } else if(objetivo === "musculacao") {
        sugestao = "Treino de Musculação com pesos";
    } else if(objetivo === "flexibilidade") {
        sugestao = "Yoga ou Pilates";
    } else if(objetivo === "cardio") {
        sugestao = "Corrida, Bike ou Elíptico";
    }

    // Ajuste conforme frequência e intensidade
    if(frequencia === "1-2") sugestao += " 2x por semana";
    else if(frequencia === "3-4") sugestao += " 3-4x por semana";
    else sugestao += " 5x ou mais por semana";

    if(intensidade === "leve") sugestao += ", intensidade leve";
    else if(intensidade === "media") sugestao += ", intensidade média";
    else sugestao += ", intensidade alta";

    document.getElementById('resultado').innerHTML = "💪 Sua aula ideal é: <br>" + sugestao;
}
</script>

</body>
</html>
