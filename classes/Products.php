<?php

class Products {
  private float $prezzo;
  private string $titolo;
  
  public function __construct($prezzo, $titolo) {
    $this->titolo = $titolo;
    $this->prezzo = $prezzo;
    
  
  }
  
  
  /**
   * @return string
   */
  public function getTitolo(): string {
    return $this->titolo;
  }
  
  /**
   * @param  string  $titolo
   */
  public function setTitolo(string $titolo): void {
    $this->titolo = $titolo;
  }

  
  /**
   * @return float
   */
  public function getPrezzo(): float {
    return $this->prezzo;
  }
  
  /**
   * @param  float  $prezzo
   */
  public function setPrezzo(float $prezzo): void {
    $this->prezzo = $prezzo;
  }
  

}