<?php
/**
 * Adapterパターンの実装
 */

class Shape
{
}

class Circle extends Shape
{
    private $myXXCircle;

    public function __construct()
    {
        $this->myXXCircle = new XXCircle();
    }

    public function display()
    {
        $this->myXXCircle->displayIt();
    }
}
