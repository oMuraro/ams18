<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use app\Aula;

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {
    $aula = new Aula();
    $aulas = $aula->listarAulas();

    $response->getBody()->write(json_encode($aulas));
    return $response->withHeader("Content-Type", 'application/json');
});
$app->setBasePath('/ams');
$app->run();