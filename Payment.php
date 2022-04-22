<?php

class Payment {
    public $type; //carta di credito/debito, bancomat ecc...
    public $card_number; //numero carta
    public $cvv; //codice di controllo
    public $circuit; //circuito
    public $owner;
    public $expiration;

    public function __construct (int $number, string $_owner, int $_cvv, $expDate) {
        $this->card_number = $number;
        $this->owner = $_owner;
        $this->cvv = $_cvv;
        $this->expiration = $expDate;
    }

    //eventuale metodo che controlla la data di scadenza
}