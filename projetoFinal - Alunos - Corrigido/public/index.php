<?php
require_once __DIR__ . '/../app/routes/Router.php';//arrumar a navegação das telas
require_once __DIR__ . '/../app/controller/ContatoController.php';

$router = new Router();
$controller = new ContatoController();

$router->get('/', fn() => header('Location: /contatos'));
$router->get('/contatos', fn() => $controller->index());
$router->get('/contatos/create', fn() => $controller->create());
$router->post('/contatos', fn() => $controller->store());
$router->get('/contatos/{id}', fn($params) => $controller->show($params));
$router->get('/contatos/{id}/edit', fn($params) => $controller->edit($params));
$router->post('/contatos/{id}/update', fn($params) => $controller->update($params));
$router->post('/contatos/{id}/delete', fn($params) => $controller->destroy($params));

$router->dispatch($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);