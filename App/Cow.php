<?php

namespace App;

class Cow
{
    public $id;
    
    public function __construct()
    {
        $this->id = uniqid('', false);
    }
    
    public function getMilk(){
        return rand(8, 12);
    }
}