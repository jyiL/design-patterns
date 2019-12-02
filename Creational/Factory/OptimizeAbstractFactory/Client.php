<?php

namespace DesignPattern\Factory\OptimizeAbstractFactory;

require_once __DIR__ . '/../../vendor/autoload.php';

class Client
{
    public function index()
    {
        echo "---------- 使用简单工厂优化 ---------- \n";
        $factory = new Factory();
        $man = $factory->createHuMan();
        $man->say();

        $monkey = $factory->createMonkey();
        $monkey->say();

        echo "---------- 使用反射优化 ---------- \n";
        $factory = new FactoryWithReflection();
        $human = $factory->createHuMan();
        $human->say();

        $monkey = $factory->createMonkey();
        $monkey->say();
    }
}

$demo = new Client();
$demo->index();