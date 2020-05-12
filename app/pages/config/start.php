<?php
include "../templates/menu.html";    
require_once "../../Model/usuario.php";
require_once "../../Model/banco.php";
$db = new usuario();
session_start();
    $dados = $db->Email($_SESSION['email']);
    $_SESSION['id'] = $dados['password'];

?>
<div class="full">
    <section>
        <div class="titulo">
            <h1>Criando Conta</h1>

        </div>
        <div class="conteudo">
            dasdasdas
        </div>
    </section>
</div>

<script>
    titulo("Configurando","Configurando sua conta... - Etapa 1 de 3");
</script>