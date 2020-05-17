<?php
include_once "banco.php";
include_once "../../classes/conection.php";

class conta extends crud{

    public function CriaContaPrincipal($id,$saldo){
        $data = date('y-m-d');
        $ct = crud::insert("conta","default,'Principal','Geral','$saldo','$data','$id'",array());
        $relaciona = conta::Contax($id)->fetch(PDO::FETCH_ASSOC);
        $idconta = $relaciona['id'];
        crud::insert("relaciona","default,'$idconta','$id',''",array());
        return $relaciona;
    }

    public function vercontas(){
        $result = crud::select("*","conta","",array());
        return $result;
    }

    public function Contax($id){
        $result = crud::select("*","conta"," WHERE criador=$id and nome='principal'",array());                                             
        return $result;
    }

    public function ContaPrincipal($id){
        $result = crud::select("*"," 
                                from relaciona as r 
                                inner join conta c on c.id = r.idconta
                                inner join usuario u on r.idUsuario = u.id","
                                where c.nome='Principal' and c.criador = $id;
                                ",array());
        return $result;
    }
    public function login($email,$senha)
    {
        $dados = crud::select("*","conta","where email='$email' and password='$senha' ",array());
        return $dados;
    }
    public function insere($dado1,$dado2,$dado3){
        $a = crud::insert("conta","default,'$dado1','$dado2','0','','0','$dado3','Não informado'",array());
        return $a;
    }
}


?>