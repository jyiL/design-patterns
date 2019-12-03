<?php

namespace PHPDesignPattern\Structural\Adapter\ClassAdapter;

require_once __DIR__ . '/../../../vendor/autoload.php';

class Client
{
    public static function run()
    {
        // 适配者
        $adptee = new DatabaseAdaptee();
        $adptee->set();

        // 适配器
        $adpter = new DatabaseAdapter();
        $adpter->set();

        $adpter->get();
    }
}

Client::run();
