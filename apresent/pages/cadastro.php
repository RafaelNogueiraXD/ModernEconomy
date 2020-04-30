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
            <form action="" id="formcad">
                <div>
                    <label for="nome">Nome:</label>
                </div>
                <div>
                    <input type="text" id="nome" placeholder="Digite seu nome">
                </div>
                <div>
                    <label for="email">Email:</label>
                </div>
                <div>
                    <input type="text" id="email" placeholder="Digite seu email">
                </div>
                <div>
                    <label for="senha">Senha:</label>
                </div>
                <div>
                    <input type="text" id="senha" placeholder="Digite sua senha"> 
                </div>
                <div class="botaocad">
                    <a href="" class="btn-efect">Cadastrar!</a>
                </div>
            </form>
        </div>
    </div>
</section>
</main>
<script>

</script>
<?php
    include "templates/footer.html";
?>