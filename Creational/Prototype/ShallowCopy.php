<?php

namespace PHPDesignPattern\Creational\Prototype;

/**
 * 浅复制
 */
class ShallowCopy
{
    private $keyboard;

    public function __construct()
    {
        echo '亲爱的大哥' . PHP_EOL;
    }

    public function setKeyboard($keyboard)
    {
        $this->keyboard = $keyboard;
    }

    public function get()
    {
        echo '我想要个' . $this->keyboard->name . '的键盘' . PHP_EOL;
    }
}