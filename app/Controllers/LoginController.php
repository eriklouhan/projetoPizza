<?php

namespace Projeto\Controllers;

use Projeto\Core\Controller;

class LoginController extends Controller{

    public function login(){
       $this->view('login', ['pagina' => 'Página de Login']);
    }

    public function criarconta(){
        $this->view('conta');
    }
}