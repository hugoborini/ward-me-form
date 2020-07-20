<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Handlers\Strategies\RequestResponseArgs;
use Slim\Routing\RouteCollectorProxy;

// Composer autoloader
require __DIR__ . '/vendor/autoload.php';

// Instanciation de l'application Slim
$app = AppFactory::create();

$app->getRouteCollector()->setDefaultInvocationStrategy(new RequestResponseArgs());

$app->addRoutingMiddleware();
$app->addErrorMiddleware(true, true, true);

$app->setBasePath("/ward-me-form");
// Stratégie de route:

// Route - page d'accueil
$app->get('/', function (Request $request, Response $response) {
    $response->getBody();
    echo 'hello';
    return $response;
});

// Démarrage de l'application
$app->run();