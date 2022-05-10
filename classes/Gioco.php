<?php

include_once __DIR__ . "/Products.php";

class Gioco extends Products {
    protected $tipologia;

    public function __construct($tipologia, $prezzo, $titolo, $descrizione = null)
    {
    
        parent::__construct($prezzo, $titolo, $descrizione);
        $this->tipologia = $tipologia;
    
    }

    public function getTipologia() {
        return $this->tipologia;
    }
  

  

}