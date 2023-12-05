<?php
declare(strict_types = 1);

use Projeto\Core\Router;

require  __DIR__ . "/vendor/autoload.php";

const PASTA_VIEW = "./app/Views/";
const NS_CONTROLLERS = "\\Projeto\\Controllers\\";

$url = $_GET['url'] ?? "";



Router::add('/' , 'HomeController', 'index');
Router::add('/login' , 'LoginController', 'login');

Router::add('/cadastro', 'LoginController', 'criarconta');


Router::exec($url);




