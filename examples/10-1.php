<?php
abstract class Rectangle
{
    private $_x1;
    private $_y1;
    private $_x2;
    private $_y2;

    public function __construct($x1, $y1, $x2, $y2)
    {
        $this->_x1 = $x1;
        $this->_y1 = $y1;
        $this->_x2 = $x2;
        $this->_y2 = $y2;
    }

    public function draw()
    {
        $this->drawLine($this->_x1, $this->_y1, $this->_x2, $this->_y1);
        $this->drawLine($this->_x1, $this->_y1, $this->_x2, $this->_y2);
        $this->drawLine($this->_x2, $this->_y2, $this->_x1, $this->_y2);
        $this->drawLine($this->_x1, $this->_y2, $this->_x1, $this->_y1);
    }

    abstract protected function drawLine($x1, $y1, $x2, $y2);
}
