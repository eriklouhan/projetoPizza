<?php 

namespace Projeto\Core;

class Controller{
    protected function view($arquivo, $dados=[]){
        require PASTA_VIEW."{$arquivo}.view.php";
    }


    
    }
