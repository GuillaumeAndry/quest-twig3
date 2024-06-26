<?php

require_once __DIR__ . '/../config/twig.php';

$name = 'Wilder';
$contactEmail = 'contact@email.com';

echo $twig->render('home.html.twig', ['name' => $name]);