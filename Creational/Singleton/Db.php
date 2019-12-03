<?php

namespace PHPDesignPattern\Singleton;

class Db
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

//$db1 = new Db();
//$db2 = new Db();

/*
 * 1
 * 多个句柄
 * class PHPDesignPattern\Singleton\Db#1 (0) {
 * }
 *
 * class PHPDesignPattern\Singleton\Db#2 (0) {
 * }
 *
 */

//var_dump($db1, $db2);

$db3 = Db::getInstance();
$db4 = Db::getInstance();

/*
 * 2
 * 依然是多个句柄
 * class PHPDesignPattern\Singleton\Db#1 (0) {
 * }
 *
 * class PHPDesignPattern\Singleton\Db#2 (0) {
 * }
 *
 */
var_dump($db3, $db4);

/*
 * 3
 * 1个句柄
 * class PHPDesignPattern\Singleton\Db#1 (0) {
 * }
 *
 * class PHPDesignPattern\Singleton\Db#1 (0) {
 * }
 *
 */

//$db5 = clone $db4;
/*
 * 4
 * 克隆会产生多个句柄
 * class PHPDesignPattern\Singleton\Db#1 (0) {
 * }
 *
 * class PHPDesignPattern\Singleton\Db#2 (0) {
 * }
 *
 */
//var_dump($db5);

// 反序列化对象
$db6 = unserialize(serialize($db4));
/*
 * 5
 * 反序列化对象会产生多个句柄
 * class PHPDesignPattern\Singleton\Db#1 (0) {
 * }
 *
 * class PHPDesignPattern\Singleton\Db#2 (0) {
 * }
 *
 */
var_dump($db6);