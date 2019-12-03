<?php

namespace PHPDesignPattern\Creational\Builder;

require_once __DIR__ . '/../../vendor/autoload.php';

class Client
{
    public static function index()
    {
        $carBuilder = new CarBuilder();
        $director = new Director($carBuilder);
        $newCar = $director->build();
        $newCar->getCar();
    }

    public static function test()
    {
        $car = new Car();
        $car->setPartA()
            ->setPartB()
            ->setPartC()
            ->setOthers()
            ->getCar();
    }
}

// 使用建造者
Client::index();

// 流式操作
Client::test();