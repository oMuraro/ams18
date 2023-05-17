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

$app->get('/aula/{nome}', function (Request $request, Response $response, $args) {
    
    $aula = new Aula();
    $resultado = $aula->listarConteudoAula($args['nome']);

    $response->getBody()->write($resultado);
    return $response->withHeader("Content-Type", 'application/json');
});

$app->get('/dados-aulas', function (Request $request, Response $response, $args) {
    
    $aula = new Aula();
    $dados = $aula->lerDadosAulas();

    $response->getBody()->write($dados);
    return $response->withHeader("Content-Type", 'application/json');
});

$app->get('/hash/{aula}', function (Request $request, Response $response, $args) {
    
    $aula = new Aula();
    $dados = $aula->criarHash($args['aula']);

    $response->getBody()->write(json_encode($dados));
    return $response->withHeader("Content-Type", 'application/json');
});

// 
// Criar uma api que receba do usuario uma string
// e retorne o hash dessa string

$app->setBasePath('/ams');
$app->run();