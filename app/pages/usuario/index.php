<?php
    require_once "../../Model/conta.php";
    require_once "../../Model/usuario.php";
    $conta = new conta();
    $usuario = new usuario();
    // login
    if(isset($_POST['emaillog'],$_POST['senhalog']))
    {
        $email = $_POST['emaillog'];
        $senha = $_POST['senhalog'];
        $dados = $usuario->login($email,$senha);
        if($dados->rowCount() > 0)
        {
            foreach($dados as $row){
                session_start();
                $id = $row['id'];
                $_SESSION['id'] = $id;
                $_SESSION['email'] = $row['email'];
                $_SESSION['conta'] = 0;
                
                $query = $conta->Contax($id);
                $row = $query->rowCount();
                $ar = $query->fetch(PDO::FETCH_ASSOC);
                if($row > 0)
                {
                    header("Location: ../conta/TelaInicial.php");

                }else{
                    header("Location: ../conta/config.php");
                }
            }
            
        }else{
            header("Location: ../../../apresent/pages/login.html");
        }
    }
    // cadastro
    if(isset($_POST['nome'],$_POST['email'],$_POST['senha']))
    {
        $array =[$_POST['nome'] ,$_POST['email'], $_POST['senha']];  
        $dados = $usuario->Email($array[2]);

       if($dados->rowCount() > 0)
        {
            header("Location: ../../../apresent/pages/cadastro.php");        
        }else{
            $a = $usuario->insere($array[0],$array[1],$array[2]);
            session_start();
            $_SESSION['email'] = $array[1];
            header("Location: ../conta/config.php");
        }
    }
?>