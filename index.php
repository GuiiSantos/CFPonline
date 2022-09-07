<?php

ob_start();

require_once __DIR__ . "/vendor/autoload.php";

/**
 * INICIALIZAÇÃO
 */

use CoffeeCode\Router\Router ;

$router = new  Router(url());
$router->namespace("Source\Controllers");

/**
 * CLIENT
 */
$router->group(null);
$router->get("/", "Client:home");
$router->get("/sobre", "Client:sobre");
$router->get("/cursos", "Client:cursos");
$router->get("/ebooks", "Client:ebooks");
$router->get("/depoimentos", "Client:depoimentos");
$router->get("/cadastrar", "Client:cadastrar");
$router->get("/login", "Client:login");

$router->group("/oops");
$router->get("/{errcode}","Client:error");

/**
 * CRIA AS ROTAS
 */
$router->dispatch();

/**
 * REDIRECIONA ERROS
 */
if ($router->error()) {
    $router->redirect("/oops/{$router->error()}");
}

ob_end_flush();