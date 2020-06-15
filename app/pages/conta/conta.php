<?php
  include "../../Model/conta.php";
  include "../templates/menu.php";
  $conta = new conta();

    if(isset($_GET['id'])){
        $_SESSION['conta'] = $_GET['id'];
        header("Location: conta.php");
    }
    $contax = $conta->Contax($usu['id'],$_SESSION['conta'])->fetch(PDO::FETCH_ASSOC);
?>


<div class="full">
    <section>
        <div class="titulo">        
            <h1>conta  <h1 class="tmodern" style="margin-left:10px"><?= $contax['Nome']?></h1></h1>
        </div>
        <div class="conteudo">
            <div class="contax">
                <div>
                    <h1 class="tmodern"> + Conta</h1>
                    <a href="" class="btn">Ver</a>
                </div>
                <div>
                    <fieldset>
                        <legend>Descrição</legend>
                        <?=  $contax['desc'] ?>
                    </fieldset>
                    <a href="" class="btn-efect">Excluir</a>
                </div>

                <span class="linhaME"></span>

                <div>
                    <h1 class="tmodern"> + Recados</h1>
                    <h1 class="Numrecados">0</h1>
                </div>
                <div class="recadox">
                    <p>aaaaaaaaaa</p>
                    <a href=""> X </a>
                </div>
            
            </div>
        </div>

    </section>
</div>

<script>
    titulo("Conta <?= $contax['Nome'] ?>","Conta <?= $contax['Nome'] ?>");
</script>