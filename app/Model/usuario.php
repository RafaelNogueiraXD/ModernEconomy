<?php
include "banco.php";

class usuario extends banco{


    public function usuconta(){
        $result = banco::conecta();
        $result = $result->query("Select o.id,o.nome,c.id as ic,c.nome as nc,o.investido 
        from objetivo o
        inner join conta c
        on c.id=o.idconta
        order by o.id asc");
        return $result;
    }

}
// $banco = new crud();

// function pega($banco){
//     $result = $banco->query("SELECT * from usuario");
//     print_r($result);

// }


?>