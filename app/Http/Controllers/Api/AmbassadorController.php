<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\AmbassadorService;
use Illuminate\Http\JsonResponse;

class AmbassadorController extends Controller
{
    public function __construct(
        private readonly AmbassadorService $ambassadorService
    ) {}

    /**
     * GET /api/ambassadors
     *
     * Returns all active ambassadors with their active scholarships.
     */
    public function index(): JsonResponse
    {
        $ambassadors = $this->ambassadorService->getAll();

        return response()->json([
            'success' => true,
            'data'    => $ambassadors,
        ]);
    }
}
