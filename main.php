<?php

use Moises\ClimateApi\Controllers\ClimateController;

require_once __DIR__ . '/vendor/autoload.php';

$apiController = new ClimateController();
$response = $apiController->index();
$response->getBody();