<?php

namespace Moises\ClimateApi\Core\Domain;

class ClimateData
{
    private int $id;
    private \DateTime $date;
    private float $temperature;
    private float $humidity;
    public function __construct(?int $id, string $timestamp, float $temperature, float $humidity)
    {
        $this->id = $id;
        $this->date = $this->timestampToDateTime($timestamp);
        $this->temperature = $temperature;
        $this->humidity = $humidity;
    }
    public function timestampToDateTime($timestamp)
    {
        $datetime = new \DateTime();
        $datetime->setTimestamp($timestamp);
        return $datetime;
    }
    public function getId(): int
    {
        return $this->id;
    }
    public function getDate(): \DateTimeImmutable
    {
        return $this->date;
    }
    public function getTemperature(): float
    {
        return $this->temperature;
    }
    public function getHumidity(): float
    {
        return $this->humidity;
    }
}