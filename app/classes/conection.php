<?php
abstract class conection
{
    public function conection(){
        try{
            $Banco = new PDO("mysql:host=localhost;dbname=moderneconomy","root","");
            return $Banco;
        }catch (PDOException $Erro){
            return $Erro->getMessage();
        }
    }
}

?>