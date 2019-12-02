<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use DesignPattern\Factory\SimpleFactory\SimpleFactory;
use DesignPattern\Factory\SimpleFactory\StaticFactory;

$pay1 = StaticFactory::pay('WeChatPay');
$pay1->pay();

$factory = new SimpleFactory();
$pay2 = $factory->pay('AliPay');
$pay2->pay();