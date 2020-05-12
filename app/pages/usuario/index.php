<?php
    require_once "../../Model/usuario.php";
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
                session_start();
                $id = $row['id'];
                $_SESSION['id'] = $id;
                $_SESSION['email'] = $row['email'];
                header("Location: perfil.php");
            }
            
        }else{
            header("Location: ../../../apresent/pages/login.html");
        }
    }
    // cadastro
    if(isset($_POST['nome'],$_POST['email'],$_POST['senha']))
    {
        $array =[$_POST['nome'] ,$_POST['email'], $_POST['senha']];  
        $dados = $db->select("*","usuario","where email='$array[1]'",array());

       if($dados->rowCount() > 0)
        {
            header("Location: ../../../apresent/pages/cadastro.php");        
        }else{
            $a = $db->insert("usuario","default,'$array[0]','$array[1]','0','','0','$array[2]','Não informado'",array());
            session_start();
            $_SESSION['email'] = $array[1];
            header("Location: ../config/start.php");
        }
    }
?>