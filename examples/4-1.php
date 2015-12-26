<?php
class Future {}
class Slot {}
class V1Slot extends Slot {}
class Hole {}
class V1Hole extends Hole {}
class Model
{
    protected $modelNumber;
    protected function openModel($modelName) {}
}

class V1Model extends Model
{
    static public function buildV1Model(string $modelName)
    {
        $this->modelNumber = $this->openModel($modelName);
        if ($this->modelNumber <= 0) {
            return null;
        }

        $this->buildModel();
        return $this;
    }

    private function buildModel()
    {
        $features = array();
        $ID = 0;
        for ($i = 0; $i < $nElements; $i++) {
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
