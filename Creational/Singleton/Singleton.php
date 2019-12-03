<?php

namespace PHPDesignPattern\Singleton;

class Singleton
{
    /**
     * 3.增加私有的静态属性
     */
    private static $instance;

    /**
     * 2.增加静态公共方法
     */
    public static function getInstance()
    {
        // instanceof 确定一个变量是否属于某一个类的实例
        if (!self::$instance instanceof self) {
            static::$instance = new self();
        }

        return static::$instance;
    }

    /**
     * 1.私有化构造方法 防止使用 new 创建多个实例
     * MySQLDB construct
     */
    private function __construct()
    {
    }

    /**
     * 4.将克隆魔术方法私有化
     */
    private function __clone()
    {}

    /**
     * 5.将__wakeup方法私有化
     */
    private function __wakeup()
    {
    }
}

$db1 = Singleton::getInstance();
$db2 = Singleton::getInstance();

var_dump($db1, $db2);