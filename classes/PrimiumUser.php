<?php
require_once __DIR__ . "/User.php";

class PremiumUser extends User {
    protected $shippingCosts = 0;

    public function __construct($_name, $_surname, $_address, $_shoppingCart = [], $_creditCard = NULL)
    {
        parent :: __construct($_name, $_surname, $_address, $_shoppingCart = [], $_creditCard = NULL);
    }
}