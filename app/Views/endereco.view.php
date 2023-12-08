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
                        <h1>Cadastra seu endereço</h1>
                    </div>
                    
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="rua">Rua</label>
                        <input id="rua" type="text" name="rua" placeholder="Rua" required>
                    </div>
                    <div class="input-box">
                        <label for="numero">Numero</label>
                        <input id="numero" type="number" name="numero" placeholder="Número" required>
                    </div>
                    <div class="input-box">
                        <label for="bairro">Bairro</label>
                        <input id="bairro" type="text" name="bairro" placeholder="Bairro" required>
                    </div>
                    <div class="input-box">
                        <label for="referencial">Referencial</label>
                        <input id="referencial" type="text" name="referencial" placeholder="Referencial" required>
                    </div>
                    <div class="input-box">
                        <label for="number">CEP</label>
                        <input id="number" type="number" name="number" placeholder="xxxxx-xxx" required>
                    </div>
                    <div class="input-box">
                        <label for="cidade">Cidade</label>
                        <input id="cidade" type="text" name="cidade" placeholder="Cidade" required>
                    </div>
                    <div class="input-box">
                        <label for="estado">Estado</label>
                        <input id="estado" type="text" name="estado" placeholder="Estado" required>
                    </div>
                    
                </div>


               

                <div class="continue-button">
                    <button><a href="#">Continuar</a></button>
                </div>
            </form>

        </div>
    </div>
</section>

<?php componente('rodape')?>