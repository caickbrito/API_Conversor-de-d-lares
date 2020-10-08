<?php 
ob_start();

require __DIR__ . '/vendor/autoload.php';

use CoffeeCode\Router\Router;

$router = new Router(ROOT);
$router->namespace("Source\App");

// Rotas principais
$router->group(null);
$router->get("/", "Web:home", "web.home");
$router->post("/request", "Web:request", "web.request");



// Rota de erro
$router->group("/ops");
$router->get("/{errcode}", "Web:erro", "web.erro");




// Despache das rotas
$router->dispatch();



// Verificação e redirecionamento das rotas
if ($router->error()) {
	$router->redirect("/ops/{$router->error()}");
}


ob_end_flush();




