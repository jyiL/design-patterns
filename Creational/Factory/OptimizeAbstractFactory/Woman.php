<?php

namespace PHPDesignPattern\Factory\OptimizeAbstractFactory;

class Woman implements Human
{
    public function say()
    {
        echo "我是一个女人👩 \n";
    }
}