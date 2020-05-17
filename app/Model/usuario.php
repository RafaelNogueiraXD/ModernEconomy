<?php
include_once "banco.php";
include_once "../../classes/conection.php";

class usuario extends crud{

    public function usuconta($id){
        $result = crud::select("*","usuario","WHERE id = $id",array());                                             
        $usuario = $result->fetch(PDO::FETCH_ASSOC);
        return $usuario;
    }

    public function usucontas(){
        $result = crud::select("*","usuario","",array());
        return $result;
    }

    public function Email($email){
        $result = crud::select("*","usuario"," WHERE id = $email",array());                                             
        return $result;
    }

    // public function ContaPrincipal($id){
    //     $result = crud::select("u.nome,c.nome"," 
    //                                 usuario as u 
    //                                 inner join conta c 
    //                                 inner join relaciona r 
    //                                 on $id = r.idconta ","
    //                                 where c.nome='Principal';
    //                             ",array());
    //     $result = $result->rowCount();
    //     return $result;
    // }
    public function login($email,$senha)
    {
        $dados = crud::select("*","usuario","where email='$email' and password='$senha' ",array());
        return $dados;
    }
    public function insere($dado1,$dado2,$dado3){
        $a = crud::insert("usuario","default,'$dado1','$dado2','0','','0','$dado3','Não informado'",array());
        return $a;
    }
}


?>