<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use DesignPattern\Factory\AbstractFactory\ManFactory;
use DesignPattern\Factory\AbstractFactory\WomanFactory;

class Client
{
    public function index()
    {
        $factory = new ManFactory();
        $man = $factory->createHuMan();
        $man->say();

        $monkey = $factory->createMonkey();
        $monkey->say();

        echo "*******************\n";

        $factory = new WomanFactory();
        $woman = $factory->createHuMan();
        $woman->say();

        $woman_monkey = $factory->createMonkey();
        $woman_monkey->say();
    }
}

$demo = new Client();
$demo->index();