<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Handlers\Strategies\RequestResponseArgs;
use Slim\Routing\RouteCollectorProxy;

// Composer autoloader
require __DIR__ . '/vendor/autoload.php';
require "controller/controller.php";
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
    include 'view/form.php';
    return $response;
});

$app->post('/send', function (Request $request, Response $response){
    $response->getBody();
    sendFormToDb($_POST['name'],$_POST['lastname'],$_POST['age'], $_POST['location'], $_POST['sexe'], $_POST['metier'], $_POST['play_game'], $_POST['type_game'], $_POST['hour']);
    return $response;
});


// Démarrage de l'application
$app->run();