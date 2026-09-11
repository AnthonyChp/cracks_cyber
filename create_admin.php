<?php
// Crée le compte admin pour le  lancer une fois en ligne de commande :
//   php create_admin.php
require_once __DIR__ . '/config.php';

$login = readline('Login admin : ');
$pwd   = readline('Mot de passe : ');

$s = $db->prepare('insert into users (login, pwd, isadmin) values (:l, :p, 1)');
$s->execute(['l' => $login, 'p' => md5($pwd)]);

echo "Compte admin « $login » créé";