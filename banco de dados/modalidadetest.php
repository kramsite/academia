<?php
$arquivo = '../txt/usuarios.txt';
$mensagem = "";
$sucesso = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? "";
    $email = $_POST['email'] ?? "";
    $senha = $_POST['senha'] ?? "";
    $confirmar_senha = $_POST['confirmar_senha'] ?? "";
    $sexo = $_POST['sexo'] ?? "";
    $cpf = $_POST['cpf'] ?? "";
    $cep = $_POST['cep'] ?? "";
    $endereco = $_POST['endereco'] ?? "";
    $celular = $_POST['celular'] ?? "";
    $nascimento = $_POST['nascimento'] ?? "";
    $modalidade = $_POST['modalidade'] ?? "";

    if ($senha !== $confirmar_senha) {
        $mensagem = "As senhas não coincidem!";
    } else {
        // Ler todos os usuários do TXT
        $usuarios = [];
        if (file_exists($arquivo)) {
            $linhas = file($arquivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach ($linhas as $linha) {
                $usuario = explode("|", $linha);
                $usuarios[] = [
                    'id' => $usuario[0],
                    'email' => $usuario[2]
                ];
            }
        }

        // Verificar email duplicado
        $emails = array_column($usuarios, 'email');
        if (in_array($email, $emails)) {
            $mensagem = "Este email já está cadastrado!";
        } else {
            // Gerar próximo ID
            $id = count($usuarios) > 0 ? (int)$usuarios[count($usuarios)-1]['id'] + 1 : 1;

            // Criptografar senha
            $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

            // Criar linha TXT
            $linha = "$id|$nome|$email|$senha_hash|$sexo|$cpf|$cep|$endereco|$celular|$nascimento|$modalidade\n";

            if (file_put_contents($arquivo, $linha, FILE_APPEND | LOCK_EX)) {
                $sucesso = true;
                header("Location: sucesso.php");
                exit;
            } else {
                $mensagem = "Erro ao salvar os dados.";
            }
        }
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
        <form id="cadastroForm" action="" method="POST" novalidate autocomplete="off">
            <div class="form-columns">
                <!-- Coluna esquerda -->
                <div class="column">
                    <div class="input-group">
                        <label for="nome">Nome completo</label>
                        <input type="text" id="nome" name="nome" required>
                    </div>
                    <div class="input-group">
                        <label for="nascimento">Data de nascimento</label>
                        <input type="date" id="nascimento" name="nascimento" required>
                    </div>
                    <div class="input-group">
                        <label for="sexo">Sexo</label>
                        <select id="sexo" name="sexo" required>
                            <option value="">Selecione</option>
                            <option value="masculino">Masculino</option>
                            <option value="feminino">Feminino</option>
                            <option value="outro">Outro</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="cpf">CPF</label>
                        <input type="text" id="cpf" name="cpf" required>
                    </div>
                </div>
                <!-- Coluna direita -->
                <div class="column">
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="input-group">
                        <label for="celular">Número de celular</label>
                        <input type="text" id="celular" name="celular" required>
                    </div>
                    <div class="input-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" id="endereco" name="endereco" required>
                    </div>
                    <div class="input-group">
                        <label for="cep">CEP</label>
                        <input type="text" id="cep" name="cep" required>
                    </div>
                    <div class="input-group">
                        <label for="modalidade">Modalidade</label>
                        <select id="modalidade" name="modalidade" required>
                            <option value="">Selecione...</option>
                            <option>Pilates</option>
                            <option>Spinning</option>
                            <option>Yoga</option>
                            <option>Dança</option>
                            <option>Funcional</option>
                            <option>Musculação</option>
                            <option>Body Balance</option>
                            <option>Boxe</option>
                            <option>Bump</option>
                        </select>
                    </div>
                </div>
            </div>

            <hr class="separador">
            <!-- Linha de Senha lado a lado -->
            <div class="form-columns">
                <div class="column">
                    <div class="input-group">
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha" required>
                    </div>
                </div>
                <div class="column">
                    <div class="input-group">
                        <label for="confirmar_senha">Confirmar senha</label>
                        <input type="password" id="confirmar_senha" name="confirmar_senha" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn">Cadastrar</button>
        </form>
        <p class="signup">Já tem conta? <a href="login.html">Entre aqui</a></p>
    </div>
    <div class="led-glow"></div>
</div>

<script>
const form = document.getElementById('cadastroForm');
const inputs = form.querySelectorAll('input, select');
const senhaInput = document.getElementById('senha');
const confirmarInput = document.getElementById('confirmar_senha');
const cpfInput = document.getElementById('cpf');
const cepInput = document.getElementById('cep');
const celularInput = document.getElementById('celular');

function atualizarValidacao(input) {
    if (validarCampo(input)) {
        input.classList.add('valido');
        input.classList.remove('invalido');
    } else {
        input.classList.add('invalido');
        input.classList.remove('valido');
    }
}

function validarSenha() {
    if (senhaInput.value.length >= 6 && senhaInput.value === confirmarInput.value) {
        senhaInput.classList.add('valido');
        senhaInput.classList.remove('invalido');
        confirmarInput.classList.add('valido');
        confirmarInput.classList.remove('invalido');
    } else {
        senhaInput.classList.add('invalido');
        senhaInput.classList.remove('valido');
        confirmarInput.classList.add('invalido');
        confirmarInput.classList.remove('valido');
    }
}

inputs.forEach(input => {
    input.addEventListener('input', () => {
        if (input !== senhaInput && input !== confirmarInput) {
            atualizarValidacao(input);
        }
        validarSenha();
    });
});

function validarCampo(input) {
    const valor = input.value.trim();
    switch(input.id) {
        case 'nome':
        case 'endereco':
            return valor.length >= 3;
        case 'cpf':
            return /^\d{3}\.\d{3}\.\d{3}-\d{2}$/.test(valor);
        case 'cep':
            return /^\d{5}-\d{3}$/.test(valor);
        case 'celular':
            return /^\(\d{2}\) \d{4,5}-\d{4}$/.test(valor);
        case 'nascimento':
            return valor !== '';
        case 'email':
            return /^\S+@\S+\.\S+$/.test(valor);
        case 'sexo':
        case 'modalidade':
            return valor !== "";
        default:
            return false;
    }
}

// Máscaras em tempo real
cpfInput.addEventListener('input', () => {
    let v = cpfInput.value.replace(/\D/g,'').slice(0,11);
    v = v.replace(/(\d{3})(\d)/,'$1.$2');
    v = v.replace(/(\d{3})(\d)/,'$1.$2');
    v = v.replace(/(\d{3})(\d{1,2})$/,'$1-$2');
    cpfInput.value = v;
});

cepInput.addEventListener('input', () => {
    let v = cepInput.value.replace(/\D/g,'').slice(0,8);
    v = v.replace(/(\d{5})(\d)/,'$1-$2');
    cepInput.value = v;
});

celularInput.addEventListener('input', () => {
    let v = celularInput.value.replace(/\D/g,'').slice(0,11);
    v = v.replace(/^(\d{2})(\d)/,'($1) $2');
    v = v.replace(/(\d{5})(\d)/,'$1-$2');
    celularInput.value = v;
});

<?php if($sucesso): ?>
    alert("Cadastrado com sucesso!");
    window.location.href = "../inicio/inicio";
<?php endif; ?>
</script>
</body>
</html>
