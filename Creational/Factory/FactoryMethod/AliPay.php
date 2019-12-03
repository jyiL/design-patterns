<?php

namespace PHPDesignPattern\Factory\FactoryMethod;

class AliPay implements CreatePay
{
    public function pay()
    {
        echo "我是AliPay\n";
    }
}