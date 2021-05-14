<?php
class Items
{
    private $n_item;
    private $price;
    private $quantity;
    private $total;

    public function __construct($item, $price, $quantity)
    {
        $this->n_item = $item;
        $this->price = $price;
        $this->quantity = $quantity;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getItem()
    {
        return $this->n_item;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }
    public function getTotal()
    {
        $this->total = $this->quantity * $this->price;
        return $this->total;
    }
}
