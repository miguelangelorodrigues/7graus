<?php


namespace Shp\Shapes;


class CircleShape extends Shape
{
    protected float $radius;

    public function __construct(float $radius)
    {
        parent::__construct();
        $this->radius = $radius;
    }

    public function calculateArea(bool $round = true): float
    {
        $result = M_PI * $this->radius ** 2;

        return $round ? round($result, 2) : $result;
    }

    public function getShapeType(): int
    {
        return 3;
    }
}