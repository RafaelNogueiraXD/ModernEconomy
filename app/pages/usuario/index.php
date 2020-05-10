<?php
    require_once "../../Model/banco.php";
    $db = new crud();
    // login
    if(isset($_POST['emaillog'],$_POST['senhalog']))
    {
        $email = $_POST['emaillog'];
        $senha = $_POST['senhalog'];
        $dados = $db->select("*","usuario","where email='$email' and password='$senha' ",array());
        print_r($dados);
        if($dados->rowCount() > 0)
        {
            echo "<hr>tem um usuario com essas caracteristicas";
            //echo "olá".$dados['nome'];
            foreach($dados as $row){
                echo "Olá".$row['nome'];
                
            }
            
        }else{
            header("Location: ../../../apresent/pages/login.html");
        }
    }
    // // cadastro
    // if(isset($_POST['nome'],$_POST['email'],$_POST['senha']))
    // {
    //  $array =[$_POST['nome'] ,$_POST['email'], $_POST['senha']];  
    // // $db->insert("usuario",);
    // }
    // header("Location: pages/perfil.php");
?>