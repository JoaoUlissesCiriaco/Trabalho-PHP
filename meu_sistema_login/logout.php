<?php
require_once 'Classes/Sessao.php';
Sessao::iniciar();
Sessao::destruir();
header('Location: login.php');
exit;