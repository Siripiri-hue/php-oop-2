<?php

class Product {
    public $name; //denominazione del prodotto
    public $price; //prezzo
    public $categories = []; //cibo, gioco, cuccia ecc
    public $notes; //note
    public $available_quantity;

    function __construct (string $_name, float $_price, array $cat, int $_quantity) {
        $this->name = $_name;
        $this->price = $_price;
        $this->categories = $cat;
        $this->available_quantity = $_quantity;
    }

    // eventually add remove category
}