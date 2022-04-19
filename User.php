<?php

class User {
    public $username; 
    public $name;
    public $lastname;
    public $address;
    public $registered; //booleano
    public $sconto = 0;

    private function setSconto () {
        if ($this->registered)
        {
            $this->sconto = 20;
        }
    }
}