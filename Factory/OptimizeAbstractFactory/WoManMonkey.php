<?php

namespace DesignPattern\Factory\OptimizeAbstractFactory;

class WoManMonkey implements Monkey
{
    public function say()
    {
       echo "我是一只母猴🐒 \n";
    }
}