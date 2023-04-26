<?php

require 'E:/ElanFormation/nmassites/PHP/laragon_www/Bookshelf/class/Auteur.php';
require 'E:/ElanFormation/nmassites/PHP/laragon_www/Bookshelf/class/Livre.php';

$aut1 = new Auteur("Huxley", "Aldous", "1894-07-26","commeass");

// echo $aut1;

$livre1 = new Livre("Jaune de Crome", "1921", "272", "28.82", $aut1);

// echo $livre1;

$livre2 = new Livre("Jouvence", "1939", "312", "9.97", $aut1);

// echo $livre2;

$livre3 = new Livre("La philosophie Eternelle", "1945", "384", "83.67", $aut1);

// echo $livre3;

echo $aut1->afficherBibliographie();








