<?php

namespace Moises\ClimateApi\Core\Domain;

interface ClimateDataRepository
{
    public function getAllData(): array;
    public function getDataByDate($date): ?ClimateData;
    public function getDataByPeriod($period): array;
    public function getDataByTemperatureRange($startDate, $endDate): array;
    public function getDataByHumidityRange($startDate, $endDate): array;
    public function save(ClimateData $data): bool;

}