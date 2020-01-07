<?php

namespace App;

class Farm
{
    public $chickens = [];
    public $cows = [];
    
    public $eggs = 0;
    public $milk = 0;
    
    public function setChickens($n)
    {
        while($n){
            $this->chickens[] = new Chicken();
            $n--;
        }
    }
    
    public function setCows($n)
    {
        while($n){
            $this->cows[] = new Cow();
            $n--;
        }
    }
    
    public function getChickens()
    {
        return count($this->chickens);
    }
    
    public function getCows()
    {
        return count($this->cows);
    }
    
    public function serve()
    {
        foreach($this->chickens as $chicken){
            $this->eggs += $chicken->getEggs();
        }
    
        foreach($this->cows as $cow){
            $this->milk += $cow->getMilk();
        }
    }
}