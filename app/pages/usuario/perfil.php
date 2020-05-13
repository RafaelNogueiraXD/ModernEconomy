<?php
include "../templates/menu.html";
require_once "../../Model/usuario.php";
session_start();
$id = $_SESSION['id'];
$usu = new usuario();
$dados = $usu->usuconta($id);
?>
<div class="full">
<section>
    <div class="titulo">
        <h1>Olá <?=  $dados['nome'] ?></h1>
    </div>
    <div class="conteudo">
        <div class="dados">
            <ul>
                <li><b>Nome:</b> <?=  $dados['nome'] ?></li>
                <li><b>Email:</b> <?=  $dados['email'] ?></li>
                <li><b>Cep:</b> <?php
                                        if($dados['Cep'] == 0 || $dados['Cep'] == "")
                                        {
                                            echo "Não informado";
                                        }else{
                                            echo $dados['Cep'];
                                        } 
                                ?>
                </li>
                <li><b>Data de Nascimento:</b>  <?php
                                        if($dados['data_nasc'] == "0000-00-00")
                                        {
                                            echo "Não informado";
                                        }else{
                                            echo $dados['data_nasc'];
                                        } 
                                ?>
                </li>
            </ul>
            <fieldset>
                <legend><b>Descrição</b></legend>
                <?=  $dados['description'] ?>
            </fieldset>
            <div class="options">
            <div class="d1">
                <a href="" class="btn">Editar</a>
            </div>
            <div class="d2">
                <a href="" class="btn-efect">Deletar</a>
            </div>
        </div>
        </div>
    </div>
</section>
<script>
    titulo("Perfil","Perfil");
</script>
</div>
