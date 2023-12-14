<?php

namespace App\Tests\Entity;

use App\Entity\Measurement;
use PHPUnit\Framework\TestCase;

class MeasurementTest extends TestCase
{
    public function dataGetFahrenheit(): array
    {
        return [
            ['-5', 23],
            ['2.7', 36.86],
            ['15.8', 60.44],
            ['3.9', 39.02],
            ['-22.4', -8.32],
            ['11.9', 53.42],
            ['-75', -103],
            ['-89.5', -129.1],
            ['36', 96.8],
            ['49.3', 120.74],
        ];
    }

    /**
     * @dataProvider dataGetFahrenheit
     */
    public function testGetFahrenheit($celsius, $expectedFahrenheit): void
    {
        $measurement = new Measurement();

        $measurement->setCelsius($celsius);
        $this->assertEquals($expectedFahrenheit, $measurement->getFahrehneit(),
            "Expected $expectedFahrenheit Fahrenheit for $celsius Celsius, got {$measurement->getFahrehneit()}");
    }
}
