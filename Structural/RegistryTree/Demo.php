<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use PHPDesignPattern\RegistryTree\RegistryTree;

class Demo
{
    public function index()
    {
        echo "红红火火恍恍惚惚\n";
    }
}

$demo = new Demo();
var_dump($demo);
$demo->index();

// 添加进对象树中
RegistryTree::set("demo", $demo);

// 获取对象
$demo2 = RegistryTree::get("demo");
var_dump($demo2);
$demo2->index();

// 删除对象
RegistryTree::_unset("demo");
// 再次获取
$demo_object = RegistryTree::get("demo");
var_dump($demo_object);
$demo_object->index();