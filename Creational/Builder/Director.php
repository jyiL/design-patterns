<?php

namespace PHPDesignPattern\Creational\Builder;

/**
 * 导演者角色
 */
class Director
{
    private $builder;

    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function build()
    {
        $this->builder->buildPartA();
        $this->builder->buildPartB();
        $this->builder->buildPartC();
        $this->builder->buildOthers();
        return $this->builder->getCar();
    }
}