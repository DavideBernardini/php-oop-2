<?php
class User {
    protected $name;
    protected $surname;
    protected $address;
    protected $shoppingCart;
    protected $creditCard;
    protected $shippingCosts = 10;

    public function __construct($_name, $_surname, $_address, $_shoppingCart = [], $_creditCard = NULL)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->address = $_address;
        $this->creditCard = $_creditCard;
        $this->shoppingCart = $_shoppingCart;
    }

    public function setShoppingCart($_product)
    {
        $this->ShoppingCart[] = $_product;
    }

    public function setCreditCard($_cc)
    {
        $this->creditCard = $_cc;
    }
}