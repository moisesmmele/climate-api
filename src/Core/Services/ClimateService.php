<?php

namespace Moises\ClimateApi\Core\Services;


use Moises\ClimateApi\Core\Domain\ClimateDataRepository;

class ClimateService
{
    protected ClimateDataRepository $repository;
    public function __construct(ClimateDataRepository $repository)
    {
        $this->repository = $repository;
    }

    public function listAllClimateData(): array
    {
        return $this->repository->getAllClimateData();
    }
}