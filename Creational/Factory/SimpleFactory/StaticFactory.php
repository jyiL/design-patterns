<?php

namespace PHPDesignPattern\Factory\SimpleFactory;

/**
 * 静态工厂模式
 */
class StaticFactory
{
    public static function pay($operate)
    {
        switch ($operate) {
            case 'WeChatPay':
                $result = new WeChatPay();
                break;
            case 'AliPay':
                $result = new AliPay();
                break;
            default:
                throw new \InvalidArgumentException('暂不支持的支付方式');
        }

        return $result;
    }
}