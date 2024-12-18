<?php

use Slim\Psr7\Request;
use Slim\Psr7\Response;


$slimApi->get('/', function (Request $request, Response $response, $args) {
    $controller = new \Moises\ClimateApi\Controllers\ClimateController();
    $controllerResponse = $controller->index();
    $jsonResponse = json_encode($controllerResponse->getBody(), JSON_PRETTY_PRINT);
    $response->getBody()->write($jsonResponse);
    return $response;
});
