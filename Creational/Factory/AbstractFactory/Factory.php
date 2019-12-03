<?php

namespace PHPDesignPattern\Factory\AbstractFactory;

/**
 * 工厂接口
 */
interface Factory
{
    /**
     * @return mixed
     */
    public function createHuMan();

    /**
     * @return mixed
     */
    public function createMonkey();
}