<?php
include_once "../../classes/conection.php";

class usuario extends banco{

    public function usucontas(){
        $result = banco::conecta();
        $result = $result->query("select * from usuario");
        return $result;
    }
}


?>