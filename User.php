<?php

// require __DIR__ 'Cart.php';
// require __DIR__ 'Payment.php';

class User {
    // public $username; 
    public $email;
    // private $password; 
    public $name;
    public $lastname;
    public $address;
    // public $registered; //booleano, registrato sì o no
    public $sconto = 0;
    public $cart;
    public $payments = [];

    function __construct (string $_email, string $_name, string $_lastname) {
        $this->email = $_email;
        $this->name = $_name;
        $this->lastname = $_lastname;
        // $this->cart = new Cart();
    }

    // eventualmente aggiungere set/get sconto, con opportuni controlli
    // private function setSconto () {
    //     if ($this->registered)
    //     {
    //         $this->sconto = 20;
    //     }
    // }

    // fn che aggiunge un obj card all'array dei pagamenti
    public function setPaymentMethod ($card) {
        // controllare se il metodo di pagamento è valido
        $this->payments[] = $card;
    }
}