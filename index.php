<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';
require __DIR__ . '/../public/products.php';

$name = 'Wilder';

echo $twig->render('home.html.twig', ['name' => $name]);