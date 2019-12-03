<?php

namespace PHPDesignPattern\Factory\OptimizeAbstractFactory;

/**
 * 具体产品类
 */
class ManMonkey implements Monkey
{
    public function say()
    {
        echo "我是一只公猴🐒 \n";
    }
}