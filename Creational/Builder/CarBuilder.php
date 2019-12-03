<?php

namespace PHPDesignPattern\Creational\Builder;

/**
 * 具体建造者角色
 */
class CarBuilder implements Builder
{
    protected $car;

    public function __construct()
    {
        $this->car = new Car();
    }

    public function buildPartA()
    {
        $this->car->setPartA();
    }

    public function buildPartB()
    {
        $this->car->setPartB();
    }

    public function buildPartC()
    {
        $this->car->setPartC();
    }

    public function buildOthers()
    {
        $this->car->setOthers();
    }

    /**
     * @return mixed
     */
    public function getCar()
    {
        return $this->car;
    }
}