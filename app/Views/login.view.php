<?php componente('topo')?>

    
<section class="cadatro">
        <div class="form-cadastro">
            <div class="form-image">
                <img src="./public/img/LA PINA LOGO.ico" alt="banner">
            </div>
            <div class="form">
                <form action="#">
                    <div class="form-header">
                        <div class="title">
                            <h1>Cadastra-se</h1>
                        </div>
                       
                    </div>
    
                    <div class="input-group">
                    
                        <div class="input-box">
                            <label for="email">Email</label>
                            <input id="email" type="email" name="email" placeholder="Digite seu email" required>
                        </div>
                       
                        <div class="input-box">
                            <label for="password">Senha:</label>
                            <input id="password" type="password" name="password" placeholder="Digite sua senha" required>
                        </div>
                      
                    </div>
    
                    <div class="continue-button">
                        <button><a href="#">Entrar</a></button>
                    </div>
                </form>
    
            </div>
        </div>
    </section>


<?php componente('rodape')?>