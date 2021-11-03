<?php
require_once __DIR__ . "/Product.php";

class SoftwareProduct extends Product {
    protected $operatingSystem;
    protected $instrument;

    public function __construct($_name, $_category, $_brand, $_price, $_operatingSystem, $_instrument)
    {
        parent :: __construct($_name, $_category, $_brand, $_price);
        
        $this->operatingSystem = $_operatingSystem;
        $this->instrument = $_instrument;
    }

}
