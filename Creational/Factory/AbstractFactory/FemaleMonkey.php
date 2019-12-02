<?php

namespace DesignPattern\Factory\AbstractFactory;

class FemaleMonkey implements Monkey
{
    public function say()
    {
       echo "我是一只母猴🐒 \n";
    }
}