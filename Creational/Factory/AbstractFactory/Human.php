<?php

namespace PHPDesignPattern\Factory\AbstractFactory;

/**
 * 人类产品接口
 */
interface Human
{
    /**
     * @return mixed
     */
    public function say();
}