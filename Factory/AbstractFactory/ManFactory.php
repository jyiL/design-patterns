<?php

namespace DesignPattern\Factory\AbstractFactory;

/**
 * 具体工厂类
 */
class ManFactory implements Factory
{
    /**
     * @return Man|mixed
     */
    public function createHuMan()
    {
        return new Man();
    }

    public function createMonkey()
    {
        return new ApeMonkey();
    }
}