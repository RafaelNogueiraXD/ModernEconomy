<?php
include "../templates/menu.php";
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
                <a href="" class="btn">Editar</a>
            </div>
            <div class="d2">
                <a href="" class="btn-efect">Deletar</a>
            </div>
        </div>
        </div>
        <div class="espaco"></div>
    </div>
</section>
<script>
    titulo("Perfil","Perfil");
</script>
</div>
