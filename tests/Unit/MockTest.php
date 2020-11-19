<?php

namespace Unit;

use PHPUnit\Framework\TestCase;
use Shp\Shapes\CircleShape;

class MockTest extends TestCase
{
    /**
     * @test
     */
    public function mock_test(): void
    {
        $circle = new CircleShape(4);

        self::assertEquals(3, $circle->getShapeType());

        $mock = $this->createMock(CircleShape::class);
        $mock->method('getShapeType')->willReturn(1);

        self::assertEquals(1, $mock->getShapeType());
    }
}