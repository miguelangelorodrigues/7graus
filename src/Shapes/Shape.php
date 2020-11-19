<?php

namespace Shp\Shapes;


abstract class Shape
{
    public string $name;

    private string $id;

    public function __construct()
    {
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

    abstract public function calculateArea(bool $round = true): float;

    abstract public function getShapeType(): int;
}