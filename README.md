👨‍💻 Aluno 
Nome: João Ulisses Porto Alegre Ciriaco Teixeira
Professor: Leandro Otávio Cordova Vieira
Turma: 5ª Fase - São Miguel do Oeste
Curso: Ciência da Computação - UNOESC

🛡️ Sistema de Autenticação Simples em PHP

Este projeto é uma aplicação básica de login e cadastro de usuários desenvolvida com PHP puro, focada em fins didáticos. Ele simula um sistema de autenticação sem utilizar banco de dados, armazenando os usuários em um arquivo `.json`. Ideal para quem está aprendendo os fundamentos de autenticação, sessões e organização de código com classes.

✨ Funcionalidades

- Cadastro de novos usuários com senha criptografada.
- Login com opção de lembrar o e-mail.
- Painel protegido que só pode ser acessado após login.
- Logout para encerrar a sessão.
- Armazenamento de dados em arquivo JSON (sem necessidade de banco de dados).
- Estilo visual limpo e centralizado usando apenas HTML e CSS.

🗂️ Estrutura do Projeto

- `/Classes` – Contém as classes `Usuario`, `Sessao` e `Autenticador`.
- `/data/usuarios.json` – Arquivo que armazena os usuários registrados.
- Páginas principais:
  - `cadastro.php` – Tela de registro.
  - `processa_cadastro.php` – Processa o cadastro e salva no JSON.
  - `login.php` – Tela de login com campo para lembrar e-mail.
  - `processa_login.php` – Verifica credenciais e inicia sessão.
  - `dashboard.php` – Painel acessível apenas após login.
  - `logout.php` – Encerra a sessão do usuário.

💡 Objetivo

O projeto tem como foco o aprendizado prático de conceitos como:
- Criação e utilização de sessões em PHP.
- Criptografia de senhas com `password_hash` e `password_verify`.
- Estruturação de código em múltiplas classes.
- Separação entre lógica de back-end e interface de front-end.
