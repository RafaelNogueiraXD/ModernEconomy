<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../templates/icone.png">
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
    echo "<script>
            var cor =".$usu['cor']." 
            var conta =".$_SESSION['conta']." 
            var idu =".$usu['id']." 
         </script>";
?>
<body>
    <header class="h">
        <div class="slogan">
            <div>
                <!-- <img src="../templates/icone.png" alt="Slogan"> -->
            </div>

        </div>
        <div class="url">
            <p>Endereco:</p>
            <h1 id="urlt">URL</h1>
        </div>
        <div id="mode">
                <!-- <button id="dark">dark mode</button>
                <button id="light">Light mode</button> -->
                <ul class="menu">
                    <li><a href="#">Options</a>
                        <ul>
                            <li><a href="../usuario/perfil.php">Perfil</a></li>
                            <li><a  id="dark">Dark Mode (BETA)</a></li>
                            <li><a  id="light">Light Mode (BETA)</a></li>
                            <li><a href="../sair/sair.php">Sair</a></li>                                     
                        </ul>
                    </li>     
                </ul>
        </div>
    </header>
    <div class="full">
        <header class="v">
            <div class="slogan">
             
                    <img src="../../style/img/slogan.png" alt="Slogan" width="60%">
       

            </div>
            <div class="lista">
                <a href="../conta/TelaInicial.php">
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
                <a href="" class="iconehide">
                    <div>
                        <p class="icone" >I</p>
                        <p class="option">Gráficos</p>
                    </div>
                </a>
                <a href="" class="iconehide">
                    <div>
                        <p class="icone" >I</p>
                        <p class="option">Listas</p>
                    </div>
                </a>
                <a href="" class="iconehide">
                    <div>
                        <p class="icone" >I</p>
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
            </div>
        </header>
    </div>
<script src="../../js/cores.js"></script>
<script src="../../js/main.js"></script>
<script>

</script>
</body>
</html>