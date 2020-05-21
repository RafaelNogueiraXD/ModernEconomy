<?php
    include "../../Model/conta.php";
    include "../templates/menu.php";
    $conta = new conta();
    $ContaPrincipal = $conta->Contax($usu['id'])->fetch(PDO::FETCH_ASSOC);
    $num = $conta->Nums($ContaPrincipal['id']);
?>

<div class="full">
<section>
    <div class="titulo">
        	<h1>Selecione uma Conta</h1>
    </div>
    <div class="conteudo">
        <div class="conteudoConta">

            <div class="cc2">

                <div class="conta">
                    <div class="NomeConta">
                        <h1>Conta Principal</h1>
                    </div>
                    <div class="descConta">
                        <ul>   
                            <li><b>Nome:</b> Conta Principal</li>
                            <li><b>Listas:</b>  <?= $num['listas'] ?> Listas</li>
                            <li><b>Objetivos:</b> <?= $num['objetivos'] ?> Objetivo</li>
                        </ul>
                    </div>
                    <div class="entraConta">
                        <a href="" class="btn">Entrar!</a>
                    </div>
                </div>

              
                <!-- <div class="conta">
                    <div class="NomeConta">
                        <h1>Conta </h1>
                    </div>
                    <div class="descConta">
                        <ul>   
                            <li><b>Nome:</b> Conta Principal</li>
                            <li><b>Listas:</b>  <?= $num['listas'] ?> Listas</li>
                            <li><b>Objetivos:</b> <?= $num['objetivos'] ?> Objetivo</li>
                        </ul>
                    </div>
                    <div class="entraConta">
                        <a href="" class="btn">Entrar!</a>
                    </div>
                </div> -->

                <div class="conta">
                    <div class="NomeConta">
                        <h1>Criar conta!</h1>
                    </div>
                    <div class="entraConta">
                        <a href="" class="btn">Criar!</a>
                    </div>
                </div>
                
                <div class="ars"></div>
                
            </div>
        </div>
    </div>
</section>

</div>

<script>
    titulo("Página Inicial","Página Inicial");
</script>
