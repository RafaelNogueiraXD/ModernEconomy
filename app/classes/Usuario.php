<?php
include "conection.php";

class usuario extends conection
{
    protected $id,$nome,$desc,$email,$cep,$cidade;

    function __construct($id,$nome,$desc,$email,$cep,$cidade){
        $this->email = $email;
        $this->cep = $cep;
        $this->desc = $desc;
        $this->id = $id;
        $this->email = $email;
        $this->cidade = $cidade;
        $this->nome = $nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function getCep()
    {
        return $this->cep;
    }

    public function getDesc()
    {
        return $this->desc;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }
    
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    public function setDesc($desc)
    {
        $this->desc = $desc;

        return $this;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
    
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}




?>