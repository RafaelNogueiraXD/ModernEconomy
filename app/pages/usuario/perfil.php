<?php
include "../templates/menu.php";

if(isset($_POST['nome']))
{
    $usuario->edita($usu['id'],$_POST['nome'],$_POST['email'],$_POST['cep'],$_POST['nasc'],$_POST['senha'],$_POST['desc']);
    header("Location: perfil.php");
}


?>
<div class="full">
<section>
    <div class="titulo">
        <h1>Olá <?=  $usu['nome'] ?></h1>
    </div>
    <div class="conteudo">
        <div class="dados">
            <ul>
                <li><b>Nome:</b> <?=  $usu['nome'] ?></li>
                <li><b>Email:</b> <?=  $usu['email'] ?></li>
                <li><b>Cep:</b> <?php
                                        if($usu['Cep'] == 0 || $usu['Cep'] == "")
                                        {
                                            echo "Não informado";
                                        }else{
                                            echo $usu['Cep'];
                                        } 
                                ?>
                </li>
                <li><b>Data de Nascimento:</b>  <?php
                                        if($usu['data_nasc'] == "0000-00-00")
                                        {
                                            echo "Não informado";
                                        }else{
                                            echo $usu['data_nasc'];
                                        } 
                                ?>
                </li>
            </ul>
            <fieldset>
                <legend><b>Descrição</b></legend>
                <?=  $usu['description'] ?>
            </fieldset>
            <div class="options">
            <div class="d1">
                <a id="abreModal" class="btn">Editar</a>
            </div>
            <div class="d2">
                <a href="" class="btn-efect">Deletar</a>
            </div>
        </div>
        </div>
        <div class="espaco"></div>
    </div>
</section>

</div>
<div class="modal">
    <div class="conteudoModal">
        <div class="inicioModal">
                <div>
                    <h1>Edição Da sua Conta</h1>
                </div>
                <div>
                    <button id="fechaModal">X</button>
                </div>
        </div>
        <form action="perfil.php" method="POST">

        <div class="meioModal">
                <div id="campoP">
                    <label for="Nome">Nome: </label>
                    <input type="text" name="nome" placeholder="Digite seu nome" id="nome" value="<?=  $usu['nome'] ?>">
                </div>
                <span class="linhaME"></span>

                <div id="campoP">
                    <label for="Senha">Senha: </label>
                    <input type="text" name="senha" placeholder="Digite sua senha" id="senha" value="<?=  $usu['password'] ?>">
                </div>
                <span class="linhaME"></span>

                <div id="campoP">
                    <label for="Nome">Email: </label>
                    <input type="email" name="email" placeholder="Digite seu nome" id="nome" value="<?=   $usu['email'] ?>">
                </div>
                <span class="linhaME"></span>

                <div id="campoP">
                    <label for="Nome">Cep: </label>
                    <input type="text" name="cep" placeholder="Digite seu nome" id="nome" value="<?php
                                        if($usu['Cep'] == 0 || $usu['Cep'] == "")
                                        {
                                            echo "Não informado";
                                        }else{
                                            echo $usu['Cep'];
                                        } 
                                ?>">
                </div>
                <span class="linhaME"></span>

                <div id="campoP">
                    <label for="Nome">Nascimento: </label>
                    <input type="date" name="nasc" placeholder="Digite seu nome" id="nome" required>
                </div>
                <span class="linhaME"></span>
                <div id="campoDesc">
                    <label for="Desc">Descrição</label>
                    <textarea name="desc" id="Desc" cols="50" rows="10"> <?=  $usu['description'] ?></textarea>
                    <p id="msg">Você tem que Colocar sua data de Nascimento para continuar! </p>
                </div>
        </div>
        <div class="botoes">
            <div>
                <input type="submit" value="Editar" id="formEdit">
            </div>
        </form>

            <div>
                <a id="fechadesc" class="btn">Editar outros campos</a>
                <a id="abredesc" class="btn">Editar Descrição</a>
            </div>
        </div>
    </div>
</div>


<script>
    $("#fechadesc").hide();
    $("#campoDesc").hide();
    $("#msg").hide();

    $("#formEdit").click(function(){
        $("#msg").fadeToggle("slow");

    });

    $("#abredesc").click(function(){
        $("div #campoP").hide(),
        $(".linhaME").hide(),
        $("#campoDesc").fadeIn("slow"),
        $("#abredesc").hide(),
        $("#fechadesc").fadeIn("slow")

    });
    $("#fechadesc").click(function(){
        $("div #campoP").fadeIn("slow"),
        $(".linhaME").fadeIn("slow"),
        $("#campoDesc").hide(),
        $("#abredesc").fadeIn("slow"),
        $("#fechadesc").hide()
    })

    titulo("Perfil","Perfil");
    Modal(); 
</script>