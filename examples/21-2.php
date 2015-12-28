<?php
/**
 * e-コマースシステムというコンテキストにおけるSingletonパターン.
 */
abstract class CalcTax
{
    protected function __construct()
    {
    }

    abstract public function taxAmount($itemSold, $qty, $price);

    public static function getInstance()
    {
        $usTax = new USTax();
        $instance = $usTax->getInstance();

        return $instance;
    }
}

class USTax extends CalcTax
{
    private static $instance;

    protected function __construct()
    {
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function taxAmount($itemSold, $qty, $price)
    {
        return $qty * $price * 0.1;
    }
}
