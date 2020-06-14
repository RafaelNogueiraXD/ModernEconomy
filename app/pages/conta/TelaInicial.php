<?php
    include "../../Model/conta.php";
    include "../templates/menu.php";
    $conta = new conta();
    $ContaPrincipal = $conta->ContaPrincipal($usu['id'])->fetch(PDO::FETCH_ASSOC);
    $num = $conta->Nums($ContaPrincipal['id']);
    $contas = $conta->Contax($usu['id']);

    if(isset($_POST['nome']))
    {
        $conta->insere($_POST['nome'],$_POST['tipo'],$_POST['saldo'],$usu['id']);
        header("Location: TelaInicial.php");
    }

?>

<div class="full">
<section>
    <div class="titulo">
        	<h1>Selecione uma Conta</h1>
    </div>
    <div class="conteudo">
        <div class="conteudoConta">
            <div class="filtro">
               <div class="btnFiltrar">
                    
               </div>
               <div class="filtros">
               </div>
               <div class="add">
                        <a id="abreModal" class="btn-efect" style="cursor:pointer">Adicionar</a>
               </div>
            </div>
            <div class="cc2">

                <div class="conta">
                    <div class="NomeConta">
                        <h1>Conta Principal</h1>
                    </div>
                    <div class="descConta">
                        <ul>   
                            <li><b>Tipo:</b> <?= $ContaPrincipal['tipo'] ?></li>
                            <li><b>Listas:</b>  <?= $num['listas'] ?> Listas</li>
                            <li><b>Objetivos:</b> <?= $num['objetivos'] ?> Objetivo</li>
                        </ul>
                    </div>
                    <div class="entraConta">
                        <a href="" class="btn">Entrar!</a>
                    </div>
                </div>

              <?php
                while($linha = $contas->fetch(PDO::FETCH_ASSOC)){
                  if($linha['Nome'] == 'Principal'){

                  }else{
                    $num = $conta->Nums($linha['id']);
                
              ?>
                <div class="conta">
                    <div class="NomeConta">
                        <h1><?= $linha["Nome"] ?> </h1>
                    </div>
                    <div class="descConta">
                        <ul>   
                            <li><b>Tipo:</b>  <?= $linha['tipo'] ?> </li>
                            <li><b>Listas:</b> <?= $num['listas'] ?>  Listas</li>
                            <li><b>Objetivos:</b>  <?= $num['objetivos'] ?> Objetivo</li>
                        </ul>
                    </div>
                    <div class="entraConta">
                        <a href="" class="btn">Entrar!</a>
                    </div>
                </div>

                <?php
                    }
                }
                
                ?>

                <div class="conta">
                    <div class="NomeConta">
                        <h1>Criar conta!</h1>
                    </div>
                    <div class="entraConta">
                        <a id="abreModal2" style="cursor:pointer" class="btn">Criar!</a>
                    </div>
                </div>
                
                <div class="ars"></div>
                
            </div>
        </div>
    </div>

    <div class="modal">
        <div class="conteudoModal">
            <div class="inicioModal">
                    <div>
                        <h1>Adicionar uma Conta</h1>
                    </div>
                    <div>
                        <button id="fechaModal">X</button>
                    </div>
            </div>
                <form action="TelaInicial.php" method="POST">
            <div class="meioModal">
                
                <div id="campoP">
                    <label for="Nome">Nome: </label>
                    <input type="text" name="nome" placeholder="Digite o nome da conta" id="nome">
                </div>
                <span class="linhaME"></span>
                
                <div id="campoP">
                    <label for="Tipo">Tipo: </label>
                    <input type="text" name="tipo" placeholder="Digite seu tipo" id="tipo">
                </div>
                <span class="linhaME"></span>
                
                 <div id="campoP">
                    <label for="Saldo">Saldo: </label>
                    <input type="text" name="saldo" placeholder="Digite o saldo" id="saldo">
                </div>
                <span class="linhaME"></span>
            </div>
                <div class="botoes">
                    <div>
                        <input type="submit" value="Adicionar">
                    </div>
                </div>
                </form>
                
        </div>
    </div>


</section>

</div>

<script>
    Modal(); 

    titulo("Página Inicial","Página Inicial");
</script>

