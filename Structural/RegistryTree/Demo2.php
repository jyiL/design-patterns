<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use PHPDesignPattern\RegistryTree\RegistryTree;

/**
 * 单例
 */
class SingletonDemo
{
    /**
     * #var
     */
    private static $instance;
    private $content;

    public static function getInstance()
    {
        if (!self::$instance instanceof self) {
            static::$instance = new self();
        }

        return static::$instance;
    }

    private function __construct()
    {
        $this->content = rand(1, 9999);
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    public function test()
    {
        return $this->content;
    }
}

/**
 * 单例
 */
class Factory
{
    public static function create()
    {
        // 返回对象
        return SingletonDemo::getInstance();
    }
}

RegistryTree::set("SingletonDemo", Factory::create());

$obj = RegistryTree::get("SingletonDemo");
var_dump($obj);
echo $obj->test();