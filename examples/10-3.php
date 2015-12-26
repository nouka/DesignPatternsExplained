<?php
class Client
{
    public function main()
    {
        $myShapes = array();
        $myFactory = new Factory();

        $myShapes = $myFactory->getShapes();
        foreach ($myShapes as $myShape) {
            $myShape->draw();
        }
    }
}

abstract class Shape
{
    protected $myDrawing;

    abstract public function draw();

    public function __construct($drawing)
    {
        $this->myDrawing = $drawing;
    }

    protected function drawLine($x1, $x2, $y1, $y2)
    {
        $this->myDrawing->drawLine($x1, $x2, $y1, $y2);
    }

    protected function drawCircle($x, $y, $r)
    {
        $this->myDrawing->drawCircle($x, $y, $r);
    }
}

class Rectangle extends Shape
{
    protected $_x1;
    protected $_y1;
    protected $_x2;
    protected $_y2;

    public function __construct($dp, $x1, $y1, $x2, $y2)
    {
        parent::__construct($dp);
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
}

class Circle extends Shape
{
    protected $_x;
    protected $_y;
    protected $_r;

    public function __construct($dp, $x, $y, $r)
    {
        parent::__construct($dp);
        $this->_x = $x;
        $this->_y = $y;
        $this->_r = $r;
    }

    public function draw()
    {
        $this->drawCircle($this->_x, $this->_y, $this->_r);
    }
}

abstract class Drawing
{
    abstract public function drawLine($x1, $y1, $x2, $y2);
    abstract public function drawCircle($x, $y, $r);
}

class V1Drawing extends Drawing
{
    public function drawLine($x1, $y1, $x2, $y2)
    {
        $DP1 = new DP1();
        $DP1->draw_a_line($x1, $y1, $x2, $y2);
    }

    public function drawCircle($x, $y, $r)
    {
        $DP1 = new DP1();
        $DP1->draw_a_circle($x, $y, $r);
    }
}

class V2Drawing extends Drawing
{
    public function drawLine($x1, $y1, $x2, $y2)
    {
        $DP2 = new DP2();
        $DP2->drawline($x1, $x2, $y1, $y2);
    }

    public function drawCircle($x, $y, $r)
    {
        $DP2 = new DP2();
        $DP2->drawcircle($x, $y, $r);
    }
}
