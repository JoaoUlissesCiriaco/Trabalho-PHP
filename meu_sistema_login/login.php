<?php
$emailCookie = $_COOKIE['email'] ?? '';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        button {
            padding: 8px 15px;
            cursor: pointer;
        }

        label {
            display: block;
            margin-top: 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="processa_login.php" method="post">
            <input type="email" name="email" value="<?= htmlspecialchars($emailCookie) ?>" placeholder="E-mail" required><br>
            <input type="password" name="senha" placeholder="Senha" required><br>
            <label><input type="checkbox" name="lembrar_email" value="1"> Lembrar e-mail</label>
            <div class="buttons">
                <button type="submit">Entrar</button>
                <a href="cadastro.php"><button type="button">Cadastrar</button></a>
            </div>
        </form>
    </div>
</body>
</html>
