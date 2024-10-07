<?php

require_once("vendor/autoload.php");

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Factory\AppFactory;
use Slim\Views\PhpRenderer;
use Hcode\Page;
use Hcode\PageAdmin;
use Hcode\Model\User;

$app = AppFactory::create();

$app->addRoutingMiddleware();
$app->addErrorMiddleware(true, true, true);

$renderer = new PhpRenderer(__DIR__ . '/views');

// Rota para página inicial
$app->get('/', function (Request $request, Response $response) use ($renderer) {
    $page = new Page();
    return $renderer->render($response, "index.php", [
        "page" => $page
    ]);
});

// Rota para página de admin
$app->get('/admin', function (Request $request, Response $response) use ($renderer) {
    User::verifyLogin();
    $page = new PageAdmin();
    return $renderer->render($response, "index.php", [
        "page" => $page
    ]);
});

// Rota para login admin (GET)
$app->get('/admin/login', function (Request $request, Response $response) use ($renderer) {
    User::verifyLogin();
    $page = new PageAdmin();
    return $renderer->render($response, "index.php", [
        "page" => $page,
        "header" => false,
        "footer" => false 	
        ]);
    $page->setTpl("login");
});

// Rota para login admin (POST)
$app->post('/admin/login', function(){
    User::login($_POST["login"], $_POST["password"]);
    header("Location: /admin");
    exit;
});

// Rota para logout admin
$app->get('/admin/logout', function(){
    User::logout();
    header("location: /admin/login");
    exit;
});

// Restante das rotas...

$app->run();