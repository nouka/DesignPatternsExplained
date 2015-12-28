<?php

require_once '4-2.php';
require_once '4-3.php';
require_once '4-4.php';

class Model
{
    protected $modelNumber;
    protected function openModel($modelName)
    {
    }
}

class V1Model extends Model
{
    public static function buildV1Model(string $modelName)
    {
        $this->modelNumber = $this->openModel($modelName);
        if ($this->modelNumber <= 0) {
            return;
        }

        $this->buildModel();

        return $this;
    }

    private function buildModel()
    {
        $nElements = getNumberOfElements();
        $features = array();
        $ID = 0;
        for ($i = 0; $i < $nElements; ++$i) {
            $ID = $this->getFutureID($this->modelNumber, $i);
            switch ($this->getFutureType($this->modelNumber, $ID)) {
                case FEATURE_SLOT:
                    $futures[$i] = new V1Slot($this->modelNumber, $ID);
                    break;
                case FUTURE_HOLE:
                    $futures[$i] = new V1Hole($this->modelNumber, $ID);
                    break;
            }
        }
    }
}
