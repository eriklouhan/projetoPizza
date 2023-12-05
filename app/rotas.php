<?php

use Projeto\Core\Router;

Router::add('/' , 'HomeController', 'index');
Router::add('/login' , 'LoginController', 'login');
Router::add('/cadastro', 'LoginController', 'criarconta');