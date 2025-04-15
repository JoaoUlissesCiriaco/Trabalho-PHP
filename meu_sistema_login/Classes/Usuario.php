<?php
class Usuario {
    private $nome;
    private $email;
    private $senha;

    public function __construct($nome, $email, $senha, $senhaJaCriptografada = false) {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senhaJaCriptografada ? $senha : password_hash($senha, PASSWORD_DEFAULT);
    }

    public function getEmail() {
        return $this->email;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function verificarSenha($senhaDigitada) {
        return password_verify($senhaDigitada, $this->senha);
    }

    public function toArray() {
        return [
            'nome' => $this->nome,
            'email' => $this->email,
            'senha' => $this->senha
        ];
    }

    public static function fromArray($dados) {
        return new Usuario($dados['nome'], $dados['email'], $dados['senha'], true);
    }
}