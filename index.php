<?php

use App\Controller\Pages\Home;

require_once __DIR__.'/vendor/autoload.php';

$obResponse = new \App\Http\Response(200, 'Olá Mundo');

echo "<pre>";
print_r($obResponse);
echo "</pre>";

exit;
echo Home::getHome();

