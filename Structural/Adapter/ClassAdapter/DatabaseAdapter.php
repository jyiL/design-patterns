<?php

namespace PHPDesignPattern\Structural\Adapter\ClassAdapter;

/**
 * 适配器类
 */
class DatabaseAdapter extends DatabaseAdaptee implements DatabaseTarget
{
    public function __construct()
    {
        $this->driver = 'pdo';
    }

    public function get()
    {
        echo "used {$this->driver}.\n";
    }
}