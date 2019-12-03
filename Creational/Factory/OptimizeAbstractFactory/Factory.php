<?php

namespace PHPDesignPattern\Factory\OptimizeAbstractFactory;

class Factory
{
    public $create = "Man";

    public function __construct()
    {
        $config = include_once 'config.php';
        $this->create = $config['create'];
    }

    /**
     * @return mixed
     */
    public function createHuMan()
    {
        switch ($this->create) {
            case 'Man':
                $human = new Man();
                break;
            case 'WoMan':
                $human = new Woman();
                break;
            default:
                throw new \InvalidArgumentException("你是个什么 😈 人类？ \n");
        }

        return $human;
    }

    /**
     * @return mixed
     */
    public function createMonkey()
    {
        switch ($this->create) {
            case 'Man':
                $monkey = new ManMonkey();
                break;
            case 'WoMan':
                $monkey = new WoManMonkey();
                break;
            default:
                throw new \InvalidArgumentException("你是个什么 😈 猴子？ \n");
        }

        return $monkey;
    }
}