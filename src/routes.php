<?php
use Sisfin\Router;
use Sisfin\Controllers\ClienteController;
use Sisfin\Controllers\ProdutoController;
use Sisfin\Controllers\FornecedorController;
use Sisfin\Controllers\HomeController;
use Sisfin\Controllers\VendaController;

$router = new Router();


$router->addRoute('/', HomeController::class, 'index');
$router->addRoute('/cliente', ClienteController::class, 'index');
$router->addRoute('/cliente/id', ClienteController::class, 'findByClienteId');
$router->addRoute('/cliente/insert/', ClienteController::class, 'insertCliente');
$router->addRoute('/cliente/delete/', ClienteController::class, 'deleteCliente');
$router->addRoute('/cliente/edit/', ClienteController::class, 'editCliente');
$router->addRoute('/relatorio/cliente/', ClienteController::class, 'relatorioCliente');
$router->addRoute('/fornecedor', FornecedorController::class, 'index');
$router->addRoute('/fornecedor/id', FornecedorController::class, 'findByFornecedorId');
$router->addRoute('/fornecedor/insert/', FornecedorController::class, 'insertFornecedor');
$router->addRoute('/fornecedor/edit/', FornecedorController::class, 'editFornecedor');
$router->addRoute('/fornecedor/delete/', FornecedorController::class, 'deleteFornecedor');
$router->addRoute('/fornecedor/produtos', ProdutoController::class, 'produtosPorFornecedor');
$router->addRoute('/produto', ProdutoController::class, 'index');
$router->addRoute('/venda', VendaController::class, 'index');
