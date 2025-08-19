<?php
// Caminho do arquivo JSON
$arquivo = $arquivo = '../planos/plano.json';
$planos = [];

// Verifica se o arquivo existe antes de ler
if(file_exists($arquivo)) {
    $json = file_get_contents($arquivo);
    $planos = json_decode($json, true);

    // Se o JSON estiver vazio ou inválido, cria array vazio
    if(!is_array($planos)) {
        $planos = [];
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planos - Vortex Academy</title>
    <link rel="stylesheet" href="planos.css"> <!-- seu CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">Vortex</div>
        <nav>
            <ul>
                <li><a href="index.php">Início</a></li>
                <li><a href="planos.php">Planos</a></li>
                <li><a href="#">Treinos</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero -->
    <section class="hero">
        <div class="hero-content">
            <h1>Planos da Academia</h1>
            <p>Escolha o plano que combina com você!</p>
            <a href="adicionar_plano.php" class="btn">Adicionar Plano</a>
        </div>
    </section>

    <!-- Planos -->
    <main class="features">
        <?php if(!empty($planos)): ?>
            <?php foreach($planos as $plano): ?>
                <div class="feature">
                    <h2><?= htmlspecialchars($plano['nome']) ?></h2>
                    <p><?= htmlspecialchars($plano['descricao']) ?></p>
                    <p><strong>Preço:</strong> R$ <?= number_format($plano['preco'], 2, ',', '.') ?></p>
                    <p><strong>Duração:</strong> <?= (int)$plano['duracao'] ?> mês(es)</p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p style="text-align:center; color:#ccc; margin:20px;">Nenhum plano cadastrado ainda.</p>
        <?php endif; ?>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Vortex Academy. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
