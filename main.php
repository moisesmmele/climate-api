<?php

use Moises\ClimateApi\Controllers\ClimateController;
use Slim\Factory\AppFactory;

require_once __DIR__ . '/vendor/autoload.php';

$slimApi = AppFactory::create();

require __DIR__ . '/src/Slim/routes.php';

$slimApi->run();

//$apiController = new ClimateController();
//$response = $apiController->index();
//$response->getBody();