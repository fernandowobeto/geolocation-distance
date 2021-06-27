<?php

namespace Wobeto\GeolocationDistanceTest\Tests;

use PHPUnit\Framework\TestCase;
use Wobeto\EmailBlur\Blur;
use Wobeto\GeolocationDistance\Distance;
use Wobeto\GeolocationDistance\Position;


class GeolocationDistanceTest extends TestCase
{

    protected $position1;
    protected $position2;

    protected function setUp(): void
    {
        $this->position1 = new Position(
            -29.648493387361018,
            -51.175071144370160
        );

        $this->position2 = new Position(
            -29.63269061883522,
            -51.167602150156824
        );
    }

    public function testDistanceInMiles()
    {
        $distance = new Distance(
            $this->position1,
            $this->position2
        );

        $result = $distance->getDistance();

        $this->assertEquals(1.1803452700122488, $result);
    }

    public function testDistanceInMeters()
    {
        $distance = new Distance(
            $this->position1,
            $this->position2
        );

        $result = $distance->getDistance($distance::METERS);

        $this->assertEquals(1899.5768568415124, $result);
    }

    public function testDistanceInKilometers()
    {
        $distance = new Distance(
            $this->position1,
            $this->position2
        );

        $result = $distance->getDistance($distance::KILOMETERS);

        $this->assertEquals(1.8995768568415123, $result);
    }

}