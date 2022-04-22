<?php

// require __DIR__ . '/product.php';

class Cart {
    public $items_num = 0; //quantità totale dei prodotti
    // public $item_num; //quantità di un prodotto
    public $products = [];
    public $subtotal;

    // fn che aggiunge al carrello i prodotti
    public function addItem ($_product, $_quantity = 1) {

        //aggiungere controllo se prodotto esiste già

        // array_push($this->products, $_product);

        $this->products = [
            'item' => $_product,
            'quantity' => $_quantity,
        ];
    }

    // eventually add remove item
}