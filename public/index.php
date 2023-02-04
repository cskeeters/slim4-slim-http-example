<?php
/* use Slim\Http\ServerRequest; */
/* use Slim\Http\Response; */
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$app->addRoutingMiddleware();
$errorMiddleware = $app->addErrorMiddleware(true, true, true);

$app->get('/', function (Request $request, Response $response, array $args) {

    //Simple test to show that everything works
    $response->getBody()->write("test");

    // Trying to use isGet from ServerRequest
    if ($request->isGet()) {
        $response->getBody()->write("Yes");
    } else {
        $response->getBody()->write("No");
    }

    return $response;
});

$app->run();
?>
