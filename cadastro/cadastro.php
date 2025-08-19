<?php
$arquivo = '../usuarios/usuarios.json';
$mensagem = "";

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? "";
    $email = $_POST['email'] ?? "";
    $senha = $_POST['senha'] ?? "";

    // Cria um array do novo usuário
    $novoUsuario = [
        'nome' => $nome,
        'email' => $email,
        'senha' => password_hash($senha, PASSWORD_DEFAULT) // hash da senha
    ];

    // Verifica se o arquivo existe
    if (file_exists($arquivo)) {
        $usuarios = json_decode(file_get_contents($arquivo), true);
        if (!is_array($usuarios)) $usuarios = [];
    } else {
        $usuarios = [];
    }

    // Adiciona o novo usuário
    $usuarios[] = $novoUsuario;

    // Salva no arquivo JSON
    if (file_put_contents($arquivo, json_encode($usuarios, JSON_PRETTY_PRINT))) {
        $mensagem = "Cadastro realizado com sucesso!";
    } else {
        $mensagem = "Erro ao salvar os dados.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Vortex</title>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h1>Cadastro</h1>
            <?php if($mensagem): ?>
                <p class="mensagem"><?php echo $mensagem; ?></p>
            <?php endif; ?>
            <form action="" method="POST">
                <div class="input-group">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" required>
                </div>
                <button type="submit" class="btn">Cadastrar</button>
            </form>
            <p class="signup">Já tem conta? <a href="login.html">Entre aqui</a></p>
        </div>
        <div class="led-glow"></div>
    </div>
</body>
</html>
