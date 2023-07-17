<?php

class sms extends system 
{
    private $risposta;
    private $not_lettura;

    public function __construct($_mittente, $_destinatario, $_oggetto, $_contenuto, $_suono, $risposta, $not_lettura)
    {
        parent::__construct($_mittente, $_destinatario, $_oggetto, $_contenuto, $_suono);
        $this->risposta = $risposta;
        $this->not_lettura = $not_lettura;
    }     
    
    public function getRisposta()
    {
        return $this->risposta;
    }

    public function getLettura()
    {
        return $this->not_lettura;
    }
}

?>
