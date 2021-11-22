<?php 

require __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/twig.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader; 

$loader = new FilesystemLoader(__DIR__ . '/../src/View');
$twig = new Environment($loader, ['debug' => true]); 

$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];
echo $twig -> render('products.html.twig', [  
    'products' => array('guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'),
]);


