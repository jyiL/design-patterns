<?php

namespace PHPDesignPattern\Structural\Adapter\ObjectAdapter;

require_once __DIR__ . '/../../../vendor/autoload.php';

class Client
{
    public static function run()
    {
        $adaptee = new DatabaseAdaptee();
        $adaptee->set();

        // 适配器
        $adapter = new DatabaseAdapter($adaptee);
        $adapter->set();

        $adapter->get();
    }
}

Client::run();