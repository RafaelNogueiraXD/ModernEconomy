<?php
    include "templates/menu.html";
?>
<main>
<section class="cadastro">
    <div class="imagens">    
        <div>
            <a href="home.php">Home</a>
        </div>
        <div class="imgcad2">
            <a href="guia.php">Guia</a>
        </div>
        <div class="imgcad2">
            <a href="sobre.php">sobre</a>
        </div>
    </div>
    <div class="formcad">
        <h1>Cadastro</h1>
        <div class="cad">
            <form action="../../app/pages/usuario/index.php" method="POST">
                <div>
                    <label for="nome">Nome:</label>
                </div>
                <div>
                    <input type="text" id="nome" placeholder="Digite seu nome" maxlength="20" name="nome" required>
                </div>
                <div>
                    <label for="email">Email:</label>
                </div>
                <div>
                    <input type="text" id="email" placeholder="Digite seu email" name="email" required>
                </div>
                <div>
                    <label for="senha">Senha:</label>
                </div>
                <div>
                    <input type="text" id="senha" placeholder="Digite sua senha" name="senha" required> 
                </div>
                <div class="botaocad">
                    <input type="submit" class="btn-efect" value="cadastrar!">
                </div>
            </form>
        </div>
    </div>
</section>
</main>
<?php
    include "templates/footer.html";
?>