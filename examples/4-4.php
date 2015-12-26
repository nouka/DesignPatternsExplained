<?php
require_once "4-1.php";
require_once "4-2.php";
require_once "4-3.php";

class V2Slot extends SlotFeature
{
    private $myOogF;

    public function getLength()
    {
        return $this->myOogF->getLength();
    }
}

class V2Hole extends HoleFeature
{
    private $myOogF;

    public function getDiameter()
    {
        return $this->myOogF->getDiameter();
    }
}
