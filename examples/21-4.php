<?php

class UXtax extends CalcTax
{
    // 例題では内部クラスを使用している。
    // 内部クラスはPHPではサポートされていない。
    private static $instance;

    private function __construct()
    {
    }

    public function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}
