<?php

include_once __DIR__ . "/Products.php";

class Food extends Products {
  protected string $scadenza;
 
  
  public function __construct($titolo, $prezzo, $scadenza) {
    parent::__construct($prezzo, $titolo);
    
    $this->scadenza = $scadenza ;
  }
  
  /**
   * @return string
   */
  public function getScadenza(): string {
    return $this->scadenza;
  }
  
  /**
   * @param  string  $scadenza
   */
  public function setScadenza(string $scadenza): void {
    $this->scadenza = $scadenza;
  }
  


}