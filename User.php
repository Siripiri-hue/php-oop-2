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
    public $registered; //booleano, registrato sì o no
    public $sconto = 0;
    public $cart;
    public $payment;

    function __construct (string $_email, bool $_registered) {
        $this->email = $_email;
        $this->registered = $_registered;
        // $this->cart = new Cart();
    }

    private function setSconto () {
        if ($this->registered)
        {
            $this->sconto = 20;
        }
    }

    public function setPaymentMethod ($_type, $number, $_cvv, $_circuit) {
        $this->payment = new Payment($_type, $number, $_cvv, $_circuit);
    }
}