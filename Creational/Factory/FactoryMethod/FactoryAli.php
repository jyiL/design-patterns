<?php

namespace PHPDesignPattern\Factory\FactoryMethod;

/**
 * 支付宝支付工厂方法类
 */
class FactoryAli implements CreatePayFactoryMethod
{
    function create()
    {
        return new AliPay();
    }
}