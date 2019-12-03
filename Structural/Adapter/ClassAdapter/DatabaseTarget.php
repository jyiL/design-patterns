<?php

namespace PHPDesignPattern\Structural\Adapter\ClassAdapter;

interface DatabaseTarget
{
    public function get();

    public function set();
}