<?php


namespace Shp\Shapes;


class CircleShape extends Shape
{
    protected float $radius;

    private const SHAPE_TYPE = 3;


    public function __construct(float $radius)
    {
        parent::__construct($radius * 2, $radius * 2);
        $this->radius = $radius;
    }

    public function calculateArea(bool $round = true): float
    {
        $result = M_PI * $this->radius ** 2;

        return $round ? round($result,2) : $result;
    }
}