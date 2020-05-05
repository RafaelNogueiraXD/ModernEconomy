<?php
include "menu.html";
include "../Model/usuario.php";
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
                $banco = new usuario();
                foreach ($banco->usuconta() as $row) {
            ?>
            <tr>
                    <td><?= $row['id']?></td>
                    <td><?= $row['nome']?></td>
                    <td><?= $row['ic']?></td>
                    <td><?= $row['nc']?></td>
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
