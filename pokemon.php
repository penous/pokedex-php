<?php
/**
* Create a pokemon class
*/
class Pokemon
{
    public $name;
    public $health;
    public $power;
    public $type;
    public $height;
    public $weight;
    public $sprite;
    public $abilities;
    public $evoChain;

    public function __construct($name, $health, $power, $type, $height, $weight, $abilities, $sprite, $evoChain)
    {
        $this->name = $name;
        $this->health = $health;
        $this->power = $power;
        $this->type = $type;
        $this->height = $height;
        $this->weight = $weight;
        $this->abilities = $abilities;
        $this->sprite = $sprite;
        $this->evoChain = $evoChain;
    }
}