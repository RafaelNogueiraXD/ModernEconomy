<?php
class banco
{
    public function conecta(){
        try{
            $Banco = new PDO("mysql:host=localhost;dbname=moderneconomy",
            "root","");
            return $Banco;
        }catch (PDOException $Erro){
            return $Erro->getMessage();
        }
    }
}

?>