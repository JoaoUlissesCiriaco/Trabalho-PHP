👨‍💻 Aluno 
Nome: João Ulisses Porto Alegre Ciriaco Teixeira
Professor: Leandro Otávio Cordova Vieira
Turma: 5ª Fase - São Miguel do Oeste
Curso: Ciência da Computação - UNOESC

🛡️ Sistema de Login em PHP com JSON

Este projeto é um sistema simples de autenticação de usuários feito com PHP puro, ideal para fins didáticos. Ele não utiliza banco de dados, mas sim um arquivo `.json` para simular o armazenamento dos usuários cadastrados.

✨ Funcionalidades

- Cadastro de novos usuários com senha criptografada.
- Login com a opção de lembrar o e-mail.
- Painel do usuário visível somente após o login.
- Logout com destruição de sessão.
- Armazenamento de usuários em um arquivo `usuarios.json`.
- Visual simples e centralizado com HTML e CSS puro.

🗂️ Estrutura do Projeto

O projeto possui a seguinte estrutura de arquivos:

- /Classes
  - Autenticador.php
  - Sessao.php
  - Usuario.php
- /data
  - usuarios.json
- index.php
- cadastro.php
- processa_cadastro.php
- login.php
- processa_login.php
- dashboard.php
- logout.php

📋 Requisitos

- PHP
- Navegador
- Servidor Apache, PHP embutido ou Docker

 🚀 Como rodar o projeto

Sem Docker (modo simples)

1. Crie a pasta `data` na raiz do projeto.
2. Dentro dela, crie um arquivo chamado `usuarios.json` com o conteúdo `{}`.
3. Execute no terminal, dentro da pasta do projeto:

   php -S localhost:8080

4. Acesse o projeto no navegador pelo endereço:

   http://localhost:8080

Com Docker (opcional)

1. Instale o Docker.
2. Execute o seguinte comando na raiz do projeto:

   docker run -d -p 8080:80 -v $(pwd):/var/www/html php:8.2-apache

3. Acesse o navegador em:

   http://localhost:8080

✅ Como usar

1. Acesse `cadastro.php` e registre um novo usuário.
2. Vá para `login.php` e faça o login com os dados cadastrados.
3. Você será direcionado para `dashboard.php`.
4. Clique em "Sair" para fazer logout.

📚 Objetivo

O projeto foi desenvolvido com o objetivo de praticar:

- Programação orientada a objetos em PHP.
- Sessões e controle de autenticação.
- Criptografia de senhas com `password_hash`.
- Armazenamento e leitura de dados usando JSON.
- Organização do código em classes reutilizáveis.

