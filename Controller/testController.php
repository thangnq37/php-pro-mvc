<?php
namespace Controller;

use Model\test;

class testController{

    public function getData(){
        $test = new test();
        return $test->Data();
    }
}