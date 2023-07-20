<?php

class Plant
{
    public $title;
    protected $color;

    // private - будет работать только в классе где указано (тут)
    // protected - будет работать и в классе (тут) и в классе что наследуется (ниже)
    public $season;

    public function __construct($title, $color, $season)
    {
        $this->title = $title;
        $this->color = $color;
        $this->season = $season;
    }

    private function someCalculation($color)
    {
        $this->color = $color;
    }

}

class Rose extends Plant
{
    public function anotherCalc()
    {
        $this->color = 'white';
    }
}

$plant = new Plant('tylipan', 'yellow', 'spring');

$rose = new Rose('rose', 'red', 'spring');
