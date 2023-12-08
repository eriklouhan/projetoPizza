<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?=css('style')?>">
   
    <title>Pizza</title>
</head>
<body>
    <header>
            <div class="content">
                <div class="logo">
                    <img src="./public/img/LA PINA LOGO.ico" alt="logo">
                    <h3>LaPina</h3>
                </div>
                
                <ul class="list-menu">
                    <li><a href="<?=linkrota()?>">Home</a></li>
                    <li><a href="<?=linkrota('sobre')?>">Sobre</a></li>
                    <li><a href="<?=linkrota('cardapio')?>">Cardápio</a></li>
                    <li><a href="<?=linkrota('cadastro')?>">Cadastro</a></li>
                    <li><a href="<?=linkrota('login')?>">Login</a></li>
                    <li><a href="#contatos">Contatos</a></li>
                   

                </ul>

                <div class="menu-toggle">
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                </div>

            

        </div>
        
    </header>