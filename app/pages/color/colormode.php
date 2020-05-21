<?php
    require_once "../../Model/banco.php";
    $usu = new crud();

    if(isset($_GET['color'],$_GET['id'])){
        $cor = $_GET['color'];
        $id = $_GET['id'];
        $usu->update("usuario","cor = $cor","where id=$id",array());
        echo $cor;
    }
    


?>