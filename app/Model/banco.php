<?php

class banco extends conection {

    #atributos
    private $crud;
    private $contador;

    #Preparacao das declativas
    private function PS($Query , $Parametros)
    {
        $this->countParametros($Parametros);
        $this->crud= $this->conecta() -> prepare($Query);

        if($this->contador > 0){
            for($i = 1 ; $i <= $this->contador ; $i++){
                $this->crud->bindValue($i,$Parametros[$i -  1 ]);
            }
        }
        
        $this->crud->execute();
    }

    #Contador de Parametros
    private function countParametros($Parametros)
    {
        $this->contador = count($Parametros);
    }
    // insere na tabela
    public function insert($tabela,$condicao,$Parametros){
        $this->PS("insert into {$tabela} values ({$condicao}) ", $Parametros);
        return $this->crud;
    }
    // busca na tabela
    public function select($campos,$tabela,$condicao,$Parametros){
        $this->PS("select {$campos} from {$tabela} {$condicao}", $Parametros);
        return $this->crud;
    }

    public function update($tabela,$campos,$condicao,$Parametros){
        $this->PS("update {$tabela} set {$campos} {$condicao}",$Parametros);
        return $this->crud;
    }
    public function delete($tabela,$condicao,$Parametros){
        $this->PS("delete from {$tabela} where {$condicao}",$Parametros);
        return $this->crud;
    }
}


?>