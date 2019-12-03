<?php

require_once __DIR__ . '/../../../vendor/autoload.php';

use PHPDesignPattern\Factory\FactoryMethod\FactoryAli;
use PHPDesignPattern\Factory\FactoryMethod\FactoryWeChat;

class Client
{
    public function index()
    {
        $factory = new FactoryAli();
        $ali = $factory->create();
        $ali->pay();

        $factory = new FactoryWeChat();
        $ali = $factory->create();
        $ali->pay();
    }
}

$demo = new Client();
$demo->index();