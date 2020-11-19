<?php

namespace Unit;

use PHPUnit\Framework\TestCase;
use Shp\Shapes\CircleShape;

class CircleShapeTest extends TestCase
{
    /**
     * @test
     */
    public function calculate_circle_area_with_success(): void
    {
        $circle = new CircleShape(4);

        self::assertEquals(50.27, $circle->calculateArea());
    }
}