<?php

namespace PHPDesignPattern\Factory\AbstractFactory;

/**
 * 具体产品类
 */
class Man implements Human
{
    public function say()
    {
        echo "我是一个男人👨 \n";
    }
}