<?php

// use composer autoload method
require_once('./vendor/autoload.php');

use App\App;

$app = new App();
$response = $app->handle();

echo $response;