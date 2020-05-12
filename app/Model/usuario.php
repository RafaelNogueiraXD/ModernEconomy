<?php
include_once "../../classes/conection.php";

class usuario extends banco{

    public function usuconta($id){
        $result = banco::conecta();
        $result = $result->prepare("SELECT * FROM usuario WHERE id = $id");                                             
        $result->execute(array("id"=>$id));
        $usuario = $result->fetch(PDO::FETCH_ASSOC);
        return $usuario;
    }

    public function usucontas(){
        $result = banco::conecta();
        $result = $result->query("select * from usuario");
        return $result;
    }
    public function Email($email){
        $result = banco::conecta();
        $result = $result->prepare("SELECT * FROM usuario WHERE id = $email");                                             
        $result->execute(array("email"=>$email));
        $usuario = $result->fetch(PDO::FETCH_ASSOC);
        return $usuario;
    }
}


?>