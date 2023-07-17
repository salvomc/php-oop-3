<?php

class system 
{
    static public $suono = 'DRIIINNN'; 
    private $mittente;
    private $destinatario;
    private $oggetto;
    private $contenuto;


    public function __construct(String $mittente, String $destinatario, String $oggetto, String $contenuto){
        $this->mittente = $mittente;
        $this->destinatario = $destinatario;
        $this->oggetto = $oggetto;
        $this->contenuto = $contenuto;

    }
    
    public function getMittente(){
        return $this->mittente;
    }

    public function getDestinatario(){
        return $this->destinatario;
    }

    public function getOggetto(){
        return $this->oggetto;
    }

    public function getContenuto(){
        return $this->contenuto;
    }

    public function invio(){
        return 'Comunicazione inviata';
    }

}

?>
