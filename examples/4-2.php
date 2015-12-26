<?php
require_once "4-1.php";
require_once "4-3.php";
require_once "4-4.php";

class Feature {}

class SlotFeature extends Feature {}
class HoleFeature extends Feature {}

class V1Slot extends SlotFeature
{
    private $myModelNumber;
    private $myID;

    public function getLength()
    {
        $V1Model = new V1Model();
        return $V1Model->getLengthForSlot($this->myModelNumber, $this->myID);
    }
}

class V1Hole extends HoleFeature
{
    private $myModelNumber;
    private $myID;

    public function getLength()
    {
        $V1Model = new V1Model();
        return $V1Model->getLengthForHole($this->myModelNumber, $this->myID);
    }
}
