<?php

namespace DesignPattern\RegistryTree;

class RegistryTree
{
    private static $objects;

    public static function set($alias, $object)
    {
        self::$objects[$alias] = $object;
    }

    public static function get($alias)
    {
        if (!isset(static::$objects[$alias])) {
            return false;
        }

        return self::$objects[$alias];
    }

    public static function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }
}