<?php
class Product {
    protected $name;
    protected $category;
    protected $brand;
    protected $price;

    public function __construct($_name, $_category, $_brand, $_price)
    {
        $this->name = $_name;
        $this->category = $_category;
        $this->brand = $_brand;
        $this->price = $_price;
    }
}