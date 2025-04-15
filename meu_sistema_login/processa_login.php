<?php
require_once 'Classes/Sessao.php';
require_once 'Classes/Autenticador.php';

Sessao::iniciar();

$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$senha = $_POST['senha'];
$lembrar = isset($_POST['lembrar_email']);

$usuario = Autenticador::logar($email, $senha);

if ($usuario) {
    Sessao::set('usuario', $usuario);

    if ($lembrar) {
        setcookie('email', $email, time() + 3600 * 24 * 30);
    }

    header('Location: dashboard.php');
    exit;
} else {
    echo "Credenciais inválidas. <a href='login.php'>Tentar novamente</a>";
}