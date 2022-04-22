<?php

// importo le classi da altri files

include __DIR__ . '/user.php';
include __DIR__ . '/product.php';
include __DIR__ . '/cart.php';

// creo istanze di prodotti

$crocchette_gatto = new Product ('Crocky', 1.20, ['crocchette', 'gatto', 'food'], 18);
$crocchette_cane = new Product ('Fido Felice', 1.50, ['crocchette', 'cane', 'food'], 24);
$gabbietta_small = new Product ('Non volare via', 29.90, ['accessori', 'gabbie', 'pappagalli'], 6);
$sassi_acquario = new Product ('Come nell\'oceano', 0.50, ['accessori', 'acquari', 'pesci'], 11);

// var_dump($crocchette_gatto);
// var_dump($crocchette_cane);
// var_dump($gabbietta_small);
// var_dump($sassi_acquario);

//creo istanza del carrello e lo riempo con prodotti

$cart = new Cart();
$cart->addItem($sassi_acquario);
$cart->addItem($gabbietta_small);
var_dump($cart);

//creo istanze di utenti

$pippo = new User ('goofy@gmail.com', 'Goofy', 'Goof');
$paperino = new User ('donalduck@gmail.com', 'Donald', 'Duck');

var_dump($pippo);
var_dump($paperino);