<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Vortex</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h1>Login</h1>
            <?php
            if (isset($_SESSION["erro_login"])) {
                echo "<p style='color:red; text-align:center;'>".$_SESSION["erro_login"]."</p>";
                unset($_SESSION["erro_login"]);
            }
            ?>

            <form action="processa_login.php" method="POST" autocomplete="off">
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="btn">Entrar</button>
            </form>
            <p class="signup">Não tem conta? <a href="../cadastro/cadastro.php">Cadastre-se</a></p>
        </div>
        <div class="led-glow"></div>
    </div>
</body>
</html>
