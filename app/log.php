<?php
    require "database/conection.php";
    $db = new banco();
    // login
    if(isset($_POST['emaillog'],$_POST['senhalog']))
    {

    }
    // cadastro
    if(isset($_POST['nome'],$_POST['email'],$_POST['senha']))
    {
     $array =[$_POST['nome'] ,$_POST['email'], $_POST['senha']];  
    // $db->insert("usuario",);
    }
?>