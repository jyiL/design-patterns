<?php

namespace PHPDesignPattern\Structural\Adapter\ObjectAdapter;

interface DatabaseTarget
{
    public function get();

    public function set();
}