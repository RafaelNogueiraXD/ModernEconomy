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

    public function Contasx($id){
        $result = crud::select("*","conta"," WHERE criador=$id",array());                                             
        return $result;
    }

    public function Contax($id,$idconta){
        $result = crud::select("*","conta"," WHERE criador=$id and id=$idconta",array());                                             
        return $result;
    }

    public function ContaPrincipal($id){
        $result = crud::select("*","conta"," WHERE criador=$id and nome='principal'",array());                                             
        return $result;
    }
    
    public function Nums($idconta)
    {
        $listas = crud::select("*","lista l inner join conta c on c.id=l.idconta",
                                "where c.id = $idconta",array())->rowCount();

        $objetivos = crud::select("*","objetivo o inner join conta c on c.id=o.idconta",
                                "where c.id = $idconta",array())->rowCount();
        $num = array('listas' => $listas, 'objetivos' => $objetivos);
        return $num;
    }


    public function insere($dado1,$dado2,$dado3,$usuario){
        $data = date('y-m-d');
        $a = crud::insert("conta","default,'$dado1','$dado2','$dado3','$data','$usuario'",array());
        return $a;
    }
}



?>