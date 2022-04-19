<?php

class Order {
    public $order_number;
    public $items_num; //quantità dei prodotti
    public $date; //data dell'ordine
    public $shipping_fee; //spese di spedizione
    public $total; //totale dell'ordine (subtotal + s.s.)
    public $dispatched; //booleano: spedito sì o no

    //inserire poi i dati del pagamento e dell'utente
}