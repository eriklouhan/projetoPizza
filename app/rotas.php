<?php

use Projeto\Core\Router;

Router::add('/' , 'HomeController', 'index');
Router::add('/login' , 'LoginController', 'login');
Router::add('/cadastro', 'LoginController', 'criarconta');
Router::add('/sobre', 'HomeController', 'sobre');
Router::add('/cardapio', 'HomeController', 'cardapio');
Router::add('/endereco', 'HomeController', 'endereco');
Router::add('/teste', 'HomeController', 'teste');
