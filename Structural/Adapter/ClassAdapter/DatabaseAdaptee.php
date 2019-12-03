<?php

namespace PHPDesignPattern\Structural\Adapter\ClassAdapter;

/**
 * 适配者类
 */
class DatabaseAdaptee
{
    protected $driver = "mysql";

    public function set()
    {
        echo "use {$this->driver}.\n";
    }
}