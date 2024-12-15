<?php

namespace Moises\ClimateApi\Core\Domain;

class ClimateData
{
    private \DateTimeImmutable $date;
    private float $temperature;
    private float $humidity;
}