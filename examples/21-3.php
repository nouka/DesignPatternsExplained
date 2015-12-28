<?php

class UXtax extends CalcTax
{
    private static $instance;

    private function __construct()
    {
    }

    public function getInstance()
    {
        if (!self::$instance) {
            // 例題ではsynchronizedを使用している。
            // PHPではマルチスレッドがどういう挙動になるのかわからない。
            self::$instance = new self();
        }

        return self::$instance;
    }
}
