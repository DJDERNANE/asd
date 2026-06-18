<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ScholarshipService;
use Illuminate\Http\JsonResponse;

class ScholarshipController extends Controller
{
    public function __construct(
        private readonly ScholarshipService $scholarshipService
    ) {}


    /**
     * GET /api/scholarships/
     *
     * Returns all active scholarships for a specific ambassador.
     */
    public function index(): JsonResponse
    {
        $scholarships = $this->scholarshipService->getAll();

        return response()->json([
            'success' => true,
            'data'    => $scholarships,
        ]);
    }

    /**
     * GET /api/scholarships/ambassador/{id}
     *
     * Returns all active scholarships with their ambassador.
     */
    public function getAllByAmbassadorId($id): JsonResponse
    {
        $scholarships = $this->scholarshipService->getAllByAmbassadorId($id);

        return response()->json([
            'success' => true,
            'data'    => $scholarships,
        ]);
    }
}
