<?php

namespace Projeto\Controllers;

use Projeto\Core\Controller;

class HomeController extends Controller{

    public function index(){
        $dados = ['titulo' => 'Pizzaria'];
        $this->view('inicial', $dados);
}
}