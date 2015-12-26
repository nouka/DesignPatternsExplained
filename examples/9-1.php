<?php
class TaskController
{
    public function process()
    {
        $myTax = $this->getTaxRulesForCountry();
        $mySO = new SalesOrder();
        $mySO->process($myTax);
    }

    private function getTaxRulesForCountry()
    {
        return new USTax();
    }
}

class SalesOrder
{
    public function process($taxToUse)
    {
        $itemSold;
        $qty = 0;
        $price = 0;

        $tax = $taxToUse->taxAmount($itemSold, $qty, $price);
    }
}

abstract class CalcTax
{
    abstract public function taxAmount($itemSold, $qty, $price);
}

/**
 * カナダの税率を返す
 */
class CanTax extends CalcTax
{
    public function taxAmount($itemSold, $qty, $price)
    {
        return 0.0;
    }
}

/**
 * USの税率を返す
 */
class USTax extends CalcTax
{
    public function taxAmount($itemSold, $qty, $price)
    {
        return 0.0;
    }
}
