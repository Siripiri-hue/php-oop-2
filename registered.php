<?php

require __DIR__ . '/user.php';

class Registered extends User {
    private $password;

    public function __construct($_name, $_lastname, $_email, $_password) {
        parent::__construct($_name, $_lastname, $_email, 0.2);
        $this->password = $_password;
    }
}