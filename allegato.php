<?php

class allegato 
{
    private $nome;
    private $dimensione;

    public function __construct(String $nome, String $dimensione)
    {
        $this->nome = $nome;
        $this->dimensione = $dimensione;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getDimensione(){
        return $this->dimensione;
    }
}

?>