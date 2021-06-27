<?php

namespace Wobeto\GeolocationDistance;

class Distance
{

    CONST MILES = 1;
    CONST METERS = 1609.34;
    CONST KILOMETERS = 1.60934;

    protected $geolocation1;
    protected $geolocation2;

    public function __construct(Position $geo1, Position $geo2)
    {
        $this->geolocation1 = $geo1;
        $this->geolocation2 = $geo2;
    }

    public function getDistance (float $metric = 1)
    {
        $theta = $this->geolocation1->getLongitude() - $this->geolocation2->getLongitude();
        $dist = sin(deg2rad($this->geolocation1->getLatitude())) *
            sin(deg2rad($this->geolocation2->getLatitude())) +
            cos(deg2rad($this->geolocation1->getLatitude())) *
            cos(deg2rad($this->geolocation2->getLatitude())) *
            cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $meters = $dist * 60 * 1.1515 * $metric;

        return $meters;
    }

}