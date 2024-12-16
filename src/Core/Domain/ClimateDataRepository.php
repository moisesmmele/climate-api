<?php

namespace Moises\ClimateApi\Core\Domain;

interface ClimateDataRepository
{
    public function getAllClimateData(): array;
    public function findClimateDataById(int $id): ClimateData;
    public function findClimateDataByDate(string $date): array;
    public function getClimateDataByDateRange(string $startDate, string $endDate): array;
    public function getClimateDataByHumidityRange(float $startHumidity, float $endHumidity): array;
    public function getClimateDataByTemperatureRange(float $startTemperature, float $endTemperature): array;
    public function saveClimateData(ClimateData $data): bool;

}