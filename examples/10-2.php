<?php
abstract class Shape
{
    abstract public function draw();
}

abstract class Recrangle extends Shape
{
    protected $_x1;
    protected $_y1;
    protected $_x2;
    protected $_y2;

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

abstract class Circle extends Shape
{
    protected $_x;
    protected $_y;
    protected $_r;

    public function __construct($x, $y, $r)
    {
        $this->_x = $x;
        $this->_y = $y;
        $this->_r = $r;
    }

    public function draw()
    {
        $this->drawCircle();
    }

    abstract protected function drawCircle();
}

class V1Circle extends Circle
{
    public function V1Circle($x, $y, $r)
    {
        parent::__construct($x, $y, $r);
    }

    protected function drawCircle()
    {
        $DP1 = new DP1();
        $DP1->draw_a_circle($this->_x, $this->_y, $this->_r);
    }
}

class V2Circle extends Circle
{
    public function V1Circle($x, $y, $r)
    {
        parent::__construct($x, $y, $r);
    }

    protected function drawCircle()
    {
        $DP2 = new DP2();
        $DP2->draw_a_circle($this->_x, $this->_y, $this->_r);
    }
}
