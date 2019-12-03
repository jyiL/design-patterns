<?php

namespace PHPDesignPattern\Factory\SimpleFactory;

class WeChatPay implements PaySimpleFactory
{
    public function pay()
    {
        echo "我是WeChatPay\n";
    }
}