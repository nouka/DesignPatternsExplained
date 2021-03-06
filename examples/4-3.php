<?php

require_once '4-1.php';
require_once '4-2.php';
require_once '4-4.php';

class V2Model extends Model
{
    public static function buildV2Model(string $modelName)
    {
        if (!$this->openModel($modelName)) {
            return;
        }

        $this->buildModel();

        return $this;
    }

    private function buildModel()
    {
        $nElements = getNumberOfElements();
        $features = array();

        for ($i = 0; $i < $nElements; ++$i) {
            $oogF = getElement($i);
            switch ($oogF->getType()) {
                case OOG_SLOT:
                    $features[$i] = new V2Slot($oogF);
                    break;
                case OOG_HOLE:
                    $features[$i] = new V2Hole($oogF);
                    break;
            }
        }
    }
}
