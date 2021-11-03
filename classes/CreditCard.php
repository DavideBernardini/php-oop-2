<?php
class CreditCard {
    protected $number;
    protected $type;
    protected $cvv;
    protected $expiration;

    public function __construct($_number, $_type, $_cvv, $_expiration)
    {
        $this->number = $_number;
        $this->type = $_type;
        $this->cvv = $_cvv;
        $this->expiration = $_expiration;
    }
}