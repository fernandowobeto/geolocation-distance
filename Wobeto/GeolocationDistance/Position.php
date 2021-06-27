<?php

namespace Wobeto\GeolocationDistance;

class Position
{

    protected $latitude;
    protected $longitude;

    public function __construct(float $latitude, float $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    public function getLatitude ()
    {
        return $this->latitude;
    }

    public function getLongitude ()
    {
        return $this->longitude;
    }

}