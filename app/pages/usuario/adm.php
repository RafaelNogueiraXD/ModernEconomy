<?php
include "../templates/menu.html";
require_once "../../Model/usuario.php";

?>
<div class="full">
<section>
    <div class="titulo">
        <h1>Usuarios cadastrados</h1>
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
            session_start();
            $id = $_SESSION['id'];
            $usu = new usuario($id);
                foreach ($usu->usucontas() as $row) {
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
    $("#urlt").html("Perfil > Usuarios Cadastrados");
</script>
</div>
