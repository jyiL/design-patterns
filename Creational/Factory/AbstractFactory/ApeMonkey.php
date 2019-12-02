<?php

namespace DesignPattern\Factory\AbstractFactory;

/**
 * 具体产品类
 */
class ApeMonkey implements Monkey
{
    public function say()
    {
        echo "我是一只猿猴🐒 \n";
    }
}