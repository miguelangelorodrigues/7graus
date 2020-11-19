<?php


namespace Unit;


use PHPUnit\Framework\TestCase;
use Shp\Shapes\RectangleShape;

class RectangleShapeTest extends TestCase
{
    /**
     * @test
     */
    public function calculate_rectangle_area_with_success(): void
    {
        $rectangle = new RectangleShape(4,8);

        self::assertEquals(32.00, $rectangle->calculateArea());
    }
}