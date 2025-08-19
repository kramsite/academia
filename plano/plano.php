<?php
// Ler o JSON
$arquivo = 'plano.json';
$planos = json_decode(file_get_contents($arquivo), true);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planos - Vortex Academy</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
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

    <section class="hero">
        <div class="hero-content">
            <h1>Planos da Academia</h1>
            <p>Escolha o plano que combina com você!</p>
            <a href="adicionar_plano.php" class="btn">Adicionar Plano</a>
        </div>
    </section>

    <section class="features">
        <?php if (!empty($planos)): ?>
            <?php foreach($planos as $index => $plano): ?>
                <div class="feature">
                    <h2><?= $plano['nome'] ?></h2>
                    <p><?= $plano['descricao'] ?></p>
                    <p><strong>Preço:</strong> R$ <?= $plano['preco'] ?></p>
                    <p><strong>Duração:</strong> <?= $plano['duracao'] ?> mês(es)</p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Nenhum plano cadastrado ainda.</p>
        <?php endif; ?>
    </section>

    <footer>
        <p>&copy; 2025 Vortex Academy. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
