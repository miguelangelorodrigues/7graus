<?php

namespace Shp\Shapes;


class Shape
{
    public string $name;

    protected float $width;

    protected float $height;

    private string $id;

    private const SHAPE_TYPE = 1;


    public function __construct(float $height, float $width)
    {
        $this->height = $height;
        $this->width = $width;
        $this->id = uniqid("", true);
        $this->name = "";
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function calculateArea(bool $round = true): float
    {
        $result = $this->width * $this->height;

        return $round ? round($result, 2) : $result;
    }

    public static function getShapeType(): int
    {
        return self::SHAPE_TYPE;
    }
}