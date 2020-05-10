<?php
include "../templates/menu.html";
require_once "../../Model/usuario.php";

$usu = new usuario();
?>
<div class="full">
<section>
    <div class="titulo">
        <h1>Usuários cadastrados</h1>
    </div>
    <div class="conteudo">
        <table>
            <thead>
                <th>ID</th>
                <th class="md">Nome</th>
                <th class="md">Conta</th>
                            <th>Investido</th>
            </thead>
            <?php
                foreach ($usu->usuconta() as $row) {
            ?>
            <tr>
                    <td><?= $row['id']?></td>
                    <td><?= $row['nome']?></td>
                    <td><?= $row['email']?></td>
                    <td><a class="btn-efect" href="">Ver</a> </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</section>
<script>
    $("#urlt").html("Conta  > Objetivos");
</script>
</div>
