<?php
include "../templates/menu.php";    
include "../../Model/conta.php";
if(isset($_POST["saldo"])){
    $conta = new conta();
    $newCount = $conta->CriaContaPrincipal($usu['id'],$_POST['saldo']);
    header("Location: ../usuario/perfil.php");
}
?>
<div class="full">
    <section>
        <div class="titulo">
            <h1>Criando Conta Principal</h1>

        </div>
        <div class="conteudo">
            <div class="config">
                <?php
                if(isset($rows))
                {
                    echo $rows;
                }
                ?>
                <form action="config.php" method="POST">
                <div class="label">
                    <label for="saldo">Seu saldo Inicial: <i>I</i></label>
                </div>
                <div>
                    <input required type="number" name="saldo" id="saldo" placeholder="Digite o saldo Da sua conta Principal">
                </div>
                <div>
                    <input type="submit" value="Criar!" class="btn" style="width:100px;margin-left:35%;padding-bottom: 12%;">
                </div>
                </form>
            </div>
            <div class="alerts">

                <p><i>X</i> Não é necessário <?= $usu['id']?></p>
                <p><i>I</i> É necessário</p>
            </div>
        </div>
    </section>
</div>

<script>

    $(".lista").css("display","none");
    titulo("Configurando","Configurando sua conta...");
</script>