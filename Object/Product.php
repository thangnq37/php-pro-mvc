<?php

namespace Model;

class Product{
    public $name = '';
    public $price = 0;
    public $type = '';

    public function __construct($name, $price, $type){
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
    }
}