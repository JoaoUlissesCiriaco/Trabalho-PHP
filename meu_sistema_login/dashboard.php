<?php
require_once 'Classes/Usuario.php';
require_once 'Classes/Sessao.php';

Sessao::iniciar();
$usuario = Sessao::get('usuario');

if (!$usuario) {
    header('Location: login.php');
    exit;
}

$nome = $usuario->getNome();
$emailCookie = $_COOKIE['email'] ?? null;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e3f2fd;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h1 {
            margin-bottom: 15px;
        }

        p {
            font-size: 14px;
            margin: 10px 0;
        }

        a {
            display: inline-block;
            margin-top: 15px;
            padding: 8px 15px;
            background-color: #2196F3;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        a:hover {
            background-color: #1976D2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bem-vindo, <?= htmlspecialchars($nome) ?>!</h1>
        <?php if ($emailCookie): ?>
            <p>Seu e-mail lembrado: <?= htmlspecialchars($emailCookie) ?></p>
        <?php endif; ?>
        <a href="logout.php">Sair</a>
    </div>
</body>
</html>
