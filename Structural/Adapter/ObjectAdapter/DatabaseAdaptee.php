<?php

namespace PHPDesignPattern\Structural\Adapter\ObjectAdapter;

/**
 * 适配者类
 */
class DatabaseAdaptee
{
    public $driver = 'mysql';

    public function set()
    {
        echo "use {$this->driver}.\n";
    }
}