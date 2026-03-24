<?php

class Ship
{
    public $name;

    public $homeport;

    /*
    setName i getName to funccje specjalne, setter/getter ||
    setteyr cos ustawiają i niczego nie zwracają - dlatego void
    get tylko zwraca i nic innego nie robi
    */

    public function setName(string $name): void 
    {
        $this->name = $name;
    }

    public function getName(): string 
    {
        return $this->name;
    }
    //port macierzysty
    public function setHomeport(string $homeport): void 
    {
        $this->homeport = $homeport;
    }

    public function getHomeport(): string 
    {
        return $this->homeport;      
    }
}