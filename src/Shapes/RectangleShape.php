<?php


namespace Shp\Shapes;


class RectangleShape extends Shape
{
    protected float $height;

    protected float $width;

    public function __construct(float $height, float $width)
    {
        parent::__construct();
        $this->height = $height;
        $this->width = $width;
    }

    public function calculateArea(bool $round = true): float
    {
        $result = $this->width * $this->height;

        return $round ? round($result, 2) : $result;
    }

    public function getShapeType(): int
    {
        return 2;
    }
}