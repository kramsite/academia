<?php
// Quando essa página for chamada após cadastro bem-sucedido
// ela mostra a tela estilizada e redireciona depois de alguns segundos
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Cadastro realizado</title>
  <style>
    body {
      margin: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: linear-gradient(135deg, #0a0a0a, #1a001f);
      font-family: 'Arial', sans-serif;
      color: #fff;
      overflow: hidden;
    }

    .container {
      text-align: center;
      padding: 40px;
      background: rgba(20, 0, 30, 0.8);
      border-radius: 20px;
      box-shadow: 0 0 25px rgba(75, 79, 255, 1);
      animation: fadeIn 1.5s ease-in-out;
    }

    .container h1 {
      font-size: 2.5rem;
      color: #4b4fff;
      text-shadow: 0 0 15px #4b4fff, 0 0 25px #4b4fffff;
      margin-bottom: 20px;
    }

    .container p {
      font-size: 1.2rem;
      margin-bottom: 10px;
    }

    .contador {
      font-size: 1.5rem;
      font-weight: bold;
      color: #fff;
      text-shadow: 0 0 10px #4b4fff;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: scale(0.9); }
      to { opacity: 1; transform: scale(1); }
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Cadastro realizado com sucesso!</h1>
    <p>Bem-vindo à <strong>Vortex Academia</strong>.</p>
    <p>Você será redirecionado em <span class="contador">5</span> segundos...</p>
  </div>

  <script>
    let tempo = 5;
    const contador = document.querySelector(".contador");

    const intervalo = setInterval(() => {
      tempo--;
      contador.textContent = tempo;
      if (tempo <= 0) {
        clearInterval(intervalo);
        window.location.href = "../login/login.php";
      }
    }, 1000);
  </script>
</body>
</html>
