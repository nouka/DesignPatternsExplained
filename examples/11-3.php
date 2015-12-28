<?php
/**
 * ResFactoryの実装.
 */
abstract class ResFactory
{
    abstract public function getDispDrvr();
    abstract public function getPrtDrvr();
}

class LowResFact extends ResFactory
{
    public function getDispDrvr()
    {
        return new LRDD();
    }

    public function getPrtDrvr()
    {
        return new LRPD();
    }
}

class HighResFact extends ResFactory
{
    public function getDispDrvr()
    {
        return new HRDD();
    }

    public function getPrtDrvr()
    {
        return new HRPD();
    }
}
