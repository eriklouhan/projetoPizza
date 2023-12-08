<?php

namespace Projeto\Controllers;

use Projeto\Core\Controller;
use Projeto\Models\Clientes;

class HomeController extends Controller{

    public function index(){
        $dados = ['titulo' => 'Pizzaria'];
        $this->view('inicial', $dados);
}

    public function sobre(){
        $this->view('sobre');
    }

    public function cardapio(){
        $this->view('cardapio');
    }

    public function endereco(){
        $this->view('endereco');
    }


    public function teste(){
        $cliente = new Clientes();
    }

}