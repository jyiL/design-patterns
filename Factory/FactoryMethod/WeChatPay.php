<?php

namespace DesignPattern\Factory\FactoryMethod;

class WeChatPay implements CreatePay
{
    public function pay()
    {
        echo "我是WeChatPay\n";
    }
}