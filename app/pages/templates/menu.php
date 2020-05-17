<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <script src="../../js/jquery.js"></script>
    <title id="title">Document</title>
</head>
<?php
    require_once "../../Model/usuario.php";
    $usuario = new usuario();
    session_start();
    if(isset($_SESSION['email']))
    {
       $usu =  $usuario->Email($_SESSION['email'])->fetch(PDO::FETCH_ASSOC);
    }
    if(isset($_SESSION['id']))
    {
       $usu =  $usuario->Email($_SESSION['id'])->fetch(PDO::FETCH_ASSOC);
    }
?>
<body>
    <header class="h">
        <div class="slogan">
            <div>
                <h1>SLOGAN</h1>
            </div>

        </div>
        <div class="url">
            <p>Endereco:</p>
            <h1 id="urlt">URL</h1>
        </div>
        <div id="mode">
                <button id="dark">dark mode</button>
                <button id="light">Light mode</button>
        </div>
    </header>
    <div class="full">
        <header class="v">
                <div class="slogan">
                    <h1>SLOGAN</h1>
            </div>
            <div class="lista">
                <a href="">
                    <div>
                        <p class="icone">I</p>
                        <p class="option">Tela inicial</p>
                    </div>
                </a>
                <a href="../usuario/perfil.php">
                    <div>
                        <p class="icone">I</p>
                        <p class="option">Perfil</p>
                    </div>
                </a>
                <a href="">
                    <div>
                        <p class="icone">I</p>
                        <p class="option">Gráficos</p>
                    </div>
                </a>
                <a href="">
                    <div>
                        <p class="icone">I</p>
                        <p class="option">Listas</p>
                    </div>
                </a>
                <a href="">
                    <div>
                        <p class="icone">I</p>
                        <p class="option">Objetivos</p>
                    </div>
                </a>
                <a href="">
                    <div>
                        <p class="icone">I</p>
                        <p class="option">Compartilhada</p>
                    </div>
                </a>
                <a href="">
                    <div>
                        <p class="icone">I</p>
                        <p class="option">Estimativa</p>
                    </div>
                </a>
                <a href="">
                    <div>
                        <p class="icone">I</p>
                        <p class="option">Assinatura</p>
                    </div>
                </a>
                <a href="../sair/sair.php">
                    <div class="sair">
                        Sair
                    </div>
                </a>
            </div>
        </header>
    </div>
<script src="../../js/main.js"></script>
<script>
    $("#light").hide();

    $("#dark").click(function(){
        setTimeout(function(){
            $("header.v").css("background-color","#262626"),
            $("header.h").css("background-color","#262626"),
            $("b").css("color","white"),
            $("body").css("background-color","#1a1a1a"),
            $("#dark").hide(),
            $("#light").fadeToggle(500)
        })
    });
    $("#light").click(function(){
        $("header.v").css("background-color","#ff4700ff"),
        $("header.h").css("background-color","#ff4700ff"),
        $("b").css("color","black"),
        $("body").css("background-color","white"),
        $("#dark").fadeToggle(500),
        $("#light").hide()
    });
</script>
</body>
</html>