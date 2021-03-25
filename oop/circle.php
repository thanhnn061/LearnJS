<?php
class Circle implements Shape
{
    private $radius;

    public function caclArea()
    {
        return ($this->radius) * ($this->radius) * 3.14;
    }
}

class Rectangle implements Shape
{
    private $width;
    private $height;

    public function caclArea()
    {
        return ($this->width) * ($this->height);
    }
}
?>