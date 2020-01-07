<?php

namespace App;

class Chicken
{
    public $id;
    
    public function __construct()
    {
        $this->id = uniqid('', false);
    }
    
    public function getEggs()
    {
        return rand(0, 1);
    }
}