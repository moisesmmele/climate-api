<?php

namespace Moises\ClimateApi\Controllers;

use Moises\ClimateApi\Request;
use Moises\ClimateApi\Response;

interface Controller
{
    public function index(): Response;
    public function create(Request $request): Response;
    public function show(Request $request): Response;
    public function update(Request $request): Response;
    public function destroy(Request $request): Response;
}