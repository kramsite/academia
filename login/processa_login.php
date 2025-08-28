<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST["email"]);
    $senha = trim($_POST["password"]);

    // Caminho do JSON
    $jsonPath = "../json/usuarios.json";
    if (!file_exists($jsonPath)) {
        die("Arquivo de usuários não encontrado.");
    }

    // Lê e decodifica os usuários
    $usuarios = json_decode(file_get_contents($jsonPath), true);

    $usuarioEncontrado = null;

    // Procura usuário pelo email
    foreach ($usuarios as $usuario) {
        if (strtolower($usuario["email"]) === strtolower($email)) {
            $usuarioEncontrado = $usuario;
            break;
        }
    }

    if ($usuarioEncontrado) {
        // Confere a senha
        if (password_verify($senha, $usuarioEncontrado["senha"])) {
            // Login ok → cria sessão
            $_SESSION["usuario_nome"] = $usuarioEncontrado["nome"];
            $_SESSION["usuario_email"] = $usuarioEncontrado["email"];

            header("Location: ../inicio/inicio.php");
            exit;
        } else {
            $_SESSION["erro_login"] = "Senha incorreta.";
            header("Location: login.php");
            exit;
        }
    } else {
        $_SESSION["erro_login"] = "Usuário não encontrado.";
        header("Location: login.php");
        exit;
    }
}
?>
