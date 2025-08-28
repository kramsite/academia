<?php
$arquivo = '../json/plano.json';
$planos = [];

if(file_exists($arquivo)) {
    $json = file_get_contents($arquivo);
    $planos = json_decode($json, true);
    if(!is_array($planos)) $planos = [];
}

// Separar planos
$planosCom = array_filter($planos, fn($p) => $p['tipo'] === 'com');
$planosSem = array_filter($planos, fn($p) => $p['tipo'] === 'sem');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia  - Modalidades</title>
    <link rel="stylesheet" href="planos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
       
    </style>
</head>
<body>
    <header>
        <div class="logo">Vortex</div>
        <nav>
            <ul>
                <li><a href="../inicio/inicio.php">Home <i class="fas fa-dumbbell"></i> </a></li>
                <li><a href="../modalidade/modali.php">Modalidades <i class="fas fa-dumbbell"></i> </a></li>
                <li><a href="../prof/prof.php">Professores <i class="fas fa-chalkboard-teacher"></i> </a></li>
                <li><a href="../quiz/quiz.php">Quiz <i class="fas fa-question"></i></a></li>

            </ul>
        </nav>
    </header>

<section class="hero">
    <h1>PLANOS DE TREINAMENTO</h1>
</section>

<div class="tabs">
    <div class="tab active" data-target="sem">Sem Personal</div>
    <div class="tab" data-target="com">Com Personal</div>
</div>

<main class="planos-container active" id="sem">
    <?php foreach($planosSem as $plano): ?>
        <div class="plano-card">
            <h2><?= htmlspecialchars($plano['nome']) ?></h2>
            <div class="preco"><?= is_numeric($plano['preco']) ? "R$ ".number_format($plano['preco'],2,',','.') : htmlspecialchars($plano['preco']) ?></div>
            <ul>
                <?php foreach($plano['descricao'] as $item): ?>
                    <li><?= htmlspecialchars($item) ?></li>
                <?php endforeach; ?>
            </ul>
            <button class="btn ver-plano-btn" data-plano="<?= htmlspecialchars($plano['nome']) ?>">Ver Plano</button>
        </div>
    <?php endforeach; ?>
</main>

<main class="planos-container" id="com">
    <?php foreach($planosCom as $plano): ?>
        <div class="plano-card">
            <h2><?= htmlspecialchars($plano['nome']) ?></h2>
            <div class="preco"><?= is_numeric($plano['preco']) ? "R$ ".number_format($plano['preco'],2,',','.') : htmlspecialchars($plano['preco']) ?></div>
            <ul>
                <?php foreach($plano['descricao'] as $item): ?>
                    <li><?= htmlspecialchars($item) ?></li>
                <?php endforeach; ?>
            </ul>
            <button class="btn ver-plano-btn" data-plano="<?= htmlspecialchars($plano['nome']) ?>">Ver Plano</button>
        </div>
    <?php endforeach; ?>
</main>

<!-- Modal -->
<div id="planoModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2 id="modalTitulo"></h2>
        <p id="modalPreco"></p>
        <ul id="modalDescricao"></ul>

        <form id="modalForm" action="inscrever.php" method="post">
            <input type="hidden" name="plano">
            <h3>Inscreva-se no Plano</h3>
            <input type="text" name="nome" placeholder="Nome completo" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="cpf" placeholder="CPF" required>
            <input type="text" name="rg" placeholder="RG" required>
            
            <label>Forma de pagamento:</label>
            <select name="pagamento" id="pagamento" required>
                <option value="">Selecione</option>
                <option value="cartao">Cartão</option>
                <option value="boleto">Boleto</option>
                <option value="pix">PIX</option>
            </select>

            <div id="cartaoInfo" style="display:none;">
                <input type="text" name="numCartao" placeholder="Número do Cartão">
                <input type="text" name="validade" placeholder="Validade MM/AA">
                <input type="text" name="cvv" placeholder="CVV">
            </div>

            <button type="submit">Inscrever-se</button>
        </form>
    </div>
</div>

<footer>
    <p>© 2025 Vortex Academy. Todos os direitos reservados.</p>
</footer>

<script>
const planos = <?php echo json_encode($planos); ?>;
const modal = document.getElementById("planoModal");
const modalTitulo = document.getElementById("modalTitulo");
const modalPreco = document.getElementById("modalPreco");
const modalDescricao = document.getElementById("modalDescricao");
const modalForm = document.getElementById("modalForm");
const closeBtn = document.querySelector(".close");

document.querySelectorAll(".ver-plano-btn").forEach(btn => {
    btn.addEventListener("click", () => {
        const nomePlano = btn.dataset.plano;
        const plano = planos.find(p => p.nome === nomePlano);

        modalTitulo.textContent = plano.nome;
        modalPreco.textContent = isNaN(plano.preco) ? plano.preco : `R$ ${plano.preco.toLocaleString('pt-BR',{minimumFractionDigits:2})}`;

        modalDescricao.innerHTML = "";
        plano.descricao.forEach(item => {
            const li = document.createElement("li");
            li.textContent = item;
            modalDescricao.appendChild(li);
        });

        modalForm.plano.value = plano.nome;

        modal.style.display = "flex";
    });
});

closeBtn.onclick = () => modal.style.display = "none";
window.onclick = e => { if(e.target === modal) modal.style.display = "none"; };

// Mostrar campos do cartão
document.getElementById("pagamento").addEventListener("change", function(){
    document.getElementById("cartaoInfo").style.display = this.value === "cartao" ? "block" : "none";
});

// Tabs
const tabs = document.querySelectorAll(".tab");
const containers = document.querySelectorAll(".planos-container");
tabs.forEach(tab => {
    tab.addEventListener("click", () => {
        tabs.forEach(t => t.classList.remove("active"));
        tab.classList.add("active");
        containers.forEach(c => c.classList.remove("active"));
        document.getElementById(tab.dataset.target).classList.add("active");
    });
});
</script>
</body>
</html>
