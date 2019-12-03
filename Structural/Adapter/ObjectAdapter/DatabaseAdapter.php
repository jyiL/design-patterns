<?php

namespace PHPDesignPattern\Structural\Adapter\ObjectAdapter;

class DatabaseAdapter implements DatabaseTarget
{
    protected $adaptee;

    public function __construct(DatabaseAdaptee $adaptee)
    {
        $this->adaptee = $adaptee;
        $adaptee->driver = 'mysqli';
    }

    public function set()
    {
        echo "use {$this->adaptee->driver}.\n";
    }

    public function get()
    {
        echo "used {$this->adaptee->driver}.\n";
    }
}