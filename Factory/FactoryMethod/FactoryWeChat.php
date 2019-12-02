<?php

namespace DesignPattern\Factory\FactoryMethod;

/**
 * 微信支付工厂方法类
 */
class FactoryWeChat implements CreatePayFactoryMethod
{
    function create()
    {
       return new WeChatPay();
    }
}