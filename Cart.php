<?php

require __DIR__ 'Product.php';

class Cart {
    public $items_num = 0; //quantità totale dei prodotti
    // public $item_num; //quantità di un prodotto
    public $products = [];
    public $subtotal;

    public function addItem ($_product) {
        $this->product = $_product;
        array_push($this->product);
    }
}