<?php

namespace PHPDesignPattern\Factory\AbstractFactory;

class Woman implements Human
{
    public function say()
    {
        echo "我是一个女人👩 \n";
    }
}