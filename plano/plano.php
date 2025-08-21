<?php
$arquivo = 'plano.json';
$planos= [];

if(file_exists($arquivo)) {
    $json = file_get_contents($arquivo);
    $planos = json_decode($json, true);
    if(!is_array($planos)) $planos = [];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planos - Vortex Academy</title>
    <link rel="stylesheet" href="planos.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo">Vortex</div>
        <nav>
            <ul>
              <li><a href="../index/index.php">Início</a></li>
              <li><a href="planos.php">Planos</a></li>
              <li><a href="treinos.php">Treinos</a></li>
              <li><a href="contato.php">Contato</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <h1>PLANOS DE TREINAMENTO</h1>
        <p>com Personal Trainer</p>
    </section>

    <main class="planos-container">
        <?php foreach($planos as $plano): ?>
            <div class="plano-card">
                <h2><?= htmlspecialchars($plano['nome']) ?></h2>
                <?php if (is_numeric($plano['preco'])): ?>
                <div class="preco">R$ <?= number_format($plano['preco'], 2, ',', '.') ?></div>
             <?php else: ?>
                <div class="preco"><?= htmlspecialchars($plano['preco']) ?></div>
              <?php endif; ?>
                <ul>
                    <?php foreach($plano['descricao'] as $item): ?>
                        <li><?= htmlspecialchars($item) ?></li>
                    <?php endforeach; ?>
                </ul>
                <a href="#" class="btn">Escolher Plano</a>
            </div>
        <?php endforeach; ?>
    </main>

    <footer>
        <p>© 2025 Vortex Academy. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
