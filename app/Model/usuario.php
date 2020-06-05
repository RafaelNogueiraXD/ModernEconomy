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
    public function login($email,$senha)
    {
        $dados = crud::select("*","usuario","where email='$email' and password='$senha' ",array());
        return $dados;
    }


    public function edita($id,$nome,$email,$cep,$datanasc,$senha,$desc){
        $a = crud::update("usuario",
        "nome = '$nome', email = '$email', Cep = '$cep' , data_nasc = '$datanasc' , `password` = '$senha' , `description` = '$desc'",
        "where id = $id",
        array());
        return $a;
        // update usuario set 
        // nome = 'rafalito', email = 'rafa10@hotmail.com', Cep = 312424512 , data_nasc = '1990-02-01' , `password` = 1234 , `description` = 'desc do rafa'
        // where id = 1;
    }


    public function insere($dado1,$dado2,$dado3){
        $a = crud::insert("usuario","default,'$dado1','$dado2','0','','0','$dado3','Não informado'",array());
        return $a;
    }
    public function script($id){
        echo "  <script>
                    var id =".$color."
                </script>";
    }

}


?>