<?php

namespace PHPDesignPattern\Factory\AbstractFactory;

/**
 * 猴子产品接口
 */
interface Monkey
{
    /**
     * @return mixed
     */
    public function say();
}