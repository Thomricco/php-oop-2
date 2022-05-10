<?php
include_once __DIR__ . "/CreditCard.php";


class User {

    protected $firstName;
    protected $lastName;
    protected $date;
    protected $username;
    protected $email;
    protected $creditCard;
    private array $indirizzo = [
        "via"       => "",
        "num"       => "",
        "citta"     => "",
        "provincia" => "",
        "nazione"   => "",
      ];


    public function __construct($firstName, $lastName, $date, $username, $email) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthDate = $date;
        $this->username = $username;
        $this->email = $email;
    
    }



    public function getName(){
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getBirthDate(){
        return $this->date;
    }

    public function getUsername(){
        return $this->getUsername();
    }

    public function getEmail(){
        return $this->email;
    }

    public function setCreditCard(CreditCard $creditCard){
        $this->creditCard = $creditCard;
    }

    public function getCreditCard(){
        return $this->creditCard;
    }

    /**
     * @return array|string[]
     */
    public function getIndirizzo(): array {
        return $this->indirizzo;
    }
    
    /**
     * @param  array|string[]  $indirizzo
     */
    public function setIndirizzo(array $indirizzo): void {
        $this->indirizzo = $indirizzo;
    }





}













?>