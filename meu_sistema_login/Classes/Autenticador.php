<?php
require_once 'Usuario.php';

class Autenticador {
    private static $arquivo = __DIR__ . '/../usuarios.json';

    private static function carregarUsuarios() {
        if (!file_exists(self::$arquivo)) return [];
        $dados = json_decode(file_get_contents(self::$arquivo), true);
        $usuarios = [];
        foreach ($dados as $email => $info) {
            $usuarios[$email] = Usuario::fromArray($info);
        }
        return $usuarios;
    }

    private static function salvarUsuarios($usuarios) {
        $dados = [];
        foreach ($usuarios as $email => $usuario) {
            $dados[$email] = $usuario->toArray();
        }
        file_put_contents(self::$arquivo, json_encode($dados, JSON_PRETTY_PRINT));
    }

    public static function registrar(Usuario $usuario) {
        $usuarios = self::carregarUsuarios();
        $usuarios[$usuario->getEmail()] = $usuario;
        self::salvarUsuarios($usuarios);
    }

    public static function logar($email, $senha) {
        $usuarios = self::carregarUsuarios();
        if (isset($usuarios[$email])) {
            $usuario = $usuarios[$email];
            if ($usuario->verificarSenha($senha)) {
                return $usuario;
            }
        }
        return null;
    }
}