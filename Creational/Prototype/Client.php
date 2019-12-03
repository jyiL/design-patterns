<?php

namespace PHPDesignPattern\Creational\Prototype;

require_once __DIR__ . '/../../vendor/autoload.php';

class Client
{
    /**
     * 浅复制
     */
    public static function shallowCopy()
    {
        $shallowCopy = new ShallowCopy();
        $keyboard = new Keyboard();
        $keyboard->name = 'ikbc';
        $shallowCopy->setKeyboard($keyboard);
        $shallowCopy->get();

        echo '----------\n';

        // clone不会调用构造函数
        $cloneShallow = clone $shallowCopy;
        $cloneShallow->get();
    }

    public static function shallowCopy2()
    {
        $shallowCopy = new ShallowCopy();
        $keyboard = new Keyboard();
        $keyboard->name = 'ikbc';
        $shallowCopy->setKeyboard($keyboard);
        $shallowCopy->get();

        echo "----------\n";

        // clone不会调用构造函数
        $cloneShallow = clone $shallowCopy;
        $cloneShallow->get();

        echo "=====\n";

        $keyboard->name = 'hhhk';
        $shallowCopy->get();
        $cloneShallow->get();
    }

    public static function deepCopy()
    {
        $keyboard = new Keyboard();
        $keyboard->name = 'ikbc';

        $deepCopy = new DeepCopy();
        $deepCopy->setKeyboard($keyboard);
        $deepCopy->get();

        echo "----------\n";

        // clone不会调用构造函数
        $cloneDeep = clone $deepCopy;
        $cloneDeep->get();

        echo "=====\n";

        $keyboard->name = 'hhhk';
        $deepCopy->get();
        $cloneDeep->get();
    }
}

Client::shallowCopy();
Client::shallowCopy2();
Client::deepCopy();