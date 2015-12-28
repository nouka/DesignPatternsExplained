<?php
/**
 * 問題を解決するためにポリモーフィズムを使用する.
 */
class ApControl
{
    public function doDraw()
    {
        myDisplayDriver::drawIt();
    }

    public function doPrint()
    {
        myPrinterDriver::printIt();
    }
}
