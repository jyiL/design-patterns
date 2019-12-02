<?php

namespace DesignPattern\Factory\SimpleFactory;

class AliPay implements PaySimpleFactory
{
    public function pay()
    {
        echo "我是AliPay\n";
    }
}