<?php

use Controller\testController;
use Model\test;
use Controller\abc;

include "Autoloader.php";


// var_dump($data->getData());




class Hello extends Framework\Base
{
    /*
    * @write
    */
    protected $_world;
    public function setWorld($value)
    {
        $this->_world = $value;
    }
    
    public function getWorld()
    {
        return $this->_world;
    }
}

$hello = new Hello();
$hello->world = "foo!";
echo $hello->world;