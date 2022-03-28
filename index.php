<?php

require_once 'Player.php';

$firstPlayer = new Player('Aldaitz', 'Thomas');
$firstPlayer->setPosition('Défenseur');
$firstPlayer->setNumber('toto');

$secondPlayer = new Player('Test', 'Jean');
$secondPlayer->setPosition('Attaquant');
$secondPlayer->setNumber(8);


var_dump($firstPlayer);
var_dump($secondPlayer);