<?php

use Controller\{
            VendedorController,
            ClienteController,
            ProdutoController,
            LoginController,
        InicioController};


$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// echo $url;

switch($url)
{
    case "/":
        InicioController::index();
    break;

    case "/login":
        LoginController::index();
    break;

    case "/logout":
        LoginController::logout();
    break;

    case "/cliente/listar":
        ClienteController::index();
    break;

    case "/cliente/cadastrar":
        ClienteController::cadastro();
    break;

    case "/admin":
        InicioController::notFound();
    break;

    default:
        InicioController::notFound();
    break;
}