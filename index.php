<?php
//Conversão de PSR4 para PSR7 com Slim Framework 3+

// 1. Remova a chamada `session_start()`. O PSR-7 não gerencia sessões automaticamente, e é uma boa prática separar a lógica de gerenciamento de sessões do Slim Framework.

// 2. Em vez de utilizar diretamente o Slim Framework para definir rotas, você usará o PSR-7 para manipular as requisições e respostas. O Slim Framework suporta o PSR-7 nativamente, portanto, você ainda pode usar os recursos do framework.

// 3. Adicione a biblioteca do Slim PSR-7 ao seu projeto. 
// Você pode fazer isso através do Composer com o seguinte comando:
// composer require slim/psr7
// 4. Refatore as rotas para usar as interfaces PSR-7 `ServerRequestInterface` e `ResponseInterface`. 
// Utilize a injeção de dependência para obter as informações da requisição (`ServerRequestInterface`) e gerar a resposta (`ResponseInterface`).

// Observe que, nas rotas, utilizamos a injeção de dependência para obter os objetos `Request` e `Response`, permitindo a manipulação das requisições e respostas de acordo com o PSR-7.

// Além disso, criamos uma instância do `PhpRenderer` para gerenciar as views e renderizar os templates.

// Tenha em mente que o código acima é apenas uma adaptação para o uso do PSR-7. Seu projeto pode ter outras dependências que também precisem ser atualizadas para serem compatíveis com o PHP 8 e o PSR-7.

// Lembre-se de realizar testes extensivos após as modificações para garantir que tudo esteja funcionando corretamente.

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

$app->get('/', function (Request $request, Response $response) use ($renderer) {
    $page = new Page();
    return $renderer->render($response, "index.php", [
        "page" => $page
    ]);
});

$app->get('/admin', function (Request $request, Response $response) use ($renderer) {
    User::verifyLogin();
    $page = new PageAdmin();
    return $renderer->render($response, "index.php", [
        "page" => $page
    ]);
});

// Restante das rotas...

$app->run();



// session_start();
// require_once("vendor/autoload.php");
// 
// use \Slim\Slim;
// use \Hcode\Page;
// use \Hcode\PageAdmin;
// use \Hcode\Model\User;
// 
// $app = new Slim();
// 
// $app->config('debug', true);
// 
// $app->get('/', function() {
// 
// 	$page = new Page();
// 
// 	$page->setTpl("index");
//	$sql = new Hcode\DB\Sql();
//	$results = $sql->select("SELECT * FROM tb_users");
//	echo json_encode($results);
// });
// 
// $app->get('/admin', function() {
// 
// 		User::verifyLogin();
// 
// 		$page = new PageAdmin();
// 
// 		$page->setTpl("index");
// 
// 	});
// 
// $app->get('/admin/login', function(){
//
//		$page = new PageAdmin([
//			"header" => false,
//			"footer" => false
//		]);
//
//		$page->setTpl("login");
//
//	});
//
//$app->post('/admin/login', function(){
//
//		User::login($_POST["login"], $_POST["password"]);
//
//		header("Location: /admin");
//		exit;
//
//	});
//
//$app->get('/admin/logout', function(){
//		User::logout();
//
//		header("location: /admin/login");
//		exit;
//	});
//
//$app->get("/admin/users", function()
//	{
//		User::verifyLogin();
//
//		$users = User::listAll();
//		
//		$page = new PageAdmin();
//
//		$page->setTpl("users", array(
//			"users"=>$users
//
//		));
//	});
//
//$app->get("/admin/users/create", function()
//	{
//		User::verifyLogin();
//		
//		$page = new PageAdmin();
//
//		$page->setTpl("users-create");
//
//		var_dump($_POST);
//		
//	});
//
//$app->get("/admin/users/:iduser/delete", function($iduser)
//	{
//		User::verifyLogin();
//
//		$user = new User();
//
//		$user->get((int)$iduser);
//
//		$user->delete();
//
//		header("Location: /admin/users");
//		exit;
//
//	});
//
//$app->get("/admin/users/:iduser", function($iduser)
//	{
//		User::verifyLogin();
//
//		$user = New User();
//		
//		$user->get((int)$iduser);
//
//		$page = new PageAdmin();
//
//		$page->setTpl("users-update", array(
//			"user"=>$user->getValues()
//		));
//	});
//
//$app->post("/admin/users/create", function () {
//
//		User::verifyLogin();
//   
//	   	$user = new User();
//   
//		$_POST["inadmin"] = (isset($_POST["inadmin"])) ? 1 : 0;
//   
//		$_POST['despassword'] = password_hash($_POST["despassword"], PASSWORD_DEFAULT, [
//   
//			"cost"=>12
//   
//		]);
//   
//		$user->setData($_POST);
//   
//	   $user->save();
//   
//	   header("Location: /admin/users");
//		exit;
//   
//});
//
//$app->post("/admin/users/:iduser", function($iduser)
//	{
//		User::verifyLogin();
//
//		$user = new User();
//
//		$_POST["inadmin"] = (isset($_POST["inadmin"])) ? 1 : 0;
//
//		$user->get((int)$iduser);
//
//		$user->setData($_POST);
//
//		$user->update();
//
//		header("Location: /admin/users");
//		exit;
//
//	});
//
//$app->get("/admin/forgot", function(){
//
//	$page = new PageAdmin([
//		"header"=>false,
//		"footer"=>false
//	]);
//
//	$page->setTpl("forgot");
//
//});
//
//$app->post("/admin/forgot", function(){
//
//	$user = User::getForgot($_POST["email"]);
//
//	header("Location: /admin/forgot/sent");
//	exit;
//
//});
//
//$app->get("/admin/forgot/sent", function(){
//
//	$page = new PageAdmin([
//		"header"=>false,
//		"footer"=>false
//	]);
//	$page->setTpl("forgot-sent");
//
//});
//
//$app->run();
