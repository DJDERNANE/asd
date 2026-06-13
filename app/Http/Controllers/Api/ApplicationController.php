<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreApplicationRequest;
use App\Services\ApplicationService;
use Illuminate\Http\JsonResponse;

class ApplicationController extends Controller
{
    public function __construct(
        private readonly ApplicationService $applicationService
    ) {}

    /**
     * POST /api/applications
     *
     * Submit a new scholarship application.
     */
    public function store(StoreApplicationRequest $request): JsonResponse
    {
        $application = $this->applicationService->create($request->validated());

        return response()->json([
            'success' => true,
            'message' => 'Application submitted successfully.',
            'data'    => $application->load(['student', 'scholarship']),
        ], 201);
    }
}
