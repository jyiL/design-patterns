<?php

namespace PHPDesignPattern\Creational\Prototype;

/**
 * 深复制
 */
class DeepCopy implements Prototype
{
    private $keyboard;

    public function __construct()
    {
        echo '美丽的姐姐' . PHP_EOL;
    }

    /**
     * @param mixed $keyboard
     */
    public function setKeyboard($keyboard)
    {
        $this->keyboard = $keyboard;
    }

    public function get()
    {
        echo '我想要个' . $this->keyboard->name . '的键盘' . PHP_EOL;
    }

    public function __clone()
    {
        $this->keyboard = clone $this->keyboard;
    }
}