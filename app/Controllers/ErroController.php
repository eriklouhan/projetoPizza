<?php

namespace Projeto\Controllers;

use Projeto\Core\Controller;

class ErroController extends Controller{


    public function erro404(){
        $this->view('404');
    }

}