<?php

namespace Moises\ClimateApi\Controllers;

use Moises\ClimateApi\ApiResponse;
use Moises\ClimateApi\Core\Services\ClimateService;
use Moises\ClimateApi\Database\FakeClimateDataRepository;
use Moises\ClimateApi\Request;
use Moises\ClimateApi\Response;

class ClimateController implements Controller
{

    public function index(): Response
    {
        $repository = new FakeClimateDataRepository();
        $service = new ClimateService($repository);
        $response = new ApiResponse();
        $response->setBody($service->listAllClimateData());
        return $response;
    }

    public function create(Request $request): Response
    {
        // TODO: Implement create() method.
    }

    public function show(Request $request): Response
    {
        // TODO: Implement show() method.
    }

    public function update(Request $request): Response
    {
        // TODO: Implement update() method.
    }

    public function destroy(Request $request): Response
    {
        // TODO: Implement destroy() method.
    }
}