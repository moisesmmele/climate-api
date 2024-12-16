<?php

namespace Moises\ClimateApi\Database;

use Moises\ClimateApi\Core\Domain\ClimateData;
use Moises\ClimateApi\Core\Domain\ClimateDataRepository;

class FakeClimateDataRepository implements ClimateDataRepository
{
    private function generateFakeClimateData(int $amount, string $startDate = '2020-01-01', string $endDate = '2024-12-30'): array
    {
        $startDateStamp = strtotime($startDate);
        $endDateStamp   = strtotime($endDate);

        $data = [];
        for ($i = 1; $i <= $amount; $i++) {
            $random_timestamp = rand($startDateStamp, $endDateStamp);
            $data[] = [
                "id" => $i,
                "timestamp" => $random_timestamp,
                "temperature" => (rand(230, 270) / 10),
                "humidity" => (rand(200, 400) / 10),
            ];
        }
        return $data;
    }

    public function getAllClimateData(): array
    {
        $collection = [];
        $data = $this->generateFakeClimateData(200);
        foreach ($data as $datum) {
            $collection[] = new ClimateData(
                id: $datum['id'],
                timestamp: $datum['timestamp'],
                temperature: $datum['temperature'],
                humidity:  $datum['humidity']);
        }
        return $collection;
    }

    public function findClimateDataById(int $id): ClimateData
    {
        // TODO: Implement findClimateDataById() method.
    }

    public function findClimateDataByDate(string $date): array
    {
        // TODO: Implement findClimateDataByDate() method.
    }

    public function getClimateDataByDateRange(string $startDate, string $endDate): array
    {
        // TODO: Implement getClimateDataByDateRange() method.
    }

    public function getClimateDataByHumidityRange(float $startHumidity, float $endHumidity): array
    {
        // TODO: Implement getClimateDataByHumidityRange() method.
    }

    public function getClimateDataByTemperatureRange(float $startTemperature, float $endTemperature): array
    {
        // TODO: Implement getClimateDataByTemperatureRange() method.
    }

    public function saveClimateData(ClimateData $data): bool
    {
        // TODO: Implement saveClimateData() method.
    }
}