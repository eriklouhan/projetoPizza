<?php
declare(strict_types = 1);

use Projeto\Controllers\ErroController;
use Projeto\Controllers\HomeController;
use Projeto\Controllers\LoginController;

require  __DIR__ . "/vendor/autoload.php";

const PASTA_VIEW = "./app/Views/";

$url = $_GET['url'] ?? "/";
switch($url){
    case "/":
        $controller = new HomeController();
        $controller->index();
    break;
    case "login":
       $controller = new LoginController();
       $controller->login();

    break;
    case "cadastro":
        $controller = new LoginController();
        $controller->criarconta();
        
    break;
    default:
        $controller = new ErroController();
        $controller->erro404();
} 